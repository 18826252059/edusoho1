<?php
/**
 * Created by PhpStorm.
 * User: XT
 * Date: 16/4/22
 * Time: 21:11
 */

namespace Topxia\Service\Custom\Dao\Impl;


use Topxia\Service\Common\BaseDao;
use Topxia\Service\Custom\Dao\CourseNewsDao;

class CourseNewsDaoImpl extends BaseDao implements CourseNewsDao
{
    protected $table = 'course_news';

    public function addNewsByCourseId($data)
    {
        $affected = $this->getConnection()->insert($this->table, $data);
        if ($affected <= 0)
        {
            throw $this->createDaoException("Insert $this->table error.");
        }

        return $this->getConnection()->lastInsertId();
    }

    public function deleteNewsByCourseId($id)
    {
        return $this->getConnection()->delete($this->table, array('id' => $id));
    }

    public function findNewsByCourseId($courseId)
    {

        $sql = "SELECT * FROM {$this->table} WHERE courseId = ?  ORDER BY createTime DESC ";

        return $this->getConnection()->fetchAll($sql, array($courseId)) ?: array();
    }
}