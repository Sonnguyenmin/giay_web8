<!DOCTYPE html>
<html lang="zxx">

<head>
    <base href="{{asset('/')}}">
    <meta charset="UTF-8">
    <meta name="description" content="codelean Template">
    <meta name="keywords" content="codelean, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Norda - Của hàng bán giày sneaker Norda</title>

    <link rel="icon" href="{{asset('Backend/assets/admin.png')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('Backend/assets/admin.png')}}" type="image/x-icon">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('Frontend/assets/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('Frontend/assets/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('Frontend/assets/css/themify-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('Frontend/assets/css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('Frontend/assets/css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('Frontend/assets/css/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('Frontend/assets/css/jquery-ui.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('Frontend/assets/css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('Frontend/assets/css/style.css')}}" type="text/css">
    @yield('css')
</head>

<body>
    <!-- Start coding here -->

    <!-- Page Preloder -->
    <div id ="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header-section"  >
        <div class="header-top">
           <div class="container">
                <div class="ht-left">
                    <div class="mail-service">
                        <i class="fa fa-envelope">
                            {{getConfigValue('mail_contact')}}
                        </i>
                    </div>
                    <div class="phone-service">
                        <i class="fa fa-phone">
                            {{getConfigValue('phone_contact')}}
                        </i>
                    </div>
                </div>
                <div class="ht-right">
                    @if (Auth::check())
                        <a href="./account/logout" class="login-panel">
                            <i class="fa fa-user"></i>
                            {{Auth::user()->name}} - Đăng xuất
                        </a>
                    @else
                        <a href="./account/login" class="login-panel">
                            <i class="fa fa-user"></i>
                            Đăng nhập
                        </a>
                    @endif

                    <div class="top-social">
                        <a href="{{getConfigValue('Facebook_link')}}"><i class="ti-facebook"></i></a>
                        <a href="{{getConfigValue('youtube_link')}}"><i class="ti-youtube"></i></a>
                        <a href="{{getConfigValue('pinterest_link')}}"><i class="ti-pinterest"></i></a>
                        <a href="{{getConfigValue('instagram_link')}}"><i class="ti-instagram"></i></a>
                    </div>
                </div>
           </div>
        </div>
        <div class="container">
            <div class="inner-header">
                <div class="row">
                    <div class="col-lg-2 col-md-2">
                        <div class="logo">
                            <a href="{{route('home')}}" class="">
                                <img src="{{asset('Frontend/assets/logo.png')}}" height="25" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7">
                        <div class="advanced-search">
                            <button type="button" class="category-btn">All Danh mục</button>
                            <div class="input-group">
                                <form action="shop" style="width: 90%">
                                    <input name="search" value="{{request('search')}}" type="text" placeholder="Tìm kiếm sản phẩm ">
                                    <button type="submit"> <i class="ti-search"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 text-right">
                        <ul class="nav-right">
                            <li class="heart-icon">
                                <a href="#">
                                    <i class="icon_heart_alt">
                                    </i>
                                    <span>1</span>
                                </a>
                            </li>
                            <li class="cart-icon">
                                <a href="./cart">
                                    <i class="icon_bag_alt">
                                    </i>
                                    <span class="cart-count">{{Cart::count()}}</span>
                                </a>
                                <div class="cart-hover">
                                    <div class="select-items">
                                        <table>
                                            <tbody>
                                                @foreach (Cart::content() as $cart)
                                                <tr data-rowId = "{{$cart->rowId}}">
                                                    <td class="si-pic">
                                                        <img class="img_detail" src="{{$cart->options->images}}" alt="">
                                                    </td>
                                                    <td class="si-text">
                                                        <div class="product-selected">
                                                            <p>{{number_format($cart->price)}}đ x {{$cart->qty}} - <span>size: {{$cart->options->size}}</span></p>

                                                            <h6 style="font-size: 12px ">{{$cart->name}}</h6>
                                                        </div>
                                                    </td>
                                                    <td class="si-close">
                                                        <i class="ti-close"></i>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="select-total">
                                        <span>Tổng:</span>
                                        <h5 >{{Cart::total()}}đ</h5>
                                    </div>
                                    <div class="select-button">
                                        <a href="./cart" class="primary-btn view-card">Xem giỏ hàng</a>
                                        <a href="./checkout" class="primary-btn checkout-btn">Thanh toán</a>
                                    </div>
                                </div>
                            </li>
                            <li class="cart-price">
                                {{Cart::subtotal()}}đ
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
        <div class="nav-item">
            <div class="container">
                <div class="nav-depart">
                    <div class="depart-btn">
                        <i class="ti-menu"></i>
                        <span>Danh mục</span>
                        <ul class="depart-hover">
                            @foreach ($categories as $category)
                                <li>
                                    <a href="shop/category/{{$category->cate_name}}">{{$category->cate_name}}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <nav class="nav-menu mobile-menu">
                    <ul>
                        <li class="{{(request()->segment(1) == '') ? 'active' : ''}}"><a href="./">Trang chủ</a></li>
                        <li class="{{(request()->segment(1) == 'shop') ? 'active' : ''}}"><a href="./shop">Shop</a></li>
                        <li><a href="">Thương hiệu </a>
                            <ul class="dropdown">
                                @foreach ($brands as $brand)
                                    <li>
                                        <a href="shop/brand/{{$brand->brand_name}}">{{$brand->brand_name}}</a>
                                    </li>
                                @endforeach
                           </ul>
                        </li>
                        <li class="{{(request()->segment(1) == 'blog') ? 'active' : ''}}"><a href="./blog">Tin tức</a></li>
                        <li class="{{(request()->segment(1) == 'contact') ? 'active' : ''}}"><a href="./contact">Liên hệ</a></li>
                        <li><a href="#">Trang</a>
                            <ul class="dropdown">
                                <li><a href="{{route('blog')}}">Chi tiết tin tức</a></li>
                                <li><a href="{{route('MyAccount.index')}}">Tài khoản của tôi</a></li>
                                <li><a href="./cart">Giỏ hàng</a></li>
                                <li><a href="./checkout">Thanh toán</a></li>
                                <li><a href="./myOrder">Đơn hàng của tôi</a></li>
                                <li><a href="./account/register">Đăng ký</a></li>
                                <li><a href="./account/login">Đăng nhập</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <div id="mobile-menu-wrap"></div>
            </div>
        </div>
    </header>
    <!-- Header Section  End-->

    @yield('content')
    <!-- footer Section Begin -->
    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="footer-left">
                        <div class="footer-logo">
                            <a href="">
                                <img src="{{asset('Frontend/assets/logo-3.png')}}" height="25" alt="">
                            </a>
                        </div>
                        <ul>
                            <li>Thị Trấn Văn Giang - Văn Giang - Hưng Yên</li>
                            <li>Phone: +84 35.309.0212</li>
                            <li>Email: nguyentruongson1842001@gmail.com</li>
                        </ul>
                        <div class="footer-social">
                            <a href="{{getConfigValue('Facebook_link')}}">
                                <i class="ti-facebook"></i>
                            </a>
                            <a href="{{getConfigValue('youtube_link')}}">
                                <i class="ti-youtube"></i>
                            </a>
                            <a href="{{getConfigValue('pinterest_link')}}">
                                <i class="ti-pinterest"></i>
                            </a>
                            <a href="{{getConfigValue('instagram_link')}}">
                                <i class="ti-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 ">
                    <div class="footer-widget">
                        <h5>Thông tin</h5>
                        <ul>
                            <li><a href="">Về chúng tôi</a></li>
                            <li><a href="">Thủ tục thanh toán</a></li>
                            <li><a href="">Liên hệ</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="footer-widget">
                        <h5>My Account</h5>
                        <ul>
                            <li><a href="">Tài khoản của tôi</a></li>
                            <li><a href="">Liên hệ</a></li>
                            <li><a href="">Giỏ hàng</a></li>
                            <li><a href="">Cửa hàng</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="newslatter-item">
                        <h5>Tham gia Bản tin của chúng tôi ngay bây giờ</h5>
                        <p>Nhận thông tin cập nhật qua email về cửa hàng sau của chúng tôi và các ưu đãi đặc biệt.</p>
                        <form action="#" class="subscribe-form">
                            <input type="text" placeholder="Thư của bạn">
                            <button type="button">Gửi</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
        <div class="copyright-reserved">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright-text">
                            Bản quyền ©<script>document.write(new Date().getFullYear());</script>2023Tất cả các quyền | Mẫu này được thực hiện với<i class="fa fa-heart-o" aria-hidden="true"></i> bởi<a href="https://CodeLean.vn" target="_blank"> CodeLean</a>
                        </div>
                        <div class="payment-pic">
                            <img src="{{asset('Frontend/assets/img/payment-method.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer Section End -->


    <!-- Js Plugins -->
    <script src="{{asset('Frontend/assets/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('Frontend/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('Frontend/assets/js/jquery-ui.min.js')}}"></script>
    <script src="{{asset('Frontend/assets/js/jquery.countdown.min.js')}}"></script>
    <script src="{{asset('Frontend/assets/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('Frontend/assets/js/jquery.zoom.min.js')}}"></script>
    <script src="{{asset('Frontend/assets/js/jquery.dd.min.js')}}"></script>
    <script src="{{asset('Frontend/assets/js/jquery.slicknav.js')}}"></script>
    <script src="{{asset('Frontend/assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('Frontend/assets/js/owlcarousel2-filter.min.js')}}"></script>
    <script src="{{asset('Frontend/assets/js/main.js')}}"></script>
    @yield('js')
</html>


