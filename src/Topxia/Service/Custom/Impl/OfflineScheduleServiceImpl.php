<?php
/**
 * Created by PhpStorm.
 * User: XT
 * Date: 16/4/20
 * Time: 10:32
 */

namespace Topxia\Service\Custom\Impl;


use Topxia\Common\ArrayToolkit;
use Topxia\Service\Common\BaseService;
use Topxia\Service\Custom\OfflineScheduleService;

class OfflineScheduleServiceImpl extends BaseService implements OfflineScheduleService
{

    public function findAllOfflineScheduleByClassroomId($classroomId, $start, $limit)
    {
        return $this->getOfflineScheduleDao()->findAllOfflineScheduleByClassroomId($classroomId, $start, $limit);
    }

    public function findAllOfflineScheduleCountByClassroomId($classroomId)
    {
        return $this->getOfflineScheduleDao()->findAllOfflineScheduleCountByClassroomId($classroomId);
    }


    public function getOfflineSchedule($id)
    {
        return $this->getOfflineScheduleDao()->getOfflineSchedule($id);
    }

    public function updateOfflineSchedule($id, array $fields)
    {
        $offlineSchedule = $this->getOfflineSchedule($id);
        if (empty($offlineSchedule))
        {
            throw $this->createServiceException("线下班级课程(#{$id})不存在，更新失败！");
        }

        $fields = ArrayToolkit::parts($fields, array('title', 'teacher', 'address', 'startTime', 'endTime','classroomId'));
        $this->filterOfflineScheduleFields($fields, $offlineSchedule);

        $this->getLogService()->info('offlineSchedule', 'update', "编辑线下课程信息(#{$id})");

        return $this->getOfflineScheduleDao()->updateOfflineSchedule($id, $fields);
    }

    public function addOfflineSchedule(array $tag)
    {
        $offlineSchedule = ArrayToolkit::parts($tag, array('title', 'teacher', 'address', 'startTime', 'endTime','classroomId'));

        $offlineSchedule = $this->filterOfflineScheduleFields($offlineSchedule);
        $offlineSchedule['createTime'] = date('Y-m-d H:i:s');;

        $offlineSchedule = $this->getOfflineScheduleDao()->addOfflineSchedule($offlineSchedule);

        $this->getLogService()->info('offlineSchedule', 'create', "添加班级{$offlineSchedule['classroomId']}线下课程(#{$offlineSchedule['id']})");
        return $offlineSchedule;
    }

    public function deleteOfflineSchedule($id)
    {
        $offlineSchedule = $this->getOfflineSchedule($id);
        if (empty($offlineSchedule))
        {
            throw $this->createServiceException("课程信息(#{$id})不存在，更新失败！");
        }

        $fields['status'] = 'delete';

        $this->getLogService()->info('offlineSchedule', 'update', "删除班级{$offlineSchedule['classroomId']}线下课程(#{$id})");

        return $this->getOfflineScheduleDao()->updateOfflineSchedule($id, $fields);
    }

    protected function filterOfflineScheduleFields(&$offlineSchedule, $relatedProductBase = null)
    {
        if (empty($offlineSchedule['title']))
        {
            throw $this->createServiceException('基地名不能为空，添加失败！');
        }

        $offlineSchedule['title'] = (string)$offlineSchedule['title'];

        return $offlineSchedule;
    }

    protected function getOfflineScheduleDao()
    {
        return $this->createDao('Custom.OfflineScheduleDao');
    }

    protected function getLogService()
    {
        return $this->createService('System.LogService');
    }
}