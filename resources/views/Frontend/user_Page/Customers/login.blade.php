@extends('welcome')
@section('content')
  <!-- Breacrumb Section Begin -->
  <div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <a href="{{route('home')}}"><i class="fa fa-home"></i> Trang chủ</a>
                    <span>Đăng nhập</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breacrumb Section End -->

<!-- Register Section Begin -->
<div class="register-login-section spad">
   <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="login-form">
                    <h2>Đăng nhập</h2>

                    @if (session('notification'))
                        <div class="alert alert-warning" role="alert">
                            {{session('notification')}}
                        </div>
                    @endif
                    <form action="" method="post">
                        @csrf
                        <div class="group-input">
                            <label for="email">Địa chỉ email</label>
                            <input type="text" id="email" name="email" placeholder="Nhập địa chị email">
                        </div>
                        <div class="group-input">
                            <label for="password">Mật khẩu *</label>
                            <input type="password" id="password" name="password" placeholder="Nhập mật khẩu">
                        </div>
                        <div class="group-input gi-check">
                            <div class="gi-more">
                                <label for="save-pass">
                                    Lưu mật khẩu
                                    <input type="checkbox" id="save-pass" name="remember">
                                    <span class="checkmark"></span>
                                </label>
                                <a href="" class="forget-pass">Quên mật khẩu của bạn</a>
                            </div>
                        </div>
                        <button type="submit" class="site-btn login-btn">Đăng nhập</button>
                    </form>
                    <div class="switch-login">
                        <a href="./account/register" class="or-login">Hoặc tạo một tài khoản</a>
                    </div>
                </div>
            </div>
        </div>
   </div>
</div>
<!-- Register Section End -->
@endsection
