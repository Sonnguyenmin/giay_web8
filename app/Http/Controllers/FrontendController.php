<?php

namespace App\Http\Controllers;
use App\Models\Slide;
use App\Service\Product\ProductServiceInterface;
use App\Service\Category\CategoryServiceInterface;
use App\Service\Brand\BrandServiceInterface;
use App\Service\Blog\BlogServiceInterface;

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
                                BrandServiceInterface $BrandService,
                                BlogServiceInterface $BlogService)
    {
        $this->productService = $productService;
        $this->CategoryService = $CategoryService;
        $this->BrandService = $BrandService;
        $this->BlogService = $BlogService;
    }

    public function index() {

        $featuredProducts = $this->productService->getFeaturedProducts();
        $featuredSale = $this->productService->getFeaturedProductsSale();
        $slide = Slide::orderBy('id','DESC')->get();
        $blogs = $this->BlogService->getLatestBlog()->take(3);
        $brands = $this->BrandService->all();
        $categories = $this->CategoryService->all();

        return view('Frontend.User_Layout',compact('slide', 'featuredProducts', 'featuredSale','categories', 'brands', 'blogs'));
    }

    public function blog() {
        $brands = $this->BrandService->all();
        $categories = $this->CategoryService->all();
        $blogs = $this->BlogService->getLatestBlog();

        return view('Frontend.user_Page.Index.blog',compact('categories', 'brands','blogs'));
    }

    public function contact() {
        $brands = $this->BrandService->all();
        $categories = $this->CategoryService->all();
        return view('Frontend.user_Page.Index.Contact',compact('categories', 'brands'));
    }

    public function postContact(Request $request) {
        Mail::send('Frontend.user_Page.Index.mailContact',[
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'content' => $request->content
        ],function($message) use ($request) {
            $message->to('nguyentruongson1842001@gmail.com','norda_sneaker');
            $message->from($request->email);
            $message->subject('Thông báo email bình luận thông báo từ khách hàng');
        });

        return redirect()->back()->with('success','Bạn đã gửi tin nhắn thành công');
    }

}
