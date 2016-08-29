<?php

/**
 * Created by PhpStorm.
 * User: rocezon
 * Date: 6/16/16
 * Time: 10:41 AM
 */
namespace Custom\Service\AccessControl\Dao\Impl;

use Custom\Service\AccessControl\Dao\ExternalPrivilegeDao;
use Topxia\Service\Common\BaseDao;

class ExternalPrivilegeDaoImpl extends BaseDao implements ExternalPrivilegeDao
{
    protected $table = 't_sys_member_role_priv';
    private $serializeFields = array(
        'priv_id' => 'json',
        'menu_id' => 'json',
    );

    public function getPrivilege($roleId,$bundle,$controller,$action)
    {
        $sql = "SELECT * FROM {$this->table} where role_id=? and folder = ? and controller = ? and method = ? LIMIT 1";

        $priv= $this->getConnection()->fetchAssoc($sql, array($roleId,$bundle,$controller,$action));

        return $priv ? $this->createSerializer()->unserialize($priv, $this->serializeFields) : array();
    }
}