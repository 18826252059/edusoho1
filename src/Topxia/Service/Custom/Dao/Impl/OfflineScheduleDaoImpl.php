<?php
/**
 * Created by PhpStorm.
 * User: XT
 * Date: 16/4/20
 * Time: 10:24
 */

namespace Topxia\Service\Custom\Dao\Impl;


use Topxia\Service\Common\BaseDao;
use Topxia\Service\Custom\Dao\OfflineScheduleDao;

class OfflineScheduleDaoImpl extends BaseDao implements OfflineScheduleDao
{
    protected $table = 'offline_schedule';

    public function findAllOfflineScheduleByClassroomId($classroomId, $start, $limit)
    {
        if (empty($classroomId))
        {
            return array();
        }
        if($limit>0)
        {
            $this->filterStartLimit($start, $limit);
            $sql = "SELECT * FROM {$this->table}  where status!='delete' AND classroomId= ?  ORDER BY createTime Desc,id DESC LIMIT {$start}, {$limit}";
        }else{
            $sql = "SELECT * FROM {$this->table}  where status!='delete' AND classroomId= ?  ORDER BY createTime Desc,id DESC Desc ";
        }
        return $this->getConnection()->fetchAll($sql, array($classroomId));
    }

    public function getOfflineSchedule($id)
    {
        $sql = "SELECT * FROM {$this->table} WHERE id = ?  AND status!='delete' LIMIT 1";
        return $this->getConnection()->fetchAssoc($sql, array($id));
    }

    public function updateOfflineSchedule($id, array $fields)
    {
        $this->getConnection()->update($this->table, $fields, array('id' => $id));
        return $this->getOfflineSchedule($id);
    }

    public function addOfflineSchedule(array $tag)
    {
        $affected = $this->getConnection()->insert($this->table, $tag);
        if ($affected <= 0)
        {
            throw $this->createDaoException("Insert $this->table error.");
        }
        return $this->getOfflineSchedule($this->getConnection()->lastInsertId());
    }

    public function findAllOfflineScheduleCountByClassroomId($classroomId)
    {
        if (empty($classroomId))
        {
            return array();
        }
        $sql = "SELECT COUNT(*) FROM {$this->table}  where status!='delete' AND classroomId= ? ";
        return $this->getConnection()->fetchColumn($sql, array($classroomId));
    }
}