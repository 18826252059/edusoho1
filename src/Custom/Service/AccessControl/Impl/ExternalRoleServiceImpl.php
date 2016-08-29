<?php

/**
 * Created by PhpStorm.
 * User: rocezon
 * Date: 6/16/16
 * Time: 10:06 AM
 */
namespace Custom\Service\AccessControl\Impl;

use Custom\Service\AccessControl\ExternalRoleService;
use Topxia\Common\ArrayToolkit;
use Topxia\Service\Common\BaseService;

class ExternalRoleServiceImpl extends BaseService implements ExternalRoleService
{
    public function checkPrivilege($bundle,$controller,$action)
    {
        $user = $this->getCurrentUser();
        $storage_privileage = $this->getExternalPrivilegeDao()->getPrivilege(intval($user['externalRoleId']),$bundle,$controller,$action);

        if (!empty($storage_privileage))
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function getRoleList()
    {
        return $this->getExternalRoleDao()->getRoleList();
    }

    public function saveUserRole($roleId,$userId)
    {
         $storage_role =  $this->getExternalRoleDao()->getRoleById($roleId);
         if (empty($storage_role))
         {
             throw $this->createServiceException('该角色不存在');
         }
         $storage_user = $this->getUserDao()->getUser($userId, false);
        if (empty($storage_user))
        {
            throw $this->createServiceException('用户不存在');
        }
        $this->getUserDao()->updateUser($userId, array('externalRoleId' => $roleId));
        return true;
    }

    protected function getExternalPrivilegeDao()
    {
        return $this->createDao('Custom:AccessControl.ExternalPrivilegeDao');
    }

    protected function getExternalRoleDao()
    {
        return $this->createDao('Custom:AccessControl.ExternalRoleDao');
    }
    protected function getUserDao()
    {
        return $this->createDao('User.UserDao');
    }
}