<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Service\Product\ProductServiceInterface;
use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;
use Cart;
session_start();

class CartController extends Controller
{
    private $productService;

    public function __construct(ProductServiceInterface $productService)
    {
        $this->productService = $productService;
    }

    public function index(){
        $carts = Cart::content();
        $total = Cart::total();
        $subtotal = Cart::total();

        return view('Frontend.user_Page.cart' , compact('carts','total','subtotal'));
    }

    public function add($id){

        $products = $this->productService->find($id);


        Cart::add([
            'id' => $products->id,
            'name'=> $products->pro_name,
            'qty' => 1 ,
            'price'=> $products->discount ?? $products->pro_price,
            'weight'=> $products->weight ?? 0,
            'options'=> [
                'images'=>$products->feature_image,
            ],
        ]);

        return back();
    }

}
