<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;
use App\Models\User;
use App\Models\Setting;
use App\Models\Slide;
use App\Models\Menu;
use App\Models\Order;
use App\Models\OrderDetails;
use Cart;
session_start();

class StatisticalController extends Controller
{

    protected $category;
    protected $brand;
    protected $product;
    protected $user;
    protected $setting;
    protected $slide;
    protected $menu;
    protected $order;
    protected $orderDetails;

    public function __construct(Category $category,
                                Brand $brand,
                                Product $product,
                                User $user,
                                Setting $setting,
                                Menu $menu,
                                Slide $slide,
                                Order $order,
                                OrderDetails $orderDetails)
    {
        $this->user = $user;
        $this->category = $category;
        $this->brand = $brand;
        $this->product = $product;
        $this->setting = $setting;
        $this->menu = $menu;
        $this->slide = $slide;
        $this->order = $order;
        $this->orderDetails = $orderDetails;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userCount = $this->user->count();
        $categoryCount  = $this->category->count();
        $brandCount = $this->brand->count();
        $productCount = $this->product->count();
        $settingCount = $this->setting->count();
        $menuCount = $this->menu->count();
        $slideCount = $this->slide->count();
        $orderCount = $this->order->count();
        $profit = $this->orderDetails->sum('total');
        $orderDetailsCount = $this->orderDetails->count();

        $orders = Order::where('status', 1)->get();

        $subTotal = OrderDetails::join('tbl_order', 'tbl_order.id', '=', 'tbl_orderdetails.order_id')->where('tbl_order.status', 1)->sum('total');

        if(request()->date_from && request()->date_to){
            $orders = Order::where('status', 1)->whereBetween('created_at',[request()->date_from, request()->date_to])->get();
        };

        $orderPayment = Order::where('status', 4)->get();

        $totalPayment = OrderDetails::join('tbl_order', 'tbl_order.id', '=', 'tbl_orderdetails.order_id')->where('tbl_order.status', 4)->sum('total');

        return view('Backend.pages.Statistical.index_Statistical',
        compact('userCount','categoryCount','brandCount','productCount', 'settingCount', 'menuCount', 'slideCount', 'orderCount', 'orderDetailsCount', 'orders', 'subTotal', 'orderPayment','totalPayment','profit'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
