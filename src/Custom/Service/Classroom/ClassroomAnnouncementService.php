<?php
/**
 * Created by PhpStorm.
 * User: XT
 * Date: 16/6/7
 * Time: 14:36
 */

namespace Custom\Service\Classroom;


interface ClassroomAnnouncementService
{
    public function findAllClassroomAnnouncementByClassroomId($classroomId,$start, $limit);

    public function findAllClassroomAnnouncementCountByClassroomId($classroomId);

    public function getClassroomAnnouncement($id);

    public function updateClassroomAnnouncement($id, array $fields);

    public function addClassroomAnnouncement(array $tag);

    public function deleteClassroomAnnouncement($id);
}