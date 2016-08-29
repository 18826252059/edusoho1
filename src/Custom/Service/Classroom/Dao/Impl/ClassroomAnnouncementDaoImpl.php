<?php
/**
 * Created by PhpStorm.
 * User: XT
 * Date: 16/6/7
 * Time: 14:22
 */

namespace Custom\Service\Classroom\Dao\Impl;


use Custom\Service\Classroom\Dao\ClassroomAnnouncementDao;
use Topxia\Service\Common\BaseDao;

class ClassroomAnnouncementDaoImpl extends BaseDao implements ClassroomAnnouncementDao
{
    protected $table = 'classroom_announcement';

    public function findAllAnnouncementByClassroomId($classroomId, $start, $limit)
    {
        if (empty($classroomId))
        {
            return array();
        }
        if ($limit > 0)
        {
            $this->filterStartLimit($start, $limit);
            $sql = "SELECT * FROM {$this->table}  where status!='delete' AND classroomId= ?  ORDER BY createTime Desc,id DESC LIMIT {$start}, {$limit}";
        }
        else
        {
            $sql = "SELECT * FROM {$this->table}  where status!='delete' AND classroomId= ?  ORDER BY createTime Desc,id DESC ";
        }
        return $this->getConnection()->fetchAll($sql, array($classroomId));
    }

    public function findAllAnnouncementCountByClassroomId($classroomId)
    {
        if (empty($classroomId))
        {
            return array();
        }
        $sql = "SELECT COUNT(*) FROM {$this->table}  where status!='delete' AND classroomId= ? ";
        return $this->getConnection()->fetchColumn($sql, array($classroomId));
    }

    public function getAnnouncement($id)
    {
        $sql = "SELECT * FROM {$this->table} WHERE id = ?  AND status!='delete' LIMIT 1";
        return $this->getConnection()->fetchAssoc($sql, array($id));
    }

    public function updateAnnouncement($id, array $fields)
    {
        $this->getConnection()->update($this->table, $fields, array('id' => $id));
        return $this->getAnnouncement($id);
    }

    public function addAnnouncement(array $tag)
    {
        $affected = $this->getConnection()->insert($this->table, $tag);
        if ($affected <= 0)
        {
            throw $this->createDaoException("Insert $this->table error.");
        }
        return $this->getAnnouncement($this->getConnection()->lastInsertId());
    }
}