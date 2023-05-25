<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Service\Product\ProductServiceInterface;
use App\Service\Category\CategoryServiceInterface;
use App\Service\Brand\BrandServiceInterface;
use App\Service\Order\OrderServiceInterface;
use App\Service\OrderDetail\OrderDetailServiceInterface;
use App\Utilities\VNpay;
use App\Utilities\Constant;
use Cart;
session_start();

class CheckoutController extends Controller
{
    private $productService;

    public function __construct(ProductServiceInterface $productService,
                                CategoryServiceInterface $CategoryService,
                                BrandServiceInterface $BrandService,
                                OrderServiceInterface $orderService,
                                OrderDetailServiceInterface $orderDetailService)
    {
        $this->productService = $productService;
        $this->CategoryService = $CategoryService;
        $this->BrandService = $BrandService;
        $this->orderService = $orderService;
        $this->orderDetailService = $orderDetailService;
    }


    public function index() {
        $carts = Cart::content();
        $total = Cart::total();
        $subtotal = Cart::subtotal();
        $brands = $this->BrandService->all();
        $categories = $this->CategoryService->all();
        return view('Frontend.user_Page.Orders.checkout', compact('brands', 'categories','carts', 'total', 'subtotal'));
    }

    public function addOrder(Request $request) {
        //01: Thêm đơn hàng
        $data = $request->all();
        $data['status'] = Constant::order_status_ReceiveOrders;
        $order = $this->orderService->create($data);

        //02. Thêm chi tiết đơn hàng

        $carts = Cart::content();

        foreach($carts as $cart) {
            $data = [
                'order_id' => $order->id,
                'product_id' => $cart->id,
                'qty' => $cart->qty,
                'size' => $cart->options->size,
                'amount' => $cart->price,
                'total' => $cart->price * $cart->qty,
            ];

            $this->orderDetailService->create($data);
        }

        if ($request->payment_type == 'pay_later') {
            //Gửi email
            $total = Cart::total();
            $subtotal = Cart::subtotal();
            $this->sendEmail($order, $total, $subtotal);
            //03. Xóa giỏ hàng
            Cart::destroy();
            //04.Trả về kết quả thông báo
            return redirect('checkout/result')->with('notification', 'THÀNH CÔNG ! Bạn sẽ trả tiền khi nhận được hàng. Vui lòng kiểm tra email của bạn');
        }

        if ($request->payment_type == 'online_payment') {
            //01. lấy Url thanh toán VNPay
            $data_url = VNPay::vnpay_create_payment([
                'vnp_TxnRef' => $order->id, //Id của đơn hàng
                'vnp_OrderInfo' => 'Sản phẩm lỗi hay không đúng có thể dổi trả không quá 3 ngày',       // Sản phẩm lỗi hay không đúng có thể dổi trả không quá 3 ngày //Mô tả đơn hàng
                'vnp_Amount' => Cart::total(0,'',''), //Tổng giá của đơn hàng
            ]);
            //02. Chuyển hướng tới URL lấy được
            return redirect()->to($data_url);
        }
    }

    public function vnPayCheck(Request $request) {
        //01. Lấy data từ URl (do VNPay gửi về qua $vnp_Returnurl)
        $vnp_ResponseCode = $request->get('vnp_ResponseCode'); // Mã phản hồi kết qua thanh toán = Thành công
        $vnp_TxnRef = $request->get('vnp_TxnRef'); //order_id
        $vnp_Amount = $request->get('vnp_Amount'); //Số tiền thanh toán

        //02. Kiểm tra data, xem kết quả giao dịch trả về từ VnPay hợp lệ không
        if($vnp_ResponseCode != null) {
            //Nếu thành công
            if($vnp_ResponseCode == 00) {
                $this->orderService->update([
                    'status' =>  Constant::order_status_Paid,
                ], $vnp_TxnRef);
                //Gửi email
                $order = $this->orderService->find($vnp_TxnRef);
                $total = Cart::total();
                $subtotal = Cart::subtotal();
                $this->sendEmail($order, $total, $subtotal);
                //Xóa giỏ hàng
                Cart::destroy();
                //Thông báo kết quả
                return redirect('checkout/result')->with('notification', 'THÀNH CÔNG ! Bạn đã thanh toán trực tuyến. Vui lòng kiểm tra email của bạn');
            } else { //Nếu không thành công
                //Xóa đơn hàng đã thêm vào
                $this->orderService->delete($vnp_TxnRef);
                $this->orderDetailService->delete($vnp_TxnRef);
                //03. Xóa giỏ hàng
                Cart::destroy();
                //Thông báo lỗi
                return redirect('checkout/result')->with('notification', 'Thất bại!: Thanh toán không thành công hoặc bị hủy ');
            }

        }
    }

    public function result() {
        $brands = $this->BrandService->all();
        $categories = $this->CategoryService->all();
        $notification = session('notification');
        return view('Frontend.user_Page.Index.result', compact('notification','brands', 'categories'));
    }

    private function sendEmail($order, $total, $subtotal)
    {
        $email_to = $order->email;
        Mail::send('Frontend.user_Page.Customers.mail',
        compact('order','total', 'subtotal'),
        function($message) use ($email_to) {
            $message->to('nguyentruongson1842001@gmail.com','norda_sneaker');
            $message->from($email_to, $email_to);
            $message->subject('Thông báo đặt hàng');
        });
    }
}
