<?php

/**
 * Created by PhpStorm.
 * User: rocezon
 * Date: 6/16/16
 * Time: 10:06 AM
 */
namespace Custom\Service\AccessControl;

interface ExternalRoleService
{
    public function checkPrivilege($bundle,$controller,$action);
    public function getRoleList();
    public function saveUserRole($roleId,$userId);

}