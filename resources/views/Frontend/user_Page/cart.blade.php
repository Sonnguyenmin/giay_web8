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
                    <span>Giỏ hàng</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breacrumb Section End -->
<!-- Shopping Cart Section Begin -->
<div class="shopping-cart spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="cart-table">

                    <table>
                        <thead>
                            <tr>
                                <th>Hình ảnh</th>
                                <th class="p-name">Tên sản phẩm</th>
                                {{-- <th>Size</th> --}}
                                <th>Giá</th>
                                <th>Số lượng</th>
                                <th>Tổng tiền</th>
                                <th><i class="ti-close"></i></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($carts as $value)
                                <tr>
                                    <td class="cart-pic first-row">
                                        <img class="cart_img"  src="{{config('app.baseUrl') . $value->options->images}}" alt="">
                                    </td>
                                    <td class="cart-title first-row">
                                        <h5>{{$value->name}}</h5>
                                    </td>
                                    {{-- <td>{{$value->options->size}}</td> --}}
                                    <td class="p-price first-row">{{number_format($value->price)}}vnđ</td>
                                    <td class="qua-col first-row">
                                        <div class="quantity">
                                            <div class="pro-qty">
                                                <input type="text" name="quantity" id=""  value="{{$value->qty}}">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="total-price first-row">{{number_format($value->price * $value->qty, 0)}}vnđ</td>
                                    <td class="close-td first-row">
                                        <i class="ti-close"></i>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="cart-buttons">
                            <a href="#" class="primary-btn continue-shop">Continue shipping</a>
                            <a href="" class="primary-btn up-cart">
                                Update cart
                            </a>
                        </div>
                        <div class="discount-coupon">
                            <h6>Discount Codes</h6>
                            <form action="" class="coupon-form">
                                <input type="text" placeholder="Enter your codes">
                                <button type="submit" class="site-btn coupon-btn">Apply</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4 offset-lg-4">
                        <div class="proceed-checkout">
                            <ul>
                                <li class="subtotal">Tổng <span>{{$total}}vnđ</span></li>
                                <li class="subtotal"> Thuế <span>{{Cart::tax()}}vnđ</span></li>
                                <li class="subtotal">Phí vận chuyển<span>Free</span></li>
                                <li class="cart-total">Thành tiền <span>{{$subtotal}}vnđ</span></li>
                            </ul>
                            <a href="check-out.html" class="proceed-btn">Tiến hành thanh toán</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Shopping Cart Section End -->
@stop

