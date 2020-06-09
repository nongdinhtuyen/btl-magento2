<?php
namespace Hoanganh\ApiGetProduct\Api;

use \Magento\Framework\Exception\NoSuchEntityException;

/**
 * Api get product'information by id
 * Author : Hoang Anh
 * Date : 27/5/2020
 */ 

interface ProductRepositoryInterface
{
   /**
    *
    * @api
    * @param int $id
    * @return \Hoanganh\ApiGetProduct\Api\Data\ProductInterface
    * @throws NoSuchEntityException
    *
    */
   public function getProductById($id);

}