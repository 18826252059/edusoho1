<?php
/**
 * Created by PhpStorm.
 * User: XT
 * Date: 16/6/7
 * Time: 14:37
 */

namespace Custom\Service\Classroom\Impl;


use Custom\Service\Classroom\ClassroomAnnouncementService;
use Topxia\Common\ArrayToolkit;
use Topxia\Service\Common\BaseService;

class ClassroomAnnouncementServiceImpl extends BaseService implements ClassroomAnnouncementService
{

    public function findAllClassroomAnnouncementByClassroomId($classroomId, $start, $limit)
    {
        return $this->getClassroomAnnouncementDao()->findAllAnnouncementByClassroomId($classroomId, $start, $limit);
    }

    public function findAllClassroomAnnouncementCountByClassroomId($classroomId)
    {
        return $this->getClassroomAnnouncementDao()->findAllAnnouncementCountByClassroomId($classroomId);
    }

    public function getClassroomAnnouncement($id)
    {
        return $this->getClassroomAnnouncementDao()->getAnnouncement($id);
    }

    public function updateClassroomAnnouncement($id, array $fields)
    {
        $classroomAnnouncement = $this->getClassroomAnnouncement($id);
        if (empty($classroomAnnouncement))
        {
            throw $this->createServiceException("(该公告信息#{$id})不存在，更新失败！");
        }

        $fields = ArrayToolkit::parts($fields, array('title', 'content', 'createTime', 'updateTime', 'userId', 'classroomId', 'status'));
        $this->filterClassroomAnnouncementFields($fields, $classroomAnnouncement);

        $this->getLogService()->info('classroomAnnouncement', 'update', "编辑公告信息(#{$id})");

        return $this->getClassroomAnnouncementDao()->updateAnnouncement($id, $fields);
    }

    protected function filterClassroomAnnouncementFields(&$classroomAnnouncement)
    {
        if (empty($classroomAnnouncement['title']))
        {
            throw $this->createServiceException('公告名称不能为空，添加失败！');
        }
        if (empty($classroomAnnouncement['content']))
        {
            throw $this->createServiceException('公告内容不能为空，添加失败！');
        }

        $classroomAnnouncement['title'] = (string)$classroomAnnouncement['title'];

        return $classroomAnnouncement;
    }

    public function addClassroomAnnouncement(array $tag)
    {
        $classroomAnnouncement = ArrayToolkit::parts($tag, array('title', 'content', 'createTime', 'updateTime', 'userId', 'classroomId', 'status'));

        $classroomAnnouncement = $this->filterClassroomAnnouncementFields($classroomAnnouncement);
        $classroomAnnouncement['createTime'] = date('Y-m-d H:i:s');;

        $classroomAnnouncement = $this->getClassroomAnnouncementDao()->addAnnouncement($classroomAnnouncement);

        $this->getLogService()->info('classroomAnnouncement', 'create', "添加班级{$classroomAnnouncement['classroomId']}公告(#{$classroomAnnouncement['id']})");
        return $classroomAnnouncement;
    }

    public function deleteClassroomAnnouncement($id)
    {
        $classroomAnnouncement = $this->getClassroomAnnouncement($id);
        if (empty($classroomAnnouncement))
        {
            throw $this->createServiceException("信息(#{$id})不存在，更新失败！");
        }

        $fields['status'] = 'delete';

        $this->getLogService()->info('offlineSchedule', 'update', "删除班级{$classroomAnnouncement['classroomId']}线下课程(#{$id})");

        return $this->getClassroomAnnouncementDao()->updateAnnouncement($id, $fields);
    }

    protected function getClassroomAnnouncementDao()
    {
        return $this->createDao('Custom:Classroom.ClassroomAnnouncementDao');
    }

    protected function getLogService()
    {
        return $this->createService('System.LogService');
    }
}