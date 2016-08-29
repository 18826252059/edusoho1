<?php
/**
 * Created by PhpStorm.
 * User: XT
 * Date: 16/4/15
 * Time: 17:41
 */

namespace Topxia\Service\Custom\Dao\Impl;


use Topxia\Service\Common\BaseDao;
use Topxia\Service\Custom\Dao\CourseProductBaseDao;

class CourseProductBaseDaoImpl extends BaseDao implements CourseProductBaseDao
{
    protected $table = 'course_product_base';

    public function findActiveProductBaseByCourseId($courseId, $all = false, $start = 0, $limit = 0)
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
        $sql = "SELECT * FROM {$this->table} WHERE courseId = ? $disable ORDER BY seq ASC $sqlLimt";

        return $this->getConnection()->fetchAll($sql, array($courseId)) ?: array();
    }

    public function getCourseProductBase($id)
    {
        $sql = "SELECT * FROM {$this->table} WHERE id = ?  LIMIT 1";
        return $this->getConnection()->fetchAssoc($sql, array($id));
    }

    public function addCourseProductBase($courseProductBase)
    {

        $affected = $this->getConnection()->insert($this->table, $courseProductBase);
        if ($affected <= 0)
        {
            throw $this->createDaoException("Insert $this->table error.");
        }

        return $this->getCourseProductBase($this->getConnection()->lastInsertId());
    }

    public function updateByParam($params, $fields)
    {
        $this->getConnection()->update($this->table, $fields, $params);
    }

    public function findCoursesByProductBaseId($productBaseId)
    {

        $disable = " AND disabled = 0";
        $sql = "SELECT * FROM {$this->table} WHERE productBaseId = ? $disable ORDER BY seq ASC;";

        return $this->getConnection()->fetchAll($sql, array($productBaseId)) ?: array();
    }
}