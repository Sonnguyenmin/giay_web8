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
                    <span>Đơn hàng của tôi</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breacrumb Section End -->
<!-- Shopping Cart Section Begin -->
<section class="shopping-cart spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="cart-table">
                    <table>
                        <thead>
                            <tr>
                                <th>Hình ảnh</th>
                                <th class="p-name">ID</th>
                                <th>Sản Phẩm</th>
                                <th>Kích thước</th>
                                <th>Giá tiền</th>
                                <th>Chi tiết</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $order)
                                <tr>
                                    <td class="cart-pic first-row">
                                        <img class="cart_img" src="{{$order->orderDetails[0]->product->feature_image}}" alt="">
                                    </td>
                                    <td class="first-row">#{{$order->id}}</td>
                                    <td class="cart-title first-row" style="text-align: center">
                                        <h5>
                                            {{$order->orderDetails[0]->product->pro_name}}
                                            @if(count($order->orderDetails) > 1)
                                                (và {{count($order->orderDetails)}} sản phẩm khác)
                                            @endif
                                        </h5>
                                    </td>
                                    <td class="total-price first-row">
                                        {{$order->orderDetails->size}}
                                    </td>
                                    <td class="total-price first-row">
                                        {{number_format(array_sum(array_column($order->orderDetails->toArray(), 'total')))}}đ
                                    </td>
                                    <td class="first-row">
                                        <a href="./myOrder/{{$order->id}}" class="btn">Chi tiết</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Shopping Cart Section End -->
@stop


