<?php

/**
 * Created by PhpStorm.
 * User: rocezon
 * Date: 6/16/16
 * Time: 10:41 AM
 */
namespace Custom\Service\AccessControl\Dao;

interface ExternalRoleDao
{
    public function getRoleList();
    public function getRoleById($id);
}