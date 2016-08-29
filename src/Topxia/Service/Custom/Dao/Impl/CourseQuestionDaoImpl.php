<?php
/**
 * Created by PhpStorm.
 * User: XT
 * Date: 16/5/3
 * Time: 16:51
 */

namespace Topxia\Service\Custom\Dao\Impl;


use Topxia\Service\Common\BaseDao;
use Topxia\Service\Custom\Dao\CourseQuestionDao;

class CourseQuestionDaoImpl extends BaseDao implements CourseQuestionDao
{
    protected $table = 'course_question';

    public function addCourseQuestion(array $courseQuestion)
    {
        $affected = $this->getConnection()->insert($this->table, $courseQuestion);
        if ($affected <= 0)
        {
            throw $this->createDaoException("Insert $this->table error.");
        }
        return $this->getCourseQuestion($this->getConnection()->lastInsertId());
    }

    public function getCourseQuestion($id)
    {
        $sql = "SELECT * FROM {$this->table} WHERE id = ? LIMIT 1";
        return $this->getConnection()->fetchAssoc($sql, array($id));
    }

    public function getQuestionIdsByCourseId($courseId)
    {
        $sql = "SELECT * FROM {$this->table} WHERE courseId = ?  ORDER BY createTime DESC LIMIT 10 ";

        return $this->getConnection()->fetchAll($sql, array($courseId)) ?: array();
    }
}