<?php
/**
 * Created by PhpStorm.
 * User: XT
 * Date: 16/4/20
 * Time: 10:24
 */

namespace Topxia\Service\Custom\Dao;


interface OfflineScheduleDao
{
    public function findAllOfflineScheduleByClassroomId($classroomId,$start, $limit);

    public function findAllOfflineScheduleCountByClassroomId($classroomId);

    public function getOfflineSchedule($id);

    public function updateOfflineSchedule($id, array $fields);

    public function addOfflineSchedule(array $tag);
}