@extends('welcome')
@section('content')
<!-- Breacrumb Section Begin -->
<div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <a href="{{route('home')}}"><i class="fa fa-home"></i> Trang chủ</a>
                    <a href="{{route('shop')}}">shop</a>
                    <span>Chi tiết đơn hàng</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breacrumb Section End -->
<!-- My Order Details Section Begin -->
<section class="checkout-section spad">
    <div class="container">
        <form action="" class="checkout-form">
            <div class="row">
                <div class="col-lg-6">
                    <div class="checkout-content">
                        <a href="" class="content-btn">
                            Mã đơn đặt hàng:
                            <b>#{{$order->id}}</b>
                        </a>
                    </div>
                    <h4>Bling Details</h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <label for="fir">Tên  <span>*</span></label>
                            <input type="text" name="first_name" id="fir" value="{{$order->first_name ?? ''}}">
                        </div>
                        <div class="col-lg-6">
                            <label for="last">Họ <span>*</span></label>
                            <input type="text" name="last_name" id="last" value="{{$order->last_name ?? ''}}">
                        </div>
                        <div class="col-lg-12">
                            <label for="con-name">Tên công ty </label>
                            <input type="text" name="company_name" id="con-name" value="{{$order->company_name ?? ''}}">
                        </div>
                        <div class="col-lg-12">
                            <label for="coun">Quốc gia <span>*</span></label>
                            <input type="text" name="country" id="coun" value="{{$order->country ?? ''}}">
                        </div>
                        <div class="col-lg-12">
                            <label for="street">Tỉnh / Thành phố <span>*</span></label>
                            <input type="text" name="street_address" id="street" class="street-first" value="{{$order->street_address ?? ''}}">

                        </div>
                        <div class="col-lg-12">
                            <label for="zip">Mã bưu điện / ZIP (tùy chọn)</label>
                            <input type="text" id="zip" name="zip" value="{{$order->zip ?? ''}}">
                        </div>
                        <div class="col-lg-12">
                            <label for="town">Địa chỉ cụ thể</label>
                            <input type="text" id="town" name="town" value="{{$order->town ?? ''}}">
                        </div>
                        <div class="col-lg-12">
                            <label for="email">Địa chỉ email <span>*</span></label>
                            <input type="text" id="email" name="email" value="{{$order->email ?? ''}}">
                        </div>
                        <div class="col-lg-12">
                            <label for="phone">Số điện thoại <span>*</span></label>
                            <input type="text" id="phone" name="phone" value="{{$order->phone ?? ''}}">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="checkout-content">
                        <a href="" class="content-btn">
                            Trạng thái:
                            <b>{{\App\Utilities\Constant::$order_status[$order->status]}}</b>
                        </a>
                    </div>
                    <div class="place-order">
                        <h4>Your Order</h4>
                        <div class="order-total">
                            <ul class="order-table">
                                <li>Sản phẩm
                                    <span>Giá</span>
                                </li>

                                @foreach ($order->orderDetails as $orderDetail)
                                    <li class="fw-normal">
                                        {{$orderDetail->product->pro_name}} x {{$orderDetail->qty}} - Size: {{$orderDetail->size}}
                                        <span>
                                            {{number_format($orderDetail->total)}}đ
                                        </span>
                                    </li>
                                @endforeach

                                <li class="total-price">Tổng
                                    <span>
                                        {{number_format(array_sum(array_column($order->orderDetails->toArray(), 'total')))}}đ
                                    </span>
                                </li>
                            </ul>
                            <div class="payment-check">
                                <div class="pc-item">
                                    <label for="pc-check">
                                        Thanh toán tiền mặt
                                        <input type="radio" name="payment_type" value="pay_later" id="pc-check" disabled
                                        {{$order->payment_type == 'pay_later' ? 'checked' : ''}}>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="pc-item">
                                    <label for="pc-paypal">
                                        Thanh toán trực tuyến
                                        <input type="radio" name="payment_type" value="online_payment" id="pc-paypal" disabled
                                        {{$order->payment_type == 'online_payment' ? 'checked' : ''}}>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
<!-- My Order Details Section End -->
@endsection

