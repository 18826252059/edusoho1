<?php
/**
 * Created by PhpStorm.
 * User: XT
 * Date: 16/6/7
 * Time: 14:16
 */

namespace Custom\Service\Classroom\Dao;


interface ClassroomAnnouncementDao
{
    public function findAllAnnouncementByClassroomId($classroomId, $start, $limit);

    public function findAllAnnouncementCountByClassroomId($classroomId);

    public function getAnnouncement($id);

    public function updateAnnouncement($id, array $fields);

    public function addAnnouncement(array $tag);
}