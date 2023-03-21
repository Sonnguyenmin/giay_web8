@extends('welcome')
@section('content')

<!-- mobile header start -->
<div class="mobile-header-active mobile-header-wrapper-style">
    <div class="clickalbe-sidebar-wrap">
        <a class="sidebar-close"><i class="icon_close"></i></a>
        <div class="mobile-header-content-area">
            <div class="header-offer-wrap-3 mobile-header-padding-border-4">
                <p class="black">Free shipping worldwide for orders over $99 <a href="#">Learn More</a></p>
            </div>
            <div class="mobile-search mobile-header-padding-border-1">
                <form class="search-form" action="#">
                    <input type="text" placeholder="Search here…">
                    <button class="button-search"><i class="icon-magnifier"></i></button>
                </form>
            </div>
            <div class="mobile-menu-wrap mobile-header-padding-border-2">
                <!-- mobile menu start -->
                <nav>
                    <ul class="mobile-menu">
                        <li class="menu-item-has-children"><a href="index-2.html">Home</a>
                            <ul class="dropdown">
                                <li><a href="index-2.html">Home version 1 </a></li>

                            </ul>
                        </li>
                        <li class="menu-item-has-children "><a href="#">shop</a>
                            <ul class="dropdown">
                                <li class="menu-item-has-children"><a href="#">shop layout</a>
                                    <ul class="dropdown">
                                        <li><a href="shop.html">standard style</a></li>

                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><a href="#">Products Layout</a>
                                    <ul class="dropdown">
                                        <li><a href="product-details.html">tab style 1</a></li>

                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children"><a href="#">Pages</a>
                            <ul class="dropdown">
                                <li><a href="about-us.html">about us </a></li>

                            </ul>
                        </li>
                        <li class="menu-item-has-children "><a href="#">Blog</a>
                            <ul class="dropdown">
                                <li><a href="blog.html">blog standard </a></li>

                            </ul>
                        </li>
                        <li><a href="contact.html">Contact us</a></li>
                    </ul>
                </nav>
                <!-- mobile menu end -->
            </div>
            <div class="mobile-header-info-wrap mobile-header-padding-border-3">
                <div class="single-mobile-header-info">
                    <a href="store-location.html"><i class="lastudioicon-pin-3-2"></i> Store Location </a>
                </div>
                <div class="single-mobile-header-info">
                    <a class="mobile-language-active" href="#">Language <span><i class="icon-arrow-down"></i></span></a>
                    <div class="lang-curr-dropdown lang-dropdown-active">
                        <ul>
                            <li><a href="#">English</a></li>

                        </ul>
                    </div>
                </div>
                <div class="single-mobile-header-info">
                    <a class="mobile-currency-active" href="#">Currency <span><i class="icon-arrow-down"></i></span></a>
                    <div class="lang-curr-dropdown curr-dropdown-active">
                        <ul>
                            <li><a href="#">USD</a></li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="mobile-contact-info mobile-header-padding-border-4">
                <ul>
                    <li><i class="icon-phone "></i> (+612) 2531 5600</li>
                    <li><i class="icon-envelope-open "></i> norda@domain.com</li>
                    <li><i class="icon-home"></i> PO Box 1622 Colins Street West Australia</li>
                </ul>
            </div>
            <div class="mobile-social-icon">
                <a class="facebook" href="#"><i class="icon-social-facebook"></i></a>
                <a class="twitter" href="#"><i class="icon-social-twitter"></i></a>
                <a class="pinterest" href="#"><i class="icon-social-pinterest"></i></a>
                <a class="instagram" href="#"><i class="icon-social-instagram"></i></a>
            </div>
        </div>
    </div>
