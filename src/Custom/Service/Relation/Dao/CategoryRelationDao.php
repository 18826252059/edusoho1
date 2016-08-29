<?php

/**
 * Created by PhpStorm.
 * User: XT
 * Date: 16/5/27
 * Time: 14:52
 */
namespace Custom\Service\Relation\Dao;
interface CategoryRelationDao
{
    public function findtoIdByfromId($fromId,$fromType,$toType,$all=false);

    public function get($id);

    public function add($data);

    public function updateByParam($params, $fields);

}