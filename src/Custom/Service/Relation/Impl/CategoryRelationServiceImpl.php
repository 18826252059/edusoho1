<?php

/**
 * Created by PhpStorm.
 * User: XT
 * Date: 16/5/27
 * Time: 14:52
 */
namespace Custom\Service\Relation\Impl;

use Custom\Service\Relation\CategoryRelationService;
use Topxia\Common\ArrayToolkit;
use Topxia\Service\Common\BaseService;

class CategoryRelationServiceImpl extends BaseService implements CategoryRelationService
{

    public function findtoIdByfromId($fromId, $fromType, $toType, $all = false)
    {
        return $this->getCategoryRelationDao()->findtoIdByfromId($fromId, $fromType, $toType, $all);
    }


    public function add($fromId, $formType, $fromName, $toDatas)
    {
        if (empty($toDatas||empty($toDatas[0]['toType'])))
        {
            return false;
        }
        $relations = $this->findtoIdByfromId($fromId, $formType, $toDatas[0]['toType'], true);
        $toDatas = ArrayToolkit::index($toDatas, 'toId');
        $relations = ArrayToolkit::column($relations, 'toId');
        $toIds = ArrayToolkit::column($toDatas, 'toId');
        $notADD = array_diff($toIds, $relations);
        foreach ($notADD as $v)
        {
            $data = array(
                'fromId' => $fromId,
                'fromType' => $formType,
                'fromName' => $fromName,
                'toId' => $toDatas[$v]['toId'],
                'toType' => $toDatas[$v]['toType'],
                'toName' => $toDatas[$v]['toName'],
                'toPath' => $toDatas[$v]['toPath'],
                'createTime' => date("Y-m-d H:i:s")
            );
            $this->getCategoryRelationDao()->add($data);
        }
        $add = array_diff($toIds, $notADD);
        foreach ($add as $v)
        {
            $data = array(
                'fromId' => $fromId,
                'fromType' => $formType,
                'toId' => $toDatas[$v]['toId'],
                'toType' => $toDatas[$v]['toType'],
            );
            $this->getCategoryRelationDao()->updateByParam($data, array('disabled' => 0));
        }
        return true;
    }

    public function delete($id)
    {
        return $this->getCategoryRelationDao()->updateByParam(array('id' => $id), array('disabled' => 1));
    }

    protected function getCategoryRelationDao()
    {
        return $this->createDao('Custom:Relation.CategoryRelationDao');
    }
}