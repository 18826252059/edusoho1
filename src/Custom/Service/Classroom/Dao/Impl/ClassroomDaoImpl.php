<?php

/**
 * Created by PhpStorm.
 * User: XT
 * Date: 16/6/7
 * Time: 11:24
 */
namespace Custom\Service\Classroom\Dao\Impl;

use Custom\Service\Classroom\Dao\ClassroomDao;
use Topxia\Service\Common\BaseDao;

class ClassroomDaoImpl extends BaseDao implements ClassroomDao
{
    protected $table = 'classroom';
    private $serializeFields = array(
        'assistantIds' => 'json',
        'teacherIds' => 'json',
        'service' => 'json'
    );

    public function getClassroomBythirdClassroomId($thirdClassroomId)
    {
        $sql = "SELECT * FROM {$this->table} where thirdClassroomId=? LIMIT 1";

        $classroom = $this->getConnection()->fetchAssoc($sql, array($thirdClassroomId));

        return $classroom ? $this->createSerializer()->unserialize($classroom, $this->serializeFields) : array();
    }

    public function getClassroomsBythirdClassroomIds(array $ids)
    {
        if (empty($ids)) {
            return array();
        }

        $marks = str_repeat('?,', count($ids) - 1).'?';
        $sql   = "SELECT * FROM {$this->table} WHERE thirdClassroomId IN ({$marks});";

        $classrooms = $this->getConnection()->fetchAll($sql, $ids);

        return $classrooms ? $this->createSerializer()->unserialize($classrooms, $this->serializeFields) : array();
    }
}