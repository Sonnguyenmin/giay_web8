<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from htmldemo.net/norda/norda/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Jan 2023 15:29:34 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Norda - Của hàng bán giày sneaker Norda</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('Frontend/assets/images/admin.png')}}">

    <!-- All CSS is here
	============================================ -->

    <link rel="stylesheet" href="{{asset('Frontend/assets/css/vendor/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('Frontend/assets/css/vendor/signericafat.css')}}">
    <link rel="stylesheet" href="{{asset('Frontend/assets/css/vendor/cerebrisans.css')}}">
    <link rel="stylesheet" href="{{asset('Frontend/assets/css/vendor/simple-line-icons.css')}}">
    <link rel="stylesheet" href="{{asset('Frontend/assets/css/vendor/elegant.css')}}">
    <link rel="stylesheet" href="{{asset('Frontend/assets/css/vendor/linear-icon.css')}}">
    <link rel="stylesheet" href="{{asset('Frontend/assets/css/plugins/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('Frontend/assets/css/plugins/easyzoom.css')}}">
    <link rel="stylesheet" href="{{asset('Frontend/assets/css/plugins/slick.css')}}">
    <link rel="stylesheet" href="{{asset('Frontend/assets/css/plugins/animate.css')}}">
    <link rel="stylesheet" href="{{asset('Frontend/assets/css/plugins/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('Frontend/assets/css/plugins/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('Frontend/assets/css/style.css')}}">

</head>

