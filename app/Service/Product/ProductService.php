<?php

namespace App\Service\Product;

use App\Repositories\Product\ProductRepositoryInterface;

use App\Service\BaseService;


class ProductService extends BaseService implements ProductServiceInterface
{
    public $repository;

    public function __construct(ProductRepositoryInterface $productRepository)
    {
        $this->repository = $productRepository;
    }

    public function find($id)
    {
        $products =  $this->repository->find($id);

        $avgRating = 0;
        $sumRating = array_sum(array_column($products->productComments->toArray(), 'rating'));
        $countRating = count($products->productComments);
        if ($countRating != 0)
        {
            $avgRating = $sumRating/$countRating;
        }

        $products->avgRating = $avgRating;

        return $products;
    }

    public function getRelatedProduct($product, $limit = 4)
    {
        return $this->repository->getRelatedProduct($product, $limit);
    }

    public function getFeaturedProducts(){
        return [
            "men" => $this->repository->getFeaturedProductsByStatus(0),
            'women' => $this->repository->getFeaturedProductsByStatus(1),
        ];
    }
    public function getFeaturedProductsSale(){
        return [
            'sale' => $this->repository->getFeaturedProductsSale(0),
        ];
    }

    public function getProductOnIndex($request){
       return $this->repository->getProductOnIndex($request);
    }

    public function getProByCate($cateName, $request)
    {
        return $this->repository->getProByCate($cateName, $request);
    }

    public function getProByBrand($brandName, $request) {
        return $this->repository->getProByBrand($brandName, $request);
    }

}
?>
