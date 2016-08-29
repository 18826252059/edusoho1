<?php

/**
 * Created by PhpStorm.
 * User: XT
 * Date: 16/6/7
 * Time: 11:16
 */
namespace Custom\Service\Classroom;
interface ClassroomService
{
    public function getClassroomBythirdClassroomId($thirdClassroomId);

    public function getClassroomsBythirdClassroomIds(array $ids);
}