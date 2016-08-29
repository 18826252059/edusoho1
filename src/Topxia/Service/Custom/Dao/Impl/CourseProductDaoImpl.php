<?php
/**
 * Created by PhpStorm.
 * User: XT
 * Date: 16/4/22
 * Time: 21:11
 */

namespace Topxia\Service\Custom\Dao\Impl;


use Topxia\Service\Common\BaseDao;
use Topxia\Service\Custom\Dao\CourseProductDao;

class CourseProductDaoImpl extends BaseDao implements CourseProductDao
{
    protected $table = 'course_product';

    public function addProductByCourseId($data)
    {
        $affected = $this->getConnection()->insert($this->table, $data);
        if ($affected <= 0)
        {
            throw $this->createDaoException("Insert $this->table error.");
        }

        return $this->getConnection()->lastInsertId();
    }

    public function deleteProductByCourseId($id)
    {
        return $this->getConnection()->delete($this->table, array('id' => $id));
    }

    public function findProductByCourseId($courseId,$type,$relationType)
    {

        $sql = "SELECT * FROM {$this->table} WHERE courseId = ? and type= ? and relationType=? ORDER BY createTime DESC ";

        return $this->getConnection()->fetchAll($sql, array($courseId,$type,$relationType)) ?: array();
    }
}