<body>

    <div class="main-wrapper">
        <header class="header-area">
            <div class="header-large-device section-padding-2">
                <div class="header-top header-top-ptb-3 bg-black">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col-xl-4 col-lg-3">
                                <div class="header-quick-contect">
                                    <ul>
                                        <li><i class="icon-phone "></i> {{getConfigValue('phone_contact')}}</li>
                                        <li><i class="icon-envelope-open "></i> {{getConfigValue('mail_contact')}}</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-5 col-lg-4">
                                <div class="header-offer-wrap-3 text-center">
                                    <p>Giao hàng miễn phí trên toàn quốc cho các đơn hàng trên 10.000.000 vnđ <a href="#">Xem thêm</a></p>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-5">
                                <div class="header-top-right">
                                    <div class="social-hm4-wrap">
                                        <span>Follow us</span>
                                        <div class="social-style-1 social-style-1-white">
                                            <a href=""><i class="icon-social-twitter"></i></a>
                                            <a href="{{getConfigValue('Facebook_link')}}"><i class="icon-social-facebook"></i></a>
                                            <a href="{{getConfigValue('instagram_link')}}"><i class="icon-social-instagram"></i></a>
                                            <a href="{{getConfigValue('youtube_link')}}"><i class="icon-social-youtube"></i></a>
                                            <a href="{{getConfigValue('pinterest_link')}}"><i class="icon-social-pinterest"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-bottom">
                    <div class="container-fluid">
                        <div class="border-bottom-6">
                            <div class="row align-items-center">
                                <div class="col-xl-3 col-lg-2">
                                    <div class="logo">
                                        <a href="index-2.html"><img src="{{asset('Frontend/assets/images/logo/logo.png')}}" alt="logo"></a>
                                    </div>
                                </div>
                                @include('Frontend.group_layout.menubar')
                                <div class="col-xl-3 col-lg-3">
                                    <div class="header-action header-action-flex header-action-mrg-right">
                                        <div class="same-style-2 header-search-1">
                                            <a class="search-toggle" href="#">
                                                <i class="icon-magnifier s-open"></i>
                                                <i class="icon_close s-close"></i>
                                            </a>
                                            <div class="search-wrap-1">
                                                <form action="#">
                                                    <input placeholder="Search products…" type="text">
                                                    <button class="button-search"><i class="icon-magnifier"></i></button>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="same-style-2 same-style-2-font-inc">
                                            <a href="login-register.html"><i class="icon-user"></i></a>
                                        </div>
                                        <div class="same-style-2 same-style-2-font-inc">
                                            <a href="wishlist.html"><i class="icon-heart"></i><span class="pro-count black">03</span></a>
                                        </div>
                                        <div class="same-style-2 same-style-2-font-inc header-cart">
                                            <a class="cart-active" href="#">
                                                <i class="icon-basket-loaded"></i><span class="pro-count black">02</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-small-device small-device-ptb-1 border-bottom-2">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-5">
                            <div class="mobile-logo">
                                <a href="index-2.html">
                                    <img alt="" src="{{asset('Frontend/assets/images/logo/logo.png')}}">
                                </a>
                            </div>
                        </div>
                        <div class="col-7">
                            <div class="header-action header-action-flex">
                                <div class="same-style-2 same-style-2-font-inc">
                                    <a href="login-register.html"><i class="icon-user"></i></a>
                                </div>
                                <div class="same-style-2 same-style-2-font-inc">
                                    <a href="wishlist.html"><i class="icon-heart"></i><span class="pro-count black">03</span></a>
                                </div>
                                <div class="same-style-2 same-style-2-font-inc header-cart">
                                    <a class="cart-active" href="#">
                                        <i class="icon-basket-loaded"></i><span class="pro-count black">02</span>
                                    </a>
                                </div>
                                <div class="same-style-2 main-menu-icon">
                                    <a class="mobile-header-button-active" href="#"><i class="icon-menu"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        @yield('content')

        <div class="subscribe-area pt-115 pb-115">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-5">
                        <div class="section-title">
                            <h2>keep connected</h2>
                            <p>Get updates by subscribe our weekly newsletter</p>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7">
                        <div id="mc_embed_signup" class="subscribe-form">
                            <form id="mc-embedded-subscribe-form" class="validate subscribe-form-style" novalidate="" target="_blank" name="mc-embedded-subscribe-form" method="post" action="https://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef">
                                <div id="mc_embed_signup_scroll" class="mc-form">
                                    <input class="email" type="email" required="" placeholder="Enter your email address" name="EMAIL" value="">
                                    <div class="mc-news" aria-hidden="true">
                                        <input type="text" value="" tabindex="-1" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef">
                                    </div>
                                    <div class="clear">
                                        <input id="mc-embedded-subscribe" class="button" type="submit" name="subscribe" value="Subscribe">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer-area pb-65">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="contact-info-wrap">
                            <div class="footer-logo">
                                <a href="#"><img src="{{asset('Frontend/assets/images/logo/logo.png')}}" alt="logo"></a>
                            </div>
                            <div class="single-contact-info">
                                <span>Our Location</span>
                                <p>869 General Village Apt. 645, Moorebury, USA</p>
                            </div>
                            <div class="single-contact-info">
                                <span>24/7 hotline:</span>
                                <p>(+99) 052 128 2399</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="footer-right-wrap">
                            <div class="footer-menu">
                                <nav>
                                    <ul>
                                        <li><a href="index-2.html">home</a></li>
                                        <li><a href="shop.html">Shop</a></li>
                                        <li><a href="shop.html">Product </a></li>
                                        <li><a href="contact.html">Contact</a></li>
                                        <li><a href="blog.html">Blog.</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="social-style-2 social-style-2-hover-black social-style-2-mrg">
                                <a href="#"><i class="social_twitter"></i></a>
                                <a href="#"><i class="social_facebook"></i></a>
                                <a href="#"><i class="social_googleplus"></i></a>
                                <a href="#"><i class="social_instagram"></i></a>
                                <a href="#"><i class="social_youtube"></i></a>
                            </div>
                            <div class="copyright">
                                <p>Copyright © 2022 HasThemes | <a href="https://hasthemes.com/">Built with <span>Norda</span> by HasThemes</a>.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true"></span></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-5 col-md-6 col-12 col-sm-12">
                                <div class="tab-content quickview-big-img">
                                    <div id="pro-1" class="tab-pane fade show active">
                                        <img src="{{asset('Frontend/assets/images/product/product-1.jpg')}}" alt="">
                                    </div>
                                    <div id="pro-2" class="tab-pane fade">
                                        <img src="{{asset('Frontend/assets/images/product/product-3.jpg')}}" alt="">
                                    </div>
                                    <div id="pro-3" class="tab-pane fade">
                                        <img src="{{asset('Frontend/assets/images/product/product-6.jpg')}}" alt="">
                                    </div>
                                </div>
                                <div class="quickview-wrap mt-15">
                                    <div class="nav nav-style-6">
                                        <button class="nav-link active" id="pro-1-tab" data-bs-toggle="tab" data-bs-target="#pro-1" type="button" role="tab"
                                            aria-controls="pro-1" aria-selected="true">
                                            <img src="{{asset('Frontend/assets/images/product/quickview-s1.jpg')}}" alt="product-thumbnail">
                                        </button>
                                        <button class="nav-link" id="pro-2-tab" data-bs-toggle="tab" data-bs-target="#pro-2" type="button" role="tab"
                                            aria-controls="pro-2" aria-selected="true">
                                            <img src="{{asset('Frontend/assets/images/product/quickview-s2.jpg')}}" alt="product-thumbnail">
                                        </button>
                                        <button class="nav-link" id="pro-3-tab" data-bs-toggle="tab" data-bs-target="#pro-3" type="button" role="tab"
                                            aria-controls="pro-3" aria-selected="true">
                                            <img src="{{asset('Frontend/assets/images/product/quickview-s3.jpg')}}" alt="product-thumbnail">
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-6 col-12 col-sm-12">
                                <div class="product-details-content quickview-content">
                                    <h2>Simple Black T-Shirt</h2>
                                    <div class="product-ratting-review-wrap">
                                        <div class="product-ratting-digit-wrap">
                                            <div class="product-ratting">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                            </div>
                                            <div class="product-digit">
                                                <span>5.0</span>
                                            </div>
                                        </div>
                                        <div class="product-review-order">
                                            <span>62 Reviews</span>
                                            <span>242 orders</span>
                                        </div>
                                    </div>
                                    <p>Seamlessly predominate enterprise metrics without performance based process improvements.</p>
                                    <div class="pro-details-price">
                                        <span class="new-price">$75.72</span>
                                        <span class="old-price">$95.72</span>
                                    </div>
                                    <div class="pro-details-color-wrap">
                                        <span>Color:</span>
                                        <div class="pro-details-color-content">
                                            <ul>
                                                <li><a class="dolly" href="#">dolly</a></li>
                                                <li><a class="white" href="#">white</a></li>
                                                <li><a class="azalea" href="#">azalea</a></li>
                                                <li><a class="peach-orange" href="#">Orange</a></li>
                                                <li><a class="mona-lisa active" href="#">lisa</a></li>
                                                <li><a class="cupid" href="#">cupid</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="pro-details-size">
                                        <span>Size:</span>
                                        <div class="pro-details-size-content">
                                            <ul>
                                                <li><a href="#">XS</a></li>
                                                <li><a href="#">S</a></li>
                                                <li><a href="#">M</a></li>
                                                <li><a href="#">L</a></li>
                                                <li><a href="#">XL</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="pro-details-quality">
                                        <span>Quantity:</span>
                                        <div class="cart-plus-minus">
                                            <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1">
                                        </div>
                                    </div>
                                    <div class="product-details-meta">
                                        <ul>
                                            <li><span>Categories:</span> <a href="#">Woman,</a> <a href="#">Dress,</a> <a href="#">T-Shirt</a></li>
                                            <li><span>Tag: </span> <a href="#">Fashion,</a> <a href="#">Mentone</a> , <a href="#">Texas</a></li>
                                        </ul>
                                    </div>
                                    <div class="pro-details-action-wrap">
                                        <div class="pro-details-add-to-cart">
                                            <a title="Add to Cart" href="#">Add To Cart </a>
                                        </div>
                                        <div class="pro-details-action">
                                            <a title="Add to Wishlist" href="#"><i class="icon-heart"></i></a>
                                            <a title="Add to Compare" href="#"><i class="icon-refresh"></i></a>
                                            <a class="social" title="Social" href="#"><i class="icon-share"></i></a>
                                            <div class="product-dec-social">
                                                <a class="facebook" title="Facebook" href="#"><i class="icon-social-facebook"></i></a>
                                                <a class="twitter" title="Twitter" href="#"><i class="icon-social-twitter"></i></a>
                                                <a class="instagram" title="Instagram" href="#"><i class="icon-social-instagram"></i></a>
                                                <a class="pinterest" title="Pinterest" href="#"><i class="icon-social-pinterest"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal end -->
    </div>

    <!-- All JS is here
