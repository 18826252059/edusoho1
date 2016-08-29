<?php

/**
 * Created by PhpStorm.
 * User: rocezon
 * Date: 6/16/16
 * Time: 10:41 AM
 */
namespace Custom\Service\AccessControl\Dao;

interface ExternalPrivilegeDao
{
    public function getPrivilege($roleId,$bundle,$controller,$action);
}