</div>
<div class="product-categories-area product-categories-border pt-50 pb-20">
    <div class="container">
        <div class="product-categories-wrap-2">
            <div class="single-product-categories-2 mb-30">
                <div class="product-categories-2-icon">
                    <i class="icon-people"></i>
                </div>
                <div class="product-categories-2-content">
                    <h4><a href="shop.html">New Arrival <br>Products</a></h4>
                </div>
            </div>
            <div class="single-product-categories-2 mb-30">
                <div class="product-categories-2-icon">
                    <i class="icon-fire "></i>
                </div>
                <div class="product-categories-2-content">
                    <h4><a href="shop.html">Special Offer <br>Products</a></h4>
                </div>
            </div>
            <div class="single-product-categories-2 mb-30">
                <div class="product-categories-2-icon">
                    <i class="icon-handbag"></i>
                </div>
                <div class="product-categories-2-content">
                    <h4><a href="shop.html">Bags & <br>Accessories</a></h4>
                </div>
            </div>
            <div class="single-product-categories-2 mb-30">
                <div class="product-categories-2-icon">
                    <i class="icon-people"></i>
                </div>
                <div class="product-categories-2-content">
                    <h4><a href="shop.html">Young Clothing <br>& Accessories</a></h4>
                </div>
            </div>
            <div class="single-product-categories-2 mb-30">
                <div class="product-categories-2-icon">
                    <i class="icon-emotsmile "></i>
                </div>
                <div class="product-categories-2-content">
                    <h4><a href="shop.html">Kids & Babies <br>Apparel</a></h4>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- mini cart start -->
<div class="sidebar-cart-active">
    <div class="sidebar-cart-all">
        <a class="cart-close" href="#"><i class="icon_close"></i></a>
        <div class="cart-content">
            <h3>Shopping Cart</h3>
            <ul>
                <li class="single-product-cart">
                    <div class="cart-img">
                        <a href="#"><img src="{{asset('Frontend/assets/images/cart/cart-1.jpg')}}" alt=""></a>
                    </div>
                    <div class="cart-title">
                        <h4><a href="#">Simple Black T-Shirt</a></h4>
                        <span> 1 × $49.00   </span>
                    </div>
                    <div class="cart-delete">
                        <a href="#">×</a>
                    </div>
                </li>
                <li class="single-product-cart">
                    <div class="cart-img">
                        <a href="#"><img src="{{asset('Frontend/assets/images/cart/cart-2.jpg')}}" alt=""></a>
                    </div>
                    <div class="cart-title">
                        <h4><a href="#">Norda Backpack</a></h4>
                        <span> 1 × $49.00   </span>
                    </div>
                    <div class="cart-delete">
                        <a href="#">×</a>
                    </div>
                </li>
            </ul>
            <div class="cart-total">
                <h4>Subtotal: <span>$170.00</span></h4>
            </div>
            <div class="cart-checkout-btn">
                <a class="btn-hover cart-btn-style" href="cart.html">view cart</a>
                <a class="no-mrg btn-hover cart-btn-style" href="checkout.html">checkout</a>
            </div>
        </div>
    </div>
</div>
@include('Frontend.group_layout.slide')
@include('Frontend.group_layout.product')
<div class="banner-area section-padding-2 pb-85">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="banner-wrap mb-30">
                    <div class="banner-img banner-img-zoom">
                        <a href="product-details.html"><img src="{{asset('Frontend/assets/images/banner/banner-8.jpg')}}" alt=""></a>
                    </div>
                    <div class="banner-content-9">
                        <span>new arrivals <br>women</span>
                        <h2>Minimalist <br>Blazer</h2>
                        <p>A collection in minilaist style for basic blazer</p>
                        <div class="btn-style-1">
                            <a class="btn-1-padding-3 bg-white banner-btn-res" href="product-details.html">SHOP NOW</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="banner-wrap mb-30">
                    <div class="banner-img banner-img-zoom">
                        <a href="product-details.html"><img src="{{asset('Frontend/assets/images/banner/banner-9.jpg')}}" alt=""></a>
                    </div>
                    <div class="banner-content-10">
                        <span>mega sale</span>
                        <h2><span>50%</span> OFF <br>for Autumn</h2>
                        <p>Backpack BYORK, don’t miss out in this mage sale</p>
                        <div class="btn-style-1">
                            <a class="btn-1-padding-3 bg-white banner-btn-res" href="product-details.html">SHOP NOW</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('Frontend.group_layout.recomment')
