<?php
/**
 * Created by PhpStorm.
 * User: XT
 * Date: 16/6/6
 * Time: 15:12
 */

namespace Custom\MobileBundle\Controller;


use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Yaml\Yaml;

class ClassRoomManagerController extends CustomMobileBaseController
{
    public function createClassRoomAction(Request $request)
    {
        $this->init($request);
        $request_content = file_get_contents('php://input');
        $request_data = json_decode($request_content, true);
        if (empty($request_data) || empty($request_data['title']) || empty($request_data['category']) || empty($request_data['classroomId']))
        {
            $this->_result['code'] = 102;
            return $this->createResponse($request);
        }
        $isClassroomExisted = $this->getClassroomService()->findClassroomByTitle($request_data['title']);

        if (!empty($isClassroomExisted))
        {
            $this->_result['code'] = 106;
            $this->_result['codeMsg'] = 115;
            return $this->createResponse($request);
        }
        $classroom = $this->getCustomClassroomService()->getClassroomBythirdClassroomId($request_data['classroomId']);

        if (!empty($classroom))
        {
            $this->_result['code'] = 106;
            $this->_result['codeMsg'] = 119;
            return $this->createResponse($request);
        }

        $classroom['title'] = $request_data['title'];
        $classroom['thirdCategory'] = $request_data['category'];
        $classroom['about'] = isset($request_data['about'])?$request_data['about']:'';
        $classroom['thirdClassroomId'] = $request_data['classroomId'];
        $classroom['showable'] = 1;
        $classroom['buyable'] = 0;
        $classroom['status'] = 'closed';
        try
        {
            $classroom = $this->getClassroomService()->addClassroom($classroom);
        } catch (\Exception $e)
        {
            $this->_result['code'] = 112;
            return $this->createErrorResponse($request, '', $e->getMessage());
        }

        if (empty($classroom['id']))
        {
            $this->_result['code'] = 112;
            return $this->createResponse($request);
        }
        $request_data = array_merge($request_data, array('reClassroomId' => $classroom['id']));
        $this->_result['data'] = $request_data;
        return $this->createResponse($request);

    }

    public function classRoomMemberAddAction(Request $request)
    {
        $this->init($request);
        $request_content = file_get_contents('php://input');
        $request_data = json_decode($request_content, true);
        if (empty($request_data) || empty($request_data['classroomId']) || empty($request_data['userId']))
        {
            $this->_result['code'] = 102;
            return $this->createResponse($request);
        }
        //根据培育班的班级ID查询
        $classroom = $this->getCustomClassroomService()->getClassroomBythirdClassroomId($request_data['classroomId']);
        if (empty($classroom))
        {
            $this->_result['code'] = 112;
            $this->_result['codeMsg'] = 117;
            return $this->createResponse($request);
        }
        if (!in_array($classroom['status'], array('published', 'closed')))
        {
            $this->_result['code'] = 112;
            $this->_result['codeMsg'] = 116;
            return $this->createResponse($request);
        }

        //1.查找userId是否存在
        $bind = $this->getUserService()->getUserBindByTypeAndFromId('longping', $request_data['userId']);
        //2.1 若存在直接加入班级
        if (!empty($bind))
        {
            $becomeStudentResult = $this->becomeStudent($classroom, $bind['toId'], $request);
        }
        else
        {
            //2.2 若不存在，先调用会员中心获取userId资料，添加该用户
            $yaml = Yaml::parse(file_get_contents(__DIR__ . '/../../../Custom/WebBundle/Resources/config/requestParam.yml'));
            $serviceVesion = $yaml['passportServiceVesion'];
            $serviceName = 'user.info.query';
            $serviceMethod = 'POST';
            $data = array('data' => json_encode(array(
                'userId' => $request_data['userId'],
            )));
            $response = $this->getServiceGate()->sendRequest($serviceName, $serviceMethod, $data, $serviceVesion);
            if (!empty($response['code']) && $response['code'] == '1' && !empty($response['content']))
            {
                $content = json_decode($response['content'], TRUE);
                $userId = $content['userRegBean']['userId'];
                $userAvatarUrl = $content['userDataBean']['userAvatarUrl'];
                $userNickName = empty($content['userInfoBean']['userNickName']) ? $content['userInfoBean']['userName'] : $content['userInfoBean']['userNickName'];
            }
            else
            {
                $this->_result['code'] = 112;
                $this->_result['codeMsg'] = 118;
                return $this->createResponse($request);
            }
            $registration['type'] = 'import';
            $randString = base_convert(sha1(uniqid(mt_rand(), true)), 16, 36);
            $registration['email'] = 'u_' . substr($randString, 0, 12) . '@edusoho.net';
            $registration['createdIp'] = $this->container->get("request")->getClientIp();
            $registration['token'] = array('userId' => $userId);
            if (!empty($userAvatarUrl))
            {
                $registration['smallAvatar'] = $registration['mediumAvatar'] = $registration['largeAvatar'] = $userAvatarUrl;
            }
            if (!empty($userNickName))
            {
                $registration['nickname'] = $userNickName;
            }
            else
            {
                $registration['nickname'] = !empty($content['userRegBean']['userLoginPhone']) ? substr_replace($content['userRegBean']['userLoginPhone'], '****', 3, 4) : substr($randString, 0, 12);
            }
            $user = $this->getUserService()->register($registration, 'longping');
            if (isset($formData['roles']))
            {
                $roles[] = 'ROLE_TEACHER';
                array_push($roles, 'ROLE_USER');
                $this->getUserService()->changeUserRoles($user['id'], $roles);
            }
            $becomeStudentResult = $this->becomeStudent($classroom, $user['id'], $request);
        }

        if ($becomeStudentResult === true)
        {
            $this->_result['data'] = $request_data;
            return $this->createResponse($request);
        }
        else
        {
            return $becomeStudentResult;

        }
    }

