<?php

namespace App\Http\Controllers;
use App\Models\Slide;
use App\Service\Product\ProductServiceInterface;
use App\Service\Category\CategoryServiceInterface;
use App\Service\Brand\BrandServiceInterface;
use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Menu;
use App\Models\ProImage;
use App\Models\ProAttr;
use App\Models\Attrbute;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    private $productService;

    public function __construct(ProductServiceInterface $productService,
                                CategoryServiceInterface $CategoryService,
                                BrandServiceInterface $BrandService)
    {
        $this->productService = $productService;
        $this->CategoryService = $CategoryService;
        $this->BrandService = $BrandService;
    }

    public function index() {

        $featuredProducts = $this->productService->getFeaturedProducts();
        $featuredSale = $this->productService->getFeaturedProductsSale();
        $slide = Slide::orderBy('id','DESC')->get();
        $brands = $this->BrandService->all();
        $categories = $this->CategoryService->all();

        return view('Frontend.User_Layout',compact('slide', 'featuredProducts', 'featuredSale','categories', 'brands'));
    }

}
