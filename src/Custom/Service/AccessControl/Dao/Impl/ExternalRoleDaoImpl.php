<?php

/**
 * Created by PhpStorm.
 * User: rocezon
 * Date: 6/16/16
 * Time: 10:41 AM
 */
namespace Custom\Service\AccessControl\Dao\Impl;

use Custom\Service\AccessControl\Dao\ExternalRoleDao;
use Topxia\Service\Common\BaseDao;

class ExternalRoleDaoImpl extends BaseDao implements ExternalRoleDao
{
    protected $table = 't_sys_member_role';
    private $serializeFields = array(
        'role_id' => 'json',
        'role_name' => 'json',
        'listorder' => 'json'
    );

    public function getRoleList()
    {
        $sql = "SELECT * FROM {$this->table}";

        $roles= $this->getConnection()->fetchAll($sql);

        return $roles ? $this->createSerializer()->unserialize($roles, $this->serializeFields) : array();
    }

    public function getRoleById($id)
    {
        $sql = "SELECT * FROM {$this->table} WHERE role_id = ? LIMIT 1";
        return $this->getConnection()->fetchAssoc($sql, array($id));
    }
}