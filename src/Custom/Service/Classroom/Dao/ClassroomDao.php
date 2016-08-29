<?php

/**
 * Created by PhpStorm.
 * User: XT
 * Date: 16/6/7
 * Time: 11:22
 */
namespace Custom\Service\Classroom\Dao;
interface ClassroomDao
{
    public function getClassroomBythirdClassroomId($thirdClassroomId);

    public function getClassroomsBythirdClassroomIds(array $ids);
}