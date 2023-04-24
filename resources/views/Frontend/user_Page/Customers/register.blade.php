@extends('welcome')
@section('content')
  <!-- Breacrumb Section Begin -->
  <div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <a href="{{route('home')}}"><i class="fa fa-home"></i> Trang chủ</a>
                    <span>Đăng Ký</span>
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
                 <div class="register-form">
                     <h2>Đăng ký</h2>
                     @if (session('notification'))
                        <div class="alert alert-success" role="alert">
                            {{session('notification')}}
                        </div>
                    @endif
                    <form action="" method="post">
                        @csrf
                        <div class="group-input">
                            <label for="name">Họ và Tên *</label>
                            <input type="text" id="name" name="name">
                        </div>
                        <div class="group-input">
                            <label for="email">Địa chỉ email</label>
                            <input type="text" id="email" name="email">
                        </div>
                        <div class="group-input">
                            <label for="pass">Mật khẩu *</label>
                            <input type="password" id="pass" name="password">
                        </div>
                        <div class="group-input">
                            <label for="con-pass">Nhập lại mật khẩu *</label>
                            <input type="password" id="con-pass" name="password_confirmation">
                        </div>
                        <button type="submit" class="site-btn register-btn">Đăng ký</button>
                    </form>
                     <div class="switch-login">
                         <a href="./account/login" class="or-login">Hoặc Đăng nhập</a>
                     </div>
                 </div>
             </div>
         </div>
    </div>
 </div>
 <!-- Register Section End -->
@endsection
