<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Service\Product\ProductServiceInterface;
use App\Service\Category\CategoryServiceInterface;
use App\Service\Brand\BrandServiceInterface;
use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;
use Cart;
session_start();

class CartController extends Controller
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

    public function index(){
        $carts = Cart::content();
        $total = Cart::total();
        $subtotal = Cart::subtotal();
        $brands = $this->BrandService->all();
        $categories = $this->CategoryService->all();
        return view('Frontend.user_Page.Shopping.cart' , compact('carts','total','subtotal','brands','categories'));
    }

    public function add(Request $request){

        if($request->ajax()) {
            $products = $this->productService->find($request->productId);

            $response['cart'] = Cart::add([
                'id' => $products->id,
                'name'=> $products->pro_name,
                'qty' => 1 ,
                'price'=> $products->discount ?? $products->pro_price,
                'weight'=> $products->weight ?? 0,
                'options'=> [
                    'images'=>$products->feature_image,
                ],
            ]);
            $response['count']= Cart::count();
            $response['total']= Cart::total();

            return $response;

        }
        return back();
    }

    public function delete(Request $request) {
        if($request->ajax()){
            $response['cart'] = Cart::remove($request->rowId);

            $response['count'] = Cart::count();
            $response['total'] = Cart::total();
            $response['subtotal'] = Cart::subtotal();
            return $response;
        }
        return back();
    }
    public function destroy() {
        Cart::destroy();

    }

    public function update(Request $request) {
        if($request->ajax()) {
            $response['cart'] = Cart::update($request->rowId, $request->qty);
            $response['count'] = Cart::count();
            $response['total'] = Cart::total();
            $response['subtotal'] = Cart::subtotal();
            return $response;
        }
    }

}