============================================ -->

<script src="{{asset('Frontend/assets/js/vendor/modernizr-3.11.7.min.js')}}"></script>
<script src="{{asset('Frontend/assets/js/vendor/jquery-v3.6.0.min.js')}}"></script>
<script src="{{asset('Frontend/assets/js/vendor/jquery-migrate-v3.3.2.min.js')}}"></script>
<script src="{{asset('Frontend/assets/js/vendor/popper.min.js')}}"></script>
<script src="{{asset('Frontend/assets/js/vendor/bootstrap.min.js')}}"></script>
<script src="{{asset('Frontend/assets/js/plugins/slick.js')}}"></script>
<script src="{{asset('Frontend/assets/js/plugins/jquery.syotimer.min.js')}}"></script>
<script src="{{asset('Frontend/assets/js/plugins/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('Frontend/assets/js/plugins/wow.js')}}"></script>
<script src="{{asset('Frontend/assets/js/plugins/jquery-ui.js')}}"></script>
<script src="{{asset('Frontend/assets/js/plugins/magnific-popup.js')}}"></script>
<script src="{{asset('Frontend/assets/js/plugins/sticky-sidebar.js')}}"></script>
<script src="{{asset('Frontend/assets/js/plugins/easyzoom.js')}}"></script>
<script src="{{asset('Frontend/assets/js/plugins/scrollup.js')}}"></script>
<script src="{{asset('Frontend/assets/js/plugins/ajax-mail.js')}}"></script>
<!-- Main JS -->
<script src="{{asset('Frontend/assets/js/main.js')}}"></script>

</body>


<!-- Mirrored from htmldemo.net/norda/norda/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Jan 2023 15:30:11 GMT -->
</html>
