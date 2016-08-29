<?php

/**
 * Created by PhpStorm.
 * User: XT
 * Date: 16/5/27
 * Time: 14:47
 */

namespace Custom\Service\Relation;

interface CategoryRelationService
{
    public function findtoIdByfromId($fromId, $fromType,$toType, $all = false);

    public function add($fromId,$formType,$fromName,$toDatas);

    public function delete($id);

}