    private function becomeStudent($classroom, $userId, $request)
    {
        $order = $this->getOrderService()->createOrder(array(
            'userId' => $userId,
            'title' => "购买班级《{$classroom['title']}》(管理员添加)",
            'targetType' => 'classroom',
            'targetId' => $classroom['id'],
            'amount' => 0,
            'payment' => 'none',
            'snPrefix' => 'CR'
        ));

        $this->getOrderService()->payOrder(array(
            'sn' => $order['sn'],
            'status' => 'success',
            'amount' => $order['amount'],
            'paidTime' => time()
        ));

        $info = array(
            'orderId' => $order['id'],
            'note' => ''
        );
        try
        {
            $this->getClassroomService()->becomeStudent($order['targetId'], $order['userId'], $info);
        } catch (\Exception $e)
        {
            $this->_result['code'] = 112;
            return $this->createErrorResponse($request, '', $e->getMessage());
        }

        $member = $this->getClassroomService()->getClassroomMember($classroom['id'], $userId);
        $user = $this->getCurrentUser();
        if (empty($user))
        {
            $user = array('id' => 0, 'nickname' => '系统');
        }
        $message = array(
            'classroomId' => $classroom['id'],
            'classroomTitle' => $classroom['title'],
            'userId' => $user['id'],
            'userName' => $user['nickname'],
            'type' => 'create');

        $this->getNotificationService()->notify($member['userId'], 'classroom-student', $message);

        $this->getLogService()->info('classroom', 'add_student', "班级《{$classroom['title']}》(#{$classroom['id']})，添加学员{$user['nickname']}(#{$user['id']})，备注：");
        return true;
    }

    private function getOrderService()
    {
        return $this->getServiceKernel()->createService('Order.OrderService');
    }

    protected function getClassroomService()
    {
        return $this->getServiceKernel()->createService('Classroom:Classroom.ClassroomService');
    }

    protected function getCustomClassroomService()
    {
        return $this->getServiceKernel()->createService('Custom:Classroom.ClassroomService');
    }

    protected function getServiceGate()
    {
        return $this->getServiceKernel()->createService('Custom.ServiceGateService');
    }

}