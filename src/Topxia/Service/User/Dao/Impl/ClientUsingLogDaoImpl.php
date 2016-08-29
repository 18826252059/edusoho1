<?php
/**
 * Created by PhpStorm.
 * User: MZ
 * Date: 2016/8/18
 * Time: 14:27
 */
namespace Topxia\Service\User\Dao\Impl;

use Topxia\Service\Common\BaseDao;

class ClientUsingLogDaoImpl extends BaseDao implements ClientUsingLogDao
{
    protected $table = 'client_using_log';

    public function addClientUsingLog($log)
    {
        $log['create_time'] = time();
        $affected = $this->getConnection()->insert($this->table, $log);

        if ($affected <= 0) {
            throw $this->createDaoException('Insert user error.');
        }

        return $this->getUser($this->getConnection()->lastInsertId());
    }

}