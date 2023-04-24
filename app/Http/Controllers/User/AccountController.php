<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Service\Category\CategoryServiceInterface;
use App\Service\Brand\BrandServiceInterface;
use App\Service\User\UserServiceInterface;
use App\Service\Order\OrderServiceInterface;
use App\Service\Product\ProductServiceInterface;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

use App\Utilities\Constant;

class AccountController extends Controller
{
    private $CategoryService;
    private $BrandService;
    private $UserService;
    private $orderService;

    public function __construct(
                                CategoryServiceInterface $CategoryService,
                                BrandServiceInterface $BrandService,
                                UserServiceInterface $UserService,
                                OrderServiceInterface $orderService){
    $this->CategoryService = $CategoryService;
    $this->BrandService = $BrandService;
    $this->UserService = $UserService;
    $this->orderService = $orderService;
    }
    public function login() {
        $brands = $this->BrandService->all();
        $categories = $this->CategoryService->all();
        return view('Frontend.user_Page.Customers.login' , compact('brands', 'categories'));
    }

    public function checkLogin(Request $request) {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        $remember = $request->remember;

        if (Auth::attempt($credentials, $remember)) {
           return redirect()->intended();//Mặc định là:trang chủ
        }
        else {
            return back()->with('notification', 'Error: Email hoặc Password không đúng mời nhập lại');
        }
    }

    public function logout() {
        Auth::logout();
        return back();
    }

    public function register() {
        $brands = $this->BrandService->all();
        $categories = $this->CategoryService->all();
        return view('Frontend.user_Page.Customers.register',  compact('brands', 'categories'));
    }

    public function postRegister(Request $request) {
        if($request->password != $request->password_confirmation) {
            return back()->with('notification', 'Error: Xác nhận mật khẩu không trùng khớp');
        }

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ];

        $this->UserService->create($data);

        return redirect('account/login')->with('notification', 'đăng ký thành công, vui lòng đăng nhập');
    }

    public function myOrder() {
        $brands = $this->BrandService->all();
        $categories = $this->CategoryService->all();
        $orders = $this->orderService->getOrderByUserId(Auth::id());
        return view('Frontend.user_Page.Orders.myOrder',  compact('brands', 'categories', 'orders'));
    }

    public function myOrderShow($id) {
        $brands = $this->BrandService->all();
        $categories = $this->CategoryService->all();
        $order = $this->orderService->find($id);
        return view('Frontend.user_Page.Orders.myOrderDetails', compact('brands', 'categories', 'order'));
    }
}
