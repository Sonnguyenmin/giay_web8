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
                    <span>Thanh toán</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breacrumb Section End -->

<!-- Shopping Cart Section Begin -->
<div class="checkout-section spad">
    <div class="container">
        <form action="" method="post" class="checkout-form">
            @csrf
            <div class="row">
                @if (Cart::count() > 0)
                    <div class="col-lg-6">
                        {{-- <div class="checkout-content">
                            <a href="/account/login" class="content-btn">Nhấn vào đây để đăng nhập</a>
                        </div> --}}
                        <h4>Chi tiết thanh toán</h4>
                        <div class="row">
                            <input type="hidden" id="user_id" name="user_id" value="{{Auth::user()->id ?? ''}}">
                            <div class="col-lg-12">
                                <label for="full name">Họ và Tên<span>*</span></label>
                                <input type="text" name="order_name" id="full name" value="{{Auth::user()->name ?? ''}}">
                            </div>
                            <div class="col-lg-6">
                                <label for="fir">Tên  <span>*</span></label>
                                <input type="text" name="first_name" id="fir" value="{{Auth::user()->first_name ?? ''}}">
                            </div>
                            <div class="col-lg-6">
                                <label for="last">Họ <span>*</span></label>
                                <input type="text" name="last_name" id="last" value="{{Auth::user()->last_name ?? ''}}">
                            </div>
                            <div class="col-lg-12">
                                <label for="con-name">Tên công ty </label>
                                <input type="text" name="company_name" id="con-name" value="{{Auth::user()->company_name ?? ''}}">
                            </div>
                            <div class="col-lg-12">
                                <label for="coun">Quốc gia <span>*</span></label>
                                <input type="text" name="country" id="coun" value="{{Auth::user()->country ?? ''}}">
                            </div>
                            <div class="col-lg-12">
                                <label for="street">Tỉnh / thành phố <span>*</span></label>
                                <input type="text" name="street_address" id="street" class="street-first" value="{{Auth::user()->street_address ?? ''}}">

                            </div>
                            <div class="col-lg-6">
                                <label for="zip">Mã bưu điện / ZIP (tùy chọn)</label>
                                <input type="text" id="zip" name="zip" value="{{Auth::user()->zip ?? ''}}">
                            </div>
                            <div class="col-lg-6">
                                <label for="phone">Số điện thoại <span>*</span></label>
                                <input type="text" id="phone" name="phone" value="{{Auth::user()->phone ?? ''}}">
                            </div>
                            <div class="col-lg-12">
                                <label for="town">Địa chỉ cụ thể</label>
                                <input type="text" id="town" name="town" value="{{Auth::user()->town ?? ''}}">
                            </div>
                            <div class="col-lg-12">
                                <label for="email">Địa chỉ email <span>*</span></label>
                                <input type="text" id="email" name="email" value="{{Auth::user()->email ?? ''}}">
                            </div>

                            {{-- <div class="col-lg-12">
                                <div class="create-item">
                                    <label for="acc-create">
                                        Tạo một tài khoản ?
                                        <input type="checkbox" name="" id="acc-create">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                    <div class="col-lg-6">
                        {{-- <div class="checkout-content">
                            <input type="text" placeholder="Nhập mã phiếu giảm giá của bạn">
                        </div> --}}
                        <div class="place-order">
                            <h4>Đơn đặt hàng của bạn</h4>
                            <div class="order-total">
                                <ul class="order-table">
                                    <li>Sản phẩm <span>Giá tiền</span> </li>

                                    @foreach ($carts as $cart)
                                        <li class="fw-normal">
                                            {{$cart->name}} x {{$cart->qty}} - Size: {{$cart->options->size}}
                                            <span>{{number_format($cart->price * $cart->qty) }}đ</span>
                                        </li>
                                    @endforeach


                                    <li class="fw-normal">Tổng <span>{{$subtotal}}đ</span></li>
                                    <li class="fw-normal">Thành tiền <span>{{$total}}đ</span></li>
                                </ul>
                                <div class="payment-check">
                                    <div class="pc-item">
                                        <label for="pc-check">
                                            Thanh toán tiền mặt
                                            <input type="radio" name="payment_type" value="pay_later" id="pc-check" checked>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="pc-item">
                                        <label for="pc-paypal">
                                            Thanh toán trực tuyến
                                            <input type="radio" name="payment_type" value="online_payment" id="pc-paypal">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="order-btn">
                                    <button type="submit" class="site-btn place-btn">Đặt hàng</button>
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="col-lg-12">
                        <h4>Không có sản phẩm trong giỏ hàng của bạn!</h4>
                    </div>
                @endif

            </div>
        </form>
    </div>
</div>
<!-- Shopping Cart Section End -->
@endsection
