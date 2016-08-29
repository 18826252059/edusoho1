<?php
/**
 * Created by PhpStorm.
 * User: XT
 * Date: 16/4/18
 * Time: 16:58
 */

namespace Custom\WebBundle\Controller;


use Symfony\Component\HttpFoundation\Request;
use Topxia\Common\ArrayToolkit;
use Topxia\Common\Paginator;
use Topxia\WebBundle\Controller\BaseController;

class UserController extends BaseController
{
    public function showAction(Request $request, $id)
    {
        $user = $this->tryGetUser($id);
        $userProfile = $this->getUserService()->getUserProfile($user['id']);
        $userProfile['about'] = strip_tags($userProfile['about'], '');
        $userProfile['about'] = preg_replace("/ /", "", $userProfile['about']);
        $user = array_merge($user, $userProfile);

        if (in_array('ROLE_TEACHER', $user['roles']))
        {
            return $this->_teachAction($user);
        }

//        return $this->_learnAction($user);
    }

    protected function _teachAction($user)
    {
        $conditions = array(
            'userId' => $user['id'],
            'parentId' => 0
        );

        $paginator = new Paginator(
            $this->get('request'),
            $this->getCourseService()->findUserTeachCourseCount($conditions),
            10
        );

        $courses = $this->getCourseService()->findUserTeachCourses(
            $conditions,
            $paginator->getOffsetCount(),
            $paginator->getPerPageCount()
        );

        $coursesCount = $this->getCourseService()->findUserTeachCourseCount($conditions);
        return $this->render('CustomWebBundle:User:user.html.twig', array(
            'user' => $user,
            'courses' => $courses,
            'paginator' => $paginator,
            'type' => 'teach',
            'coursesCount' => $coursesCount
        ));
    }

    public function teachingAction(Request $request, $id)
    {
        $user = $this->tryGetUser($id);
        $conditions = array(
            'roles' => array('teacher', 'headTeacher'),
            'userId' => $user['id']
        );
        $classroomMembers = $this->getClassroomService()->searchMembers($conditions, array('createdTime', 'desc'), 0, 9999);

        $classroomIds = ArrayToolkit::column($classroomMembers, 'classroomId');
        $conditions = array(
            'status' => 'published',
            'showable' => '1',
            'classroomIds' => $classroomIds
        );

        $paginator = new Paginator(
            $this->get('request'),
            $this->getClassroomService()->searchClassroomsCount($conditions),
            10
        );

        $classrooms = $this->getClassroomService()->searchClassrooms(
            $conditions,
            array('createdTime', 'DESC'),
            $paginator->getOffsetCount(),
            $paginator->getPerPageCount()
        );

        return $this->render('CustomWebBundle:User:user-classroom.html.twig', array(
            'paginator' => $paginator,
            'classrooms' => $classrooms,
            'user' => $user
        ));
    }

    public function collectionAction()
    {
        return $this->render('CustomWebBundle:User:collection-list.html.twig');
    }

    public function learningAction()
    {
        return $this->render('CustomWebBundle:User:learning-list.html.twig');
    }

    protected function tryGetUser($id)
    {
        $user = $this->getUserService()->getUser($id);

        if (empty($user))
        {
            throw $this->createNotFoundException();
        }

        return $user;
    }

    protected function getUserService()
    {
        return $this->getServiceKernel()->createService('User.UserService');
    }

    protected function getCourseService()
    {
        return $this->getServiceKernel()->createService('Course.CourseService');
    }

    protected function getClassroomService()
    {
        return $this->getServiceKernel()->createService('Classroom:Classroom.ClassroomService');
    }
}