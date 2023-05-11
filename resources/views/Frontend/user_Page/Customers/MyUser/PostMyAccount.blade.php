@extends('welcome')
@section('content')
<!-- Breacrumb Section Begin -->
<div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <a href="{{route('home')}}"><i class="fa fa-home"></i> Trang chủ</a>
                    <span>Thông tin tài khoản của tôi</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breacrumb Section End -->
<!-- My Order Details Section Begin -->
<section class="checkout-section spad">
    <div class="container">
        <form class="checkout-form" action="{{route('MyAccount.update',$user->id)}}"  method="Post" enctype="multipart/form-data" >
            @method('PUT')
            @csrf
            <div class="row">
                <div class="col-lg-12">
                    <div >
                        <h4>Thông tin khách hàng</h4>
                        <div style="display: flex; align-items: center; position: relative;">
                            <input style="height: 20px; width: 20px; background-color: transparent; position: absolute; top: -8px" type="file" name="avatar_path">
                            <img src="{{config('app.baseUrl'). $user->avatar_path}}" style="height: 60px; width: 60px; border-radius: 50% ;" alt="">
                            <h5 style="margin-left: 10px">{{Auth::user()->name ?? ''}}</h5>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <label for="fir">Họ Và Tên<span>*</span></label>
                            <input type="text" name="name" id="fir" value="{{Auth::user()->name ?? ''}}">
                        </div>
                        <div class="col-lg-6">
                            <label for="fir">Tên <span>*</span></label>
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
                            <label for="street">Tỉnh / Thành phố <span>*</span></label>
                            <input type="text" name="street_address" id="street" class="street-first" value="{{Auth::user()->street_address ?? ''}}">

                        </div>
                        <div class="col-lg-12">
                            <label for="zip">Mã bưu điện / ZIP (tùy chọn)</label>
                            <input type="text" id="zip" name="zip" value="{{Auth::user()->zip ?? ''}}">
                        </div>
                        <div class="col-lg-12">
                            <label for="town">Địa chỉ cụ thể</label>
                            <input type="text" id="town" name="town" value="{{Auth::user()->town ?? ''}}">
                        </div>
                        <div class="col-lg-12">
                            <label for="email">Địa chỉ email <span>*</span></label>
                            <input type="text" id="email" name="email" value="{{Auth::user()->email ?? ''}}">
                        </div>
                        <div class="col-lg-12">
                            <label for="phone">Số điện thoại <span>*</span></label>
                            <input type="text" id="phone" name="phone" value="{{Auth::user()->phone ?? ''}}">
                        </div>
                    </div>
                    <button type="submit" class="site-btn login-btn">Lưu</button>
                    <a href="{{route('MyAccount.index')}}">
                        <button type="button" class="site login-btn">Tài khoản của tôi</button>
                    </a>
                </div>
            </div>
        </form>
    </div>
</section>
<!-- My Order Details Section End -->
@stop
