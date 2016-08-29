<?php

/**
 * Created by PhpStorm.
 * User: XT
 * Date: 16/5/27
 * Time: 14:54
 */
namespace Custom\Service\Relation\Dao\Impl;

use Custom\Service\Relation\Dao\CategoryRelationDao;
use Topxia\Service\Common\BaseDao;

class CategoryRelationDaoImpl extends BaseDao implements CategoryRelationDao
{
    protected $table = 'relation';

    public function findtoIdByfromId($fromId, $fromType,$toType, $all = false, $start = 0, $limit = 0)
    {
        $disable = " AND disabled = 0";
        if ($all)
        {
            $disable = "";
        }
        if ($limit > 0)
        {
            $sqlLimt = " LIMIT {$start}, {$limit} ";
        }
        else
        {
            $sqlLimt = "";
        }
        $sql = "SELECT * FROM {$this->table} WHERE fromId = ? AND fromType = ? AND toType=? $disable ORDER BY createTime DESC $sqlLimt";

        return $this->getConnection()->fetchAll($sql, array($fromId, $fromType,$toType)) ?: array();
    }

    public function get($id)
    {
        $sql = "SELECT * FROM {$this->table} WHERE id = ?  LIMIT 1";
        return $this->getConnection()->fetchAssoc($sql, array($id));
    }

    public function add($data)
    {

        $affected = $this->getConnection()->insert($this->table, $data);
        if ($affected <= 0)
        {
            throw $this->createDaoException("Insert $this->table error.");
        }

        return $this->get($this->getConnection()->lastInsertId());
    }

    public function updateByParam($params, $fields)
    {
        $this->getConnection()->update($this->table, $fields, $params);
    }
}