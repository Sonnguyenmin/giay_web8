<?php
use App\Http\Controllers\Controller;
namespace App\Http\Controllers;
use App\Models\Slide;
use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;


use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        $slide = Slide::latest()->get();
        $brand = Brand::orderBy('id','DESC')->get();
        $category = Category::where('parent_id', 0)->get();
        $cateLimit =  Category::where('parent_id', 0)->take(10)->get();
        $product = Product::latest()->take(8)->get();
        $pro_view = Product::latest('views_count', 'DESC')->take(12)->get();
        return view('Frontend.layout',compact('slide', 'product', 'pro_view','category', 'cateLimit'));
    }
    public function contact(){
        return view('Frontend.contact');
    }
    public function cart(){
        return view('Frontend.cart');
    }
}
