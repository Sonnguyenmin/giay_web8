<?php
namespace App\Repositories\Product;


use App\Repositories\RepositoryInterface;

interface ProductRepositoryInterface extends RepositoryInterface
{
    public function getRelatedProduct($product, $limit = 4);
    public function getFeaturedProductsByStatus(int $proGender);
    public function getFeaturedProductsSale(int $viewsCount);
    public function getProductOnIndex($request);
    public function getProByCate($cateName, $request);
    public function getProByBrand($brandName, $request);
}
