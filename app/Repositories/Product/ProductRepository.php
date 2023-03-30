<?php
namespace App\Repositories\Product;

use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;
use Illuminate\Http\Request;
use App\Repositories\BaseRepository;

class ProductRepository extends BaseRepository implements ProductRepositoryInterface
{
    //lấy model tương ứng
    public function getModel()
    {
        return Product::class;
    }


    public function getRelatedProduct($product, $limit = 4)
    {
        return $this->model->where('category_id', $product->category_id)
        ->limit($limit)
        ->where('tag' , $product->tag)
        ->get();
    }

    public function getFeaturedProductsByStatus(int $proStatus){
        return $this->model->where('featured', true)
        ->where('pro_status',$proStatus)
        ->get();
    }

    public function getFeaturedProductsSale(int $viewsCount){
        return $this->model->where('featured', false)
        ->where('views_count', $viewsCount)
        ->get();
    }

    public function getProductOnIndex($request) {

        $search = $request->search ?? '';
        $products = $this->model->where('pro_name', 'like' , '%' . $search . '%');
        $products = $this->filter($products, $request);
        $products = $this->sortAndPaginate($products, $request);

        return $products;

    }

    public function getProByCate($cateName, $request)
    {
        $products = Category::where('cate_name', $cateName)->first()->products->toQuery();
        $products = $this->filter($products, $request);
        $products = $this->sortAndPaginate($products, $request);

        return $products;
    }

    public function getProByBrand($brandName, $request)
    {
        $products = Brand::where('brand_name', $brandName)->first()->products->toQuery();
        $products = $this->sortAndPaginate($products, $request);

        return $products;
    }


    private function sortAndPaginate($products, Request $request)
    {
        $perPage = $request->show ?? 12;
        $sortBy =  $request->sort_by ?? 'latest';

        switch ($sortBy) {
            case 'latest';
                $products = $products->orderBy('id');
                break;
            case 'name-ascending';
                $products = $products->orderBy('pro_name');
                break;
            case 'name-descending';
                $products = $products->orderByDesc('pro_name');
                break;
            case 'price-ascending';
                $products = $products->orderBy('pro_price');
                break;
            case 'price-descending';
                $products = $products->orderByDesc('pro_price');
                break;
            default;
                $products = $products->orderBy('id');
        }
        $products = $products->paginate($perPage);

        $products->appends(['sort_by' => $sortBy, 'show'=> $perPage]);

        return $products;
    }

    private function filter($products, Request $request)
    {
        #brand
        $brands = $request->brand ?? [];
        $brand_ids = array_keys($brands);
        $products = $brand_ids != null ? $products->whereIn('brand_id', $brand_ids) : $products;


        return $products;
    }

}
