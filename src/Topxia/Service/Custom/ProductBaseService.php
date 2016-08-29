<?php
/**
 * Created by PhpStorm.
 * User: XT
 * Date: 16/4/14
 * Time: 20:25
 */

namespace Topxia\Service\Custom;


interface ProductBaseService
{
    public function findAllProductBasesCount();

    public function findAllProductBases($start, $limit);

    public function getProductBase($id);

    public function updateProductBase($id, array $fields);

    public function addProductBase(array $tag);

    public function deleteProductBase($id);

    public function findProductBaseByCourseId($id,$all=false);

    public function searchProductBases($conditions,  $start, $limit);

    public function searchProductBaseCount($conditions);
}