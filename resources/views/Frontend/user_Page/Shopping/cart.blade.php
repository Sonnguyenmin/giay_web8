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
            @if(Cart::count() > 0)
                <div class="col-lg-12">
                    <div class="cart-table">
                        <table>
                            <thead>
                                <tr>
                                    <th>Hình ảnh</th>
                                    <th class="p-name">Tên sản phẩm</th>
                                    <th>Giá</th>
                                    <th>Size</th>
                                    <th>Số lượng</th>
                                    <th>Tổng tiền</th>
                                    <th>
                                        <i onclick="confirm('Bạn có muốn xóa toàn bộ sản phẩm không?') === true ? destroyCart(): ''"
                                        style="cursor: pointer"
                                        class="ti-close"></i>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($carts as $cart)
                                    <tr data-rowid = "{{$cart->rowId}}">
                                        <td class="cart-pic first-row">
                                            <img class="cart_img" src="{{config('app.baseUrl') . $cart->options->images}}" alt="">
                                        </td>
                                        <td class="cart-title first-row">
                                            <h5 >{{$cart->name}}</h5>
                                        </td>
                                        <td class="p-price first-row">{{number_format($cart->price)}}đ</td>
                                        <td class="p-price first-row"> {{$cart->options->size}} </td>
                                        <td class="qua-col first-row">
                                            <div class="quantity">
                                                <div class="pro-qty">
                                                    <input type="text" value="{{$cart->qty}}" data-rowid ="{{$cart->rowId}}">
                                                </div>
                                            </div>
                                        </td>
                                        <td class="total-price first-row">{{number_format($cart->price * $cart->qty)}}đ</td>
                                        <td class="close-td first-row">
                                            <i onclick="removeCart('{{$cart->rowId}}')" class="ti-close"></i>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                        </div>
                        <div class="col-lg-4 offset-lg-4">
                            <div class="proceed-checkout">
                                <ul>
                                    <li class="subtotal">Tổng<span>{{$total}}đ</span></li>
                                    <li class="cart-total">Thành tiền <span>{{$subtotal}}đ</span></li>
                                </ul>
                                <a href="./checkout" class="proceed-btn">Tiến hành thanh toán</a>
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
    </div>
</div>
<!-- Shopping Cart Section End -->
@stop

