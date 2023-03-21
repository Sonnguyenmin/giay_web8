<?php
use App\Http\Controllers\Controller;
namespace App\Http\Controllers;
use App\Models\Slide;
use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Menu;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        $slide = Slide::latest()->get();
        $brand = Brand::orderBy('id','DESC')->get();
        $category = Category::where('parent_id', 0)->get();
        $menuLimit = Menu::where('parent_id', 0)->take(12)->get();
        $product = Product::latest()->take(8)->get();
        $pro_view = Product::latest('views_count', 'DESC')->take(12)->get();
        return view('Frontend.group_layout.layout',compact('slide', 'product', 'pro_view','category','menuLimit'));
    }
    public function contact(){
        $menuLimit = Menu::where('parent_id', 0)->take(12)->get();
        return view('Frontend.contact',compact('menuLimit'));
    }
    public function cart(){
        $menuLimit = Menu::where('parent_id', 0)->take(12)->get();
        return view('Frontend.cart',compact('menuLimit'));
    }

    public function shop(){
        $menuLimit = Menu::where('parent_id', 0)->take(12)->get();
        return view('Frontend.shop',compact('menuLimit'));
    }
}
