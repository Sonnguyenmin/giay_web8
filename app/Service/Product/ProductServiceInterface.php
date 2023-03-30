<?php
namespace App\Service\Product;

use App\Service\ServiceInterface;

interface ProductServiceInterface extends ServiceInterface
{
    public function getRelatedProduct($product, $limit = 4);
    public function getFeaturedProducts();
    public function getFeaturedProductsSale();
    public function getProductOnIndex($request);
    public function getProByCate($cateName, $request);
    public function getProByBrand($brandName, $request);

}

