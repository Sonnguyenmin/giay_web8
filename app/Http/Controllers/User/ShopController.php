<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Service\Product\ProductServiceInterface;
use App\Service\ProductComment\ProductCommentServiceInterface;
use App\Service\Category\CategoryServiceInterface;
use App\Service\Brand\BrandServiceInterface;
use App\Models\Slide;
use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Menu;
use App\Models\ProImage;
use App\Models\ProAttr;
use App\Models\Attrbute;
use App\Models\ProductComment;


class ShopController extends Controller
{
    private $productService;
    private $ProductCommentService;

    public function __construct(ProductServiceInterface $productService,
                                ProductCommentServiceInterface $ProductCommentService,
                                CategoryServiceInterface $CategoryService,
                                BrandServiceInterface $BrandService)
    {
        $this->productService = $productService;
        $this->ProductCommentService = $ProductCommentService;
        $this->CategoryService = $CategoryService;
        $this->BrandService = $BrandService;
    }

    public function shop(Request $request) {
        $perPage = $request->show ?? 12;
        $sortBy =  $request->sort_by ?? 'latest';
        $search = $request->search ?? '';
        $products = Product::where('pro_name', 'like' , '%' . $search . '%');
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
        $productCount = Product::count();
        return view('Frontend.user_Page.Index.shop', compact('products','productCount'));
    }

    public function show($id, $productId) {
        $brands = $this->BrandService->all();
        $categories = $this->CategoryService->all();
        $products = $this->productService->find($productId);
        $avgRating = 0;
        $sumRating = array_sum(array_column($products->productComments->toArray(), 'rating'));
        $countRating = count($products->productComments);
        if ($countRating != 0)
        {
            $avgRating = $sumRating/$countRating;
        }

        $relatedProducts = $this->productService->getRelatedProduct($products);
        $productCount = Product::count();

        return view('Frontend.user_Page.Index.detailProduct', compact('products', 'relatedProducts','brands', 'categories','productCount', 'avgRating'));
    }

    public function index(Request $request){
        $brands = $this->BrandService->all();
        $categories = $this->CategoryService->all();
        $products = $this->productService->getProductOnIndex($request);
        $productCount = Product::count();
        return view('Frontend.user_Page.Index.shop', compact('products', 'categories','brands','productCount'));
    }

    public function category( $cateName, Request $request)
    {
        $brands = $this->BrandService->all();
        $categories = $this->CategoryService->all();
        $products = $this->productService->getProByCate($cateName, $request);
        $productCount = Product::count();
        return view('Frontend.user_Page.Index.shop', compact('products', 'categories', 'brands','productCount'));
    }

    public function brand( $brandName, Request $request)
    {
        $brands = $this->BrandService->all();
        $categories = $this->CategoryService->all();
        $products = $this->productService->getProByBrand($brandName, $request);
        $productCount = Product::count();
        return view('Frontend.user_Page.Index.shop', compact('products', 'categories', 'brands','productCount'));
    }


    public function postComment(Request $request) {
        $this->ProductCommentService->create($request->all());
        return redirect()->back();
    }
}