@include('Frontend.group_layout.tag')
<div class="blog-area pt-115 pb-75">
    <div class="container">
        <div class="section-title-tab-wrap mb-55">
            <div class="section-title-4">
                <h2>press & looks</h2>
            </div>
            <div class="btn-style-6 ml-60">
                <a href="blog-details.html">All articles</a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="blog-wrap mb-30">
                    <div class="blog-img mb-25">
                        <a href="blog-details.html"><img src="{{asset('Frontend/assets/images/blog/blog-1.jpg')}}" alt="blog-img"></a>
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <ul>
                                <li><a href="#">News </a></li>
                                <li>May 25, 2022</li>
                            </ul>
                        </div>
                        <h3><a href="blog-details.html">Five things you only know if you’re at Chanel's Hamburg Show</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="blog-wrap mb-30">
                    <div class="blog-img mb-25">
                        <a href="blog-details.html"><img src="{{asset('Frontend/assets/images/blog/blog-2.jpg')}}" alt="blog-img"></a>
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <ul>
                                <li><a href="#">Inspiration </a></li>
                                <li>May 25, 2022</li>
                            </ul>
                        </div>
                        <h3><a href="blog-details.html">Basic colord mixed - trendind 2022</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="blog-wrap mb-30">
                    <div class="blog-img mb-25">
                        <a href="blog-details.html"><img src="{{asset('Frontend/assets/images/blog/blog-3.jpg')}}" alt="blog-img"></a>
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <ul>
                                <li><a href="#">Lookbook </a></li>
                                <li>May 25, 2022</li>
                            </ul>
                        </div>
                        <h3><a href="blog-details.html">Calvin Klein Shoes Collection 2022, Activites Summer</a></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="brand-logo-area pb-100">
    <div class="container">
        <div class="brand-logo-wrap brand-logo-mrg">
            <div class="single-brand-logo mb-10">
                <img src="{{asset('Frontend/assets/images/brand-logo/brand-logo-1.png')}}" alt="brand-logo">
            </div>
            <div class="single-brand-logo mb-10">
                <img src="{{asset('Frontend/assets/images/brand-logo/brand-logo-2.png')}}" alt="brand-logo">
            </div>
            <div class="single-brand-logo mb-10">
                <img src="{{asset('Frontend/assets/images/brand-logo/brand-logo-3.png')}}" alt="brand-logo">
            </div>
            <div class="single-brand-logo mb-10">
                <img src="{{asset('Frontend/assets/images/brand-logo/brand-logo-4.png')}}" alt="brand-logo">
            </div>
            <div class="single-brand-logo mb-10">
                <img src="{{asset('Frontend/assets/images/brand-logo/brand-logo-5.png')}}" alt="brand-logo">
            </div>
        </div>
    </div>
</div>
<div class="instagram-area">
    <div class="container-fluid p-0">
        <div class="row g-0">
            <div class="col">
                <div class="instagram-item">
                    <a class="instagram-image" href="#">
                        <img src="{{asset('Frontend/assets/images/instagram/1.jpg')}}" alt="Instagram Image">
                    </a>
                    <ul class="add-action">
                        <li>
                            <a href="#">
                                <i class="icon_plus"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col">
                <div class="instagram-item">
                    <a class="instagram-image" href="#">
                        <img src="{{asset('Frontend/assets/images/instagram/2.jpg')}}" alt="Instagram Image">
                    </a>
                    <ul class="add-action">
                        <li>
                            <a href="#">
                                <i class="icon_plus"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col">
                <div class="instagram-item">
                    <a class="instagram-image" href="#">
                        <img src="{{asset('Frontend/assets/images/instagram/3.jpg')}}" alt="Instagram Image">
                    </a>
                    <ul class="add-action">
                        <li>
                            <a href="#">
                                <i class="icon_plus"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col">
                <div class="instagram-item">
                    <a class="instagram-image" href="#">
                        <img src="{{asset('Frontend/assets/images/instagram/4.jpg')}}" alt="Instagram Image">
                    </a>
                    <ul class="add-action">
                        <li>
                            <a href="#">
                                <i class="icon_plus"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col">
                <div class="instagram-item">
                    <a class="instagram-image" href="#">
                        <img src="{{asset('Frontend/assets/images/instagram/5.jpg')}}" alt="Instagram Image">
                    </a>
                    <ul class="add-action">
                        <li>
                            <a href="#">
                                <i class="icon_plus"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

@stop()


