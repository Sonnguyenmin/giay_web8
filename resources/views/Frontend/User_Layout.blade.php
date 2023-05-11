@extends('welcome')
@section('content')
    <!-- Hero Section Begin -->
    <section class="hero-section">
        <div class="hero-items owl-carousel">
            @foreach ($slide as $sl)
                <div class="single-hero-items set-bg" data-setbg="{{config('app.baseUrl') . $sl->image_path}}">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5">
                                <span>{{$sl->slide_title}}</span>
                                <h2>{{$sl->slide_name}}</h2>
                                <p>{{$sl->slide_desc}}</p>
                                <a href="{{route('shop')}}" class="primary-btn">Khám phá</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Banner Section Begin -->
    <div class="banner-section spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div class="single-banner">
                        <img class="banner_img" src="{{asset('Frontend/assets/img/Nike.jpg')}}" alt="">
                        <div class="inner-text">
                            <h4>Nike's</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="single-banner">
                        <img class="banner_img" src="{{asset('Frontend/assets/img/adidas.png')}}" alt="">
                        <div class="inner-text">
                            <h4>Adidas's</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="single-banner">
                        <img class="banner_img" src="{{asset('Frontend/assets/img/jordan.jpg')}}" alt="">
                        <div class="inner-text">
                            <h4>Jordan's</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="single-banner">
                        <img class="banner_img" src="{{asset('Frontend/assets/img/yeezy.jpg')}}" alt="">
                        <div class="inner-text">
                            <h4>Yeezy's</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Section End -->

    <!-- Women Banner Section Begin -->
    <section class="women-banner spad" >
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div class="product-large set-bg" data-setbg="{{asset('Frontend/assets/img/giay-nike-af1.jpg')}}">
                        <h2 style="color: #e75614">Giày Nữ</h2>
                        <a style="color: #e75614" href="{{route('shop')}}">Tất cả sản phẩm</a>
                    </div>
                </div>
                <div class="col-lg-8 offset-lg-1">
                    <div class="filter-control">
                        <ul>
                            <li class="active item" data-tag="" data-category="women">Tất cả</li>
                            <li class="item" data-tag=".Nike" data-category="women">Nike</li>
                            <li class="item" data-tag=".Adidas" data-category="women">Adidas</li>
                            <li class="item" data-tag=".Jordan" data-category="women">Jordan</li>
                            <li class="item" data-tag=".Yeezy" data-category="women">Yeezy</li>
                        </ul>
                    </div>
                    <div class="product-slider owl-carousel women">
                        @foreach ($featuredProducts['women'] as $product)
                            <div  class="product-item item {{$product->tag}}">
                                <div class="pi-pic">
                                    <img class="index_img" src="{{config('app.baseUrl') . $product->feature_image}}" alt="">
                                    @if ($product->discount != null)
                                        <div class="sale">Sale</div>
                                    @endif
                                    <div class="icon">
                                        <i class="icon_heart_alt"></i>
                                    </div>
                                    <ul>
                                        <li class="quick-view" style="background-color: #e7ab3c"><a style="color: #fff" href="{{route('details.product',['slug'=>$product->slug, 'id' =>$product->id])}}">+ Chi tiết</a></li>
                                    </ul>
                                </div>
                                <div class="pi-text">
                                    <div class="catagory-name">
                                        {{$product->category->cate_name}}
                                    </div>
                                    <a href="{{route('details.product',['slug'=>$product->slug, 'id' =>$product->id])}}">
                                        <h5 class="product_name">{{$product->pro_name}}</h5>
                                    </a>
                                    <div class="product-price">
                                        @if ($product->discount != null)
                                            {{number_format($product->discount)}}đ
                                            <span>{{number_format($product->pro_price)}}đ</span>
                                        @else
                                            {{number_format($product->pro_price)}}đ
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Women Banner Section End -->

    <!-- Deal of the Week Section Begin -->
    <section class="deal-of-week set-bg spad" data-setbg="{{asset('Frontend/assets/img/home-1-01.jpg')}}">
        <div class="container">
            <div class="col-lg-6 text-center">
                <div class="section-title">
                    <h2>Bộ sưu tập Giày norda</h2>
                    <p>Cửa Hàng NORDA là một trong những nơi sưu tầm có khối lượng giày hiếm siêu khủng. Có những mẫu giày cực kì hype được giới sưu tầm săn lùng, thậm chí bạn sẽ bắt gặp nhiều mẫu lạ mới mà hiếm shop nào có. Có những mẫu chỉ có độc nhất 1 đôi. Ngoài ra những mẫu đang rất HOT trên thị trường sneaker về liên tục nên các bạn cứ yên tâm không sợ hết hàng.
                    </p>
                </div>
                <div class="countdown-timer" id="countdown">
                    <div class="cd-item">
                        <span>56</span>
                        <p>Ngày</p>
                    </div>
                    <div class="cd-item">
                        <span>12</span>
                        <p>giờ</p>
                    </div>
                    <div class="cd-item">
                        <span>48</span>
                        <p>phút</p>
                    </div>
                    <div class="cd-item">
                        <span>52</span>
                        <p>giây</p>
                    </div>
                </div>
                <a href="{{route('shop')}}" class="primary-btn">Khám phá</a>
            </div>
        </div>
    </section>
    <!-- Deal of the Week Section End -->

    <!-- man Banner Section Begin -->
    <section class="man-banner spad" >
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 ">
                    <div class="filter-control">
                        <ul>
                            <li class="active item" data-tag="" data-category="men">Tất cả</li>
                            <li class="item" data-tag=".Nike" data-category="men">Nike</li>
                            <li class="item" data-tag=".Adidas" data-category="men">Adidas</li>
                            <li class="item" data-tag=".Jordan" data-category="men">Jordan</li>
                            <li class="item" data-tag=".Yeezy" data-category="men">Yeezy</li>
                        </ul>
                    </div>
                    <div class="product-slider owl-carousel men">
                        @foreach ($featuredProducts['men'] as $product)
                            <div class="product-item item {{$product->tag}}">
                                <div class="pi-pic">
                                    <img class="index_img" src="{{config('app.baseUrl') . $product->feature_image}}" alt="">
                                    @if ($product->discount != null)
                                        <div class="sale">Sale</div>
                                    @endif
                                    <div class="icon">
                                        <i class="icon_heart_alt"></i>
                                    </div>
                                    <ul>
                                        <li class="quick-view" style="background-color: #e7ab3c"><a style="color: #fff" href="{{route('details.product',['slug'=>$product->slug, 'id' =>$product->id])}}">+ Chi tiết</a></li>

                                    </ul>
                                </div>
                                <div class="pi-text">
                                    <div class="catagory-name">
                                        {{$product->category->cate_name}}
                                    </div>
                                    <a href="{{route('details.product',['slug'=>$product->slug, 'id' =>$product->id])}}">
                                        <h5 class="product_name">{{$product->pro_name}}</h5>
                                    </a>
                                    <div class="product-price">
                                        @if ($product->discount != null)
                                            {{number_format($product->discount)}}đ
                                            <span>{{number_format($product->pro_price)}}đ</span>
                                        @else
                                            {{number_format($product->pro_price)}}đ
                                        @endif
                                    </div>
                                </div>
                            </div>
                         @endforeach
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1">
                    <div class="product-large set-bg" data-setbg="{{asset('Frontend/assets/img/qh.jpg')}}">
                        <h2 style="color: #e75614">Giày Nam</h2>
                        <a href="{{route('shop')}}" style="color: #e75614">Xem tất cả</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- man Banner Section End -->

     <!-- Sale Banner Section Begin -->
     <section class="women-banner spad" >
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div class="product-large set-bg" data-setbg="{{asset('Frontend/assets/img/sale.jpg')}}">
                    </div>
                </div>
                <div class="col-lg-8 offset-lg-1">
                    <div class="filter-control">
                        <ul>
                            <li class="active item" data-tag="" data-category="sale">Tất cả</li>
                            <li class="item" data-tag=".Nike" data-category="sale">Nike</li>
                            <li class="item" data-tag=".Adidas" data-category="sale">Adidas</li>
                            <li class="item" data-tag=".Jordan" data-category="sale">Jordan</li>
                            <li class="item" data-tag=".Yeezy" data-category="sale">Yeezy</li>

                        </ul>
                    </div>
                    <div class="product-slider owl-carousel sale">
                        @foreach ($featuredSale['sale'] as $product)
                            <div  class="product-item item {{$product->tag}}">
                                <div class="pi-pic">
                                    <img class="index_img" src="{{config('app.baseUrl') . $product->feature_image}}" alt="">
                                    @if ($product->discount != null)
                                        <div class="sale">Sale</div>
                                    @endif
                                    <div class="icon">
                                        <i class="icon_heart_alt"></i>
                                    </div>
                                    <ul>

                                        <li class="quick-view" style="background-color: #e7ab3c"><a style="color: #fff" href="{{route('details.product',['slug'=>$product->slug, 'id' =>$product->id])}}">+Chi tiết</a></li>

                                    </ul>
                                </div>
                                <div class="pi-text">
                                    <div class="catagory-name">
                                        {{$product->category->cate_name}}
                                    </div>
                                    <a href="{{route('details.product',['slug'=>$product->slug, 'id' =>$product->id])}}">
                                        <h5 class="product_name">{{$product->pro_name}}</h5>
                                    </a>
                                    <div class="product-price">
                                        @if ($product->discount != null)
                                            {{number_format($product->discount)}}đ
                                            <span>{{number_format($product->pro_price)}}đ</span>
                                        @else
                                            {{number_format($product->pro_price)}}đ
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Sale Banner Section End -->

    <!-- Latest Blog Section Begin -->
    <section class="latest-blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Tin Tức</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($blogs as $blog)
                    <div class="col-lg-4 col-md-6" >
                        <div class="single-latest-blog">
                            <img src="{{$blog->image}}" alt="">
                            <div class="latest-text">
                                <div class="tag-list">
                                    <div class="tag-item">
                                        <i class="fa fa-calendar-o"></i>
                                        {{date('M d, Y', strtotime($blog->created_at))}}
                                    </div>
                                    <div class="tag-item">
                                        <i class="fa fa-comment-o"></i>
                                        {{count($blog->blogComments)}}
                                    </div>
                                </div>
                                <a href="{{route('blog')}}">
                                    <h4>{{$blog->title}}</h4>
                                </a>
                                <p>{{$blog->subtitle}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="benefit-items">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="single-benefit">
                            <div class="sb-icon">
                                <img src="{{asset('Frontend/assets/img/icon-1.png')}}" alt="">
                            </div>
                            <div class="sb-text">
                                <h6>Vận chuyển</h6>
                                <p>Miễn phí vận chuyển với mọi đơn hàng</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-benefit">
                            <div class="sb-icon">
                                <img src="{{asset('Frontend/assets/img/icon-2.png')}}" alt="">
                            </div>
                            <div class="sb-text">
                                <h6>Giao hàng đúng hạn</h6>
                                <p>Nhanh chóng nhất đến tay người sử dụng</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-benefit">
                            <div class="sb-icon">
                                <img src="{{asset('Frontend/assets/img/icon-3.png')}}" alt="">
                            </div>
                            <div class="sb-text">
                                <h6>Thanh toán an toàn</h6>
                                <p>Thanh toán an toàn 100%</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Latest Blog Section end -->

@stop
