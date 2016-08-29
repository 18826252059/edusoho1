<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/8/10
 * Time: 11:51
 */
namespace Topxia\AdminBundle\Controller;

use Symfony\Bridge\Monolog\Logger;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\Yaml\Yaml;
use Topxia\Common\Paginator;
use Topxia\Common\ArrayToolkit;
use Topxia\WebBundle\DataDict\UserRoleDict;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UserAddController extends BaseController
{
    public function indexAction(Request $request)
    {
        $fields = $request->query->all();

        $conditions = array(
            'roles' => '',
            'keywordType' => '',
            'keyword' => '',
            'keywordUserType' => ''
        );

        if (empty($fields))
        {
            $fields = array();
        }

        $conditions = array_merge($conditions, $fields);

        //根据mobile查询user_profile获得userIds

        if (isset($conditions['keywordType']) && $conditions['keywordType'] == 'verifiedMobile' && !empty($conditions['keyword']))
        {
            $profilesCount = $this->getUserService()->searchUserProfileCount(array('mobile' => $conditions['keyword']));
            $userProfiles = $this->getUserService()->searchUserProfiles(
                array('mobile' => $conditions['keyword']),
                array('id', 'DESC'),
                0,
                $profilesCount
            );
            $userIds = ArrayToolkit::column($userProfiles, 'id');

            if (!empty($userIds))
            {
                unset($conditions['keywordType']);
                unset($conditions['keyword']);
                $conditions['userIds'] = $userIds;
            }
        }

        $userCount = $this->getUserService()->searchUserCount($conditions);
        $paginator = new Paginator(
            $this->get('request'),
            $userCount,
            20
        );

        $users = $this->getUserService()->searchUsers(
            $conditions,
            array('createdTime', 'DESC'),
            $paginator->getOffsetCount(),
            $paginator->getPerPageCount()
        );

        $app = $this->getAppService()->findInstallApp("UserImporter");

        $showUserExport = false;

        if (!empty($app) && array_key_exists('version', $app))
        {
            $showUserExport = version_compare($app['version'], "1.0.2", ">=");
        }

        $userIds = ArrayToolkit::column($users, 'id');
        $profiles = $this->getUserService()->findUserProfilesByIds($userIds);

        return $this->render('TopxiaAdminBundle:Import:import.html.twig', array(
            'users' => $users,
            'userCount' => $userCount,
            'paginator' => $paginator,
            'profiles' => $profiles,
            'showUserExport' => $showUserExport
        ));
//        return $this->render('TopxiaAdminBundle:Import:import.html.twig');
    }

    protected function getAppService()
    {
        return $this->getServiceKernel()->createService('CloudPlatform.AppService');
    }
}