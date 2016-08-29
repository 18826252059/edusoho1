<?php
namespace Topxia\Service\Custom\Dao\Impl;

use Topxia\Service\Common\BaseDao;
use Topxia\Service\Custom\Dao\ProductBaseDao;

/**
 * Created by PhpStorm.
 * User: XT
 * Date: 16/4/14
 * Time: 20:26
 */
class ProductBaseDaoImpl extends BaseDao implements ProductBaseDao
{
    protected $table = 'product_base';

    public function findAllProductBasesCount()
    {
        $sql = "SELECT COUNT(*) FROM {$this->table} where status!='delete' ";
        return $this->getConnection()->fetchColumn($sql, array());
    }

    public function findAllProductBases($start, $limit)
    {
        $this->filterStartLimit($start, $limit);
        $sql = "SELECT * FROM {$this->table}  where status!='delete' ORDER BY createdTime ASC LIMIT {$start}, {$limit}";
        return $this->getConnection()->fetchAll($sql, array());
    }

    public function getProductBase($id)
    {
        $sql = "SELECT * FROM {$this->table} WHERE id = ?  AND status!='delete' LIMIT 1";
        return $this->getConnection()->fetchAssoc($sql, array($id));
    }

    public function updateProductBase($id, array $fields)
    {
        $this->getConnection()->update($this->table, $fields, array('id' => $id));
        return $this->getProductBase($id);
    }

    public function addProductBase(array $tag)
    {
        $affected = $this->getConnection()->insert($this->table, $tag);
        if ($affected <= 0)
        {
            throw $this->createDaoException("Insert $this->table error.");
        }
        return $this->getProductBase($this->getConnection()->lastInsertId());
    }

    public function findProductBasesByIds(array $ids)
    {
        if (empty($ids)) {
            return array();
        }

        $marks = str_repeat('?,', count($ids) - 1).'?';
        $status="AND status!='delete'";
        $sql   = "SELECT * FROM {$this->table} WHERE id  IN ({$marks})  $status";
        return $this->getConnection()->fetchAll($sql, $ids);
    }

    public function searchProductBases($conditions, $orderBy, $start, $limit)
    {
        if(!empty($limit)&&$limit>0)
        {
            $this->filterStartLimit($start, $limit);
            $builder = $this->_createSearchQueryBuilder($conditions)
                ->select('*')
                ->orderBy($orderBy[0], $orderBy[1])
                ->setFirstResult($start)
                ->setMaxResults($limit);
        }else
        {
            $builder = $this->_createSearchQueryBuilder($conditions)
                ->select('*')
                ->orderBy($orderBy[0], $orderBy[1]);
        }

        if ($orderBy[0] == 'recommendedSeq') {
            $builder->addOrderBy('recommendedTime', 'DESC');
        }

        return $builder->execute()->fetchAll() ?: array();
    }

    public function searchProductBaseCount($conditions)
    {
        $builder = $this->_createSearchQueryBuilder($conditions)
            ->select('COUNT(id)');
        return $builder->execute()->fetchColumn(0);
    }

    protected function _createSearchQueryBuilder($conditions)
    {
        if (isset($conditions['title'])) {
            $conditions['titleLike'] = "%{$conditions['title']}%";
            unset($conditions['title']);
        }

        if (empty($conditions['status']) || $conditions['status'] == "") {
            unset($conditions['status']);
        }

        $builder = $this->createDynamicQueryBuilder($conditions)
            ->from($this->table, 'product_base')
            ->andWhere('status = :status')
            ->andWhere('title LIKE :titleLike')
            ->andWhere('id NOT IN ( :excludeIds )')
            ->andWhere('id IN ( :productBaseIds )');

        return $builder;
    }



}