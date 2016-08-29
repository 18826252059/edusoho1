<?php
namespace Topxia\Service\Custom\Dao;
/**
 * Created by PhpStorm.
 * User: XT
 * Date: 16/4/14
 * Time: 20:26
 */
interface ProductBaseDao
{

    public function findAllProductBasesCount();

    public function findAllProductBases($start, $limit);

    public function getProductBase($id);

    public function updateProductBase($id, array $fields);

    public function addProductBase(array $tag);

    public function findProductBasesByIds(array $ids);

    public function searchProductBases($conditions, $orderBy, $start, $limit);

    public function searchProductBaseCount($conditions);

}