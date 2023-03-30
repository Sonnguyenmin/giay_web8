@extends('welcome')
@section('content')
 <!-- Breacrumb Section Begin -->
 <div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <a href="index.html"><i class="fa fa-home"></i> Home</a>
                    <a href="shop.html">shop</a>
                    <span>{{$products->pro_name}}</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breacrumb Section End -->

<!-- Product Show Section Begin -->
<section class="product-shop spad page-details">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
               @include('Frontend.user_Page.sidebarProduct')
               <div class="filter-widget">
                <h4 class="fw-title">Tags</h4>
                <div class="fw-tags">
                    <a href="">{{$products->tag}}</a>
                </div>
            </div>
            </div>
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="product-pic-zoom">
                            <img class="product-big-img"  src="{{config('app.baseUrl') . $products->proImages[0]->image_path}}" alt="">
                            <div class="zoom-icon">
                                <i class="fa fa-search-plus"></i>
                            </div>
                        </div>
                        <div class="product-thumbs">
                            <div class="product-thumbs-track ps-slider owl-carousel">
                                @foreach ($products->proImages as $productImage)
                                    <div class="pt active" data-imgbigurl="{{config('app.baseUrl') . $productImage->image_path}}">
                                        <img src="{{config('app.baseUrl') . $productImage->image_path}}" alt="">
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="product-details">
                            <div class="pd-title">
                                <span>{{$products->category->cate_name}}</span>
                                <h3>{{$products->pro_name}}</h3>
                                <a href="" class="heart-icon">
                                    <i class="icon_heart_alt"></i>
                                </a>
                            </div>
                            {{-- <div class="pd-rating">
                                @for($i = 1; $i <=5; $i++)
                                    @if($i <= $products->avgRating)
                                        <i class="fa fa-star"></i>
                                    @else
                                        <i class="fa fa-star-o"></i>
                                    @endif
                                @endfor
                                <span>({{count($products->productComments)}}</span>
                            </div> --}}
                                <div class="pd-desc">
                                    <p>{{$products->pro_content}}</p>
                                    <h4>
                                        @if ($products->discount != null)
                                            {{number_format($products->discount)}}đ
                                            <span>{{number_format($products->pro_price)}}đ</span>
                                        @else
                                            {{number_format($products->pro_price)}}đ
                                        @endif
                                    </h4>
                                </div>
                                <h5 style="margin-bottom: 20px">Tình trạng sản phẩm:

                                        @if ($products->qty === 0)
                                            <span style="color:orangered">Hết hàng</span>
                                        @else
                                            <span style="color:blue">Còn hàng</span>
                                        @endif
                                </h5>
                                <div class="pd-size-choose">
                                    @foreach (array_unique(array_column($products->attrs->toArray(), 'attr_value')) as $productSize)
                                        <div class="sc-item">
                                            <input type="radio" name="size_pro" id="{{$productSize}}">
                                            <label for="{{$productSize}}">{{$productSize}}</label>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="quantity">
                                    <div class="quantity">
                                        <div class="pro-qty">
                                            <input name="qty"  type="text" value="1">
                                            <input name="qty_hidden"  type="hidden" value="{{$products->id}}">
                                        </div>
                                        <button type="submit"  class="primary-btn pd-cart">Thêm giỏ hàng</button>
                                    </div>
                                </div>
                            <ul class="pd-tags">
                                <li> <span>DANH MỤC</span>: {{$products->category->cate_name}}</li>
                                <li><span>TAGS</span>:
                                   {{$products->tag}}
                                </li>
                            </ul>
                            <div class="pd-share">
                                <div class="p-code">
                                    {{-- Sku: {{$products->sku}} --}}
                                </div>
                                <div class="pd-social">
                                    <a href=""><i class="ti-facebook"></i></a>
                                    <a href=""><i class="ti-twitter-alt"></i></a>
                                    <a href=""><i class="ti-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-tab">
                    <div class="tab-item">
                        <ul class="nav" role="tablist">
                            <li><a class="active" href="#tab-1" data-toggle ="tab" role = "tab">MÔ TẢ</a></li>
                            <li><a href="#tab-2" data-toggle ="tab" role = "tab">THÔNG SỐ KĨ THUẬT</a></li>
                            <li><a href="#tab-3" data-toggle ="tab" role = "tab">ĐÁNh GIÁ KHÁCH HÀNG</a></li>
                        </ul>
                    </div>
                    <div class="tab-item-content">
                       <div class="tab-content">
                            <div class="tab-pane fade-in active" id="tab-1" role = "tabpanel">
                                <div class="product-content">
                                    <div class="row">
                                        <div class="col-lg-7">
                                            <h5>Mô tả sản phẩm</h5>
                                            @if($products->pro_desc != null)
                                                <p>{{$products->pro_desc}}</p>
                                            @else
                                                <p>Hiện không có mô tả sản phẩm này !!!</p>
                                            @endif
                                        </div>
                                        <div class="col-lg-5">
                                            <img src="{{config('app.baseUrl') . $products->feature_image}}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab-2" role = "tabpanel">
                                <div class="specification-table">
                                    <table>
                                        {{-- <tr>
                                            <td class="p-catagory">
                                                Customer Rating
                                            </td>
                                            <td class="pd-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <span>(5)</span>

                                            </td>
                                        </tr> --}}
                                        <tr>
                                            <td class="p-catagory">GIÁ TIỀN</td>
                                            <td class="p-price">
                                                @if ($products->discount != null)
                                                    {{number_format($products->discount)}}đ
                                                    <span>{{number_format($products->pro_price)}}đ</span>
                                                @else
                                                    {{number_format($products->pro_price)}}đ
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="p-catagory">Thêm giỏ hàng</td>
                                            <td>
                                                <div class="cart-add">Thêm giỏ hàng</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="p-catagory">Kho sản phẩm</td>
                                            <td>
                                                <div class="p-stock">
                                                    @if ($products->qty === 0)
                                                        Không còn sản phẩm trong kho
                                                    @else
                                                        Có {{$products->qty}} sản phẩm trong kho
                                                    @endif
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="p-catagory">
                                                Weight
                                            </td>
                                            <td>
                                                <div class="p-weight">
                                                    {{$products->weight}}
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="p-catagory">Size</td>
                                            <td>
                                                <div class="p-size">
                                                    @foreach (array_unique(array_column($products->attrs->toArray(), 'attr_value')) as $productSize)
                                                            <span>{{$productSize}},</span>
                                                    @endforeach
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="p-category">Sku</td>
                                            <td>
                                                <div class="p-code">{{$products->Sku}}</div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab-3" role = "tabpanel">
                                <div class="customer-review-option">
                                    <h4>Bình luận</h4>
                                    <div class="comment-option">
                                        <div class="co-item">
                                            <div class="avatar-pic">
                                                <img src="img/product-single/avatar-1.png" alt="">
                                            </div>
                                            <div class="avatar-text">
                                                <div class="at-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <span>(5)</span>

                                                </div>
                                                <h5>Bramdon Kelley <span>27 Aug 2022</span></h5>
                                                <div class="at-reply">Nice !</div>
                                            </div>
                                        </div>
                                        <div class="co-item">
                                            <div class="avatar-pic">
                                                <img src="img/product-single/avatar-1.png" alt="">
                                            </div>
                                            <div class="avatar-text">
                                                <div class="at-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <span>(5)</span>

                                                </div>
                                                <h5>Bramdon Kelley <span>27 Aug 2022</span></h5>
                                                <div class="at-reply">Nice !</div>
                                            </div>
                                        </div>
                                        <div class="co-item">
                                            <div class="avatar-pic">
                                                <img src="img/product-single/avatar-1.png" alt="">
                                            </div>
                                            <div class="avatar-text">
                                                <div class="at-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <span>(5)</span>

                                                </div>
                                                <h5>Bramdon Kelley <span>27 Aug 2022</span></h5>
                                                <div class="at-reply">Nice !</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="personal-rating">
                                        <h6>Your Rating</h6>
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <span>(5)</span>
                                        </div>
                                    </div>
                                    <div class="leave-comment">
                                        <h4>leave A Comment</h4>
                                        <form action="" class="comment-form">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <input type="text" placeholder="Name">
                                                </div>
                                                <div class="col-lg-6">
                                                    <input type="text" placeholder="Email">
                                                </div>
                                                <div class="col-lg-12">
                                                    <textarea placeholder="Messages"></textarea>
                                                    <button type="submit" class="site-btn">Send messeage</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Product Show Section End -->

<!-- Related Product Section Begin -->
<div class="related-products spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Sản phẩm liên quan</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($relatedProducts as $relatedProduct)
                <div class="col-lg-3 col-sm-6">
                    <div class="product-item">
                        <div class="pi-pic">
                            <img class="related_img" src="{{config('app.baseUrl') . $relatedProduct->feature_image}}" alt="">
                            @if ($relatedProduct->discount != null)
                                <div class="sale pp-sale">Sale</div>
                            @endif
                            <div class="icon">
                                <i class="icon_heart_alt"></i>
                            </div>
                            <ul>
                                <li class="m-icon active">
                                    <a href="">
                                        <i class="icon_bag_alt"></i>
                                    </a>
                                </li>
                                <li class="quick-view"><a href="{{route('details.product',['slug'=>$relatedProduct->slug, 'id' =>$relatedProduct->id])}}">
                                    + Chi tiết
                                </a></li>
                                <li class="w-icon">
                                    <a href="">
                                        <i class="fa fa-random"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="pi-text">
                            <div class="catagory-name">{{$relatedProduct->category->cate_name}}</div>
                            <a href="{{route('details.product',['slug'=>$relatedProduct->slug, 'id' =>$relatedProduct->id])}}">
                                <h5 class="product_name">{{$relatedProduct->pro_name}}</h5>
                            </a>
                            <div class="product-price">
                                @if ($relatedProduct->discount != null)
                                    {{number_format($relatedProduct->discount)}}đ
                                    <span>{{number_format($relatedProduct->pro_price)}}đ</span>
                                @else
                                    {{number_format($relatedProduct->pro_price)}}đ
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

<!-- Related Product Section End -->

@stop
