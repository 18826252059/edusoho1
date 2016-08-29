<?php

/**
 * Created by PhpStorm.
 * User: XT
 * Date: 16/6/7
 * Time: 11:17
 */
namespace Custom\Service\Classroom\Impl;

use Custom\Service\Classroom\ClassroomService;
use Topxia\Service\Common\BaseService;
use Topxia\Common\ArrayToolkit;

class ClassroomServiceImpl extends BaseService implements ClassroomService
{

    public function getClassroomBythirdClassroomId($thirdClassroomId)
    {
        return $this->getCategoryRelationDao()->getClassroomBythirdClassroomId($thirdClassroomId);
    }

    public function getClassroomsBythirdClassroomIds(array $ids)
    {
        return ArrayToolkit::index($this->getCategoryRelationDao()->getClassroomsBythirdClassroomIds($ids),'id');
    }

    protected function getCategoryRelationDao()
    {
        return $this->createDao('Custom:Classroom.ClassroomDao');
    }
}
