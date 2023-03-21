<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from admin.pixelstrap.com/koho/template/sign-up-one.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 Jan 2023 13:49:14 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Koho admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Koho admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{asset('Backend/assets/images/admin.png')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('Backend/assets/images/admin.png')}}" type="image/x-icon">
    <title>Trang Đăng ký Quản trị Norda</title>
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('Backend/assets/css/vendors/font-awesome.css')}}">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{asset('Backend/assets/css/vendors/icofont.css')}}">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('Backend/assets/css/vendors/themify.css')}}">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('Backend/assets/css/vendors/flag-icon.css')}}">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('Backend/assets/css/vendors/feather-icon.css')}}">
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{asset('Backend/assets/css/vendors/bootstrap.css')}}">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{asset('Backend/assets/css/style.css')}}">

    <link id="color" rel="stylesheet" href="{{asset('Backend/assets/css/color-1.css')}}" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{asset('Backend/assets/css/responsive.css')}}">
  </head>
  <body>
    <!-- Loader starts-->
    <div class="loader-wrapper">
      <div class="loader"></div>
    </div>
    <!-- Loader ends-->
    <!-- login page start-->
    <div class="container-fluid p-0">
      <div class="row m-0">
        <div class="col-xl-5"><img class="bg-img-cover bg-center" src="{{asset('Backend/assets/images/login/3.jpg')}}" alt="bg3"></div>
        <div class="col-xl-7 p-0">
          <div class="login-card">
            <div>
              <div><a class="logo text-center" href="index-2.html"><img class="img-fluid for-light" src="{{asset('Backend/assets/images/logo/logo.png')}}" alt="logo image"></a></div>
              <div class="login-main">
                <form class="theme-form" action="{{route('register')}}" method="post">
                    @csrf
                    <h2 style="text-align: center;">Tạo tài khoản admin của bạn</h2>
                    <p>Nhập thông tin cá nhân của bạn để tạo tài khoản</p>
                    @include('Backend.admin.alert')
                    <div class="form-group">
                        <label class="col-form-label pt-0">Họ và tên: </label>
                        <input class="form-control" type="text" name="name" placeholder="Họ và tên" value="{{ old('name') }}">
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Địa chỉ Email: </label>
                        <input class="form-control" type="email" name="email"  placeholder="Tạo email" value="{{ old('email') }}">
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Mật khẩu: </label>
                        <div class="form-input position-relative">
                        <input class="form-control" type="password" name="password" placeholder="Tạo mật khẩu" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Xác nhận mật khẩu: </label>
                        <div class="form-input position-relative">
                            <input class="form-control" type="password" name="password_confirmation" placeholder="Xác nhận mật khẩu" >
                        </div>
                    </div>
                    <div class="form-group mb-0">
                        <button class="btn btn-primary btn-block w-100 mt-3" type="submit">Tạo tài khoản</button>
                    </div>

                    <p class="mt-4 mb-0 text-center">Nếu bạn có tài khoản?<a class="ms-2" href="{{route('login')}}">Đăng nhập</a></p>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
       <!-- latest jquery-->
       <script src="{{asset('Backend/assets/js/jquery-3.6.0.min.js')}}"></script>
       <script src="{{asset('Backend/assets/js/bootstrap/popper.min.js')}}"></script>
       <script src="{{asset('Backend/assets/js/bootstrap/bootstrap.bundle.min.js')}}"></script>
       <!-- feather icon js-->
       <script src="{{asset('Backend/assets/js/icons/feather-icon/feather.min.js')}}"></script>
       <script src="{{asset('Backend/assets/js/icons/feather-icon/feather-icon.js')}}"></script>
       <!-- Sidebar jquery-->
       <script src="{{asset('Backend/assets/js/config.js')}}"></script>
       <!-- Theme js-->
       <script src="{{asset('Backend/assets/js/script.js')}}"></script>
    </div>
  </body>

<!-- Mirrored from adm
