@extends('welcome')
@section('content')
<!-- Breacrumb Section Begin -->
<div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <a href="{{route('home')}}"><i class="fa fa-home"></i> Home</a>
                    <span>Shop</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breacrumb Section End -->

<!-- Product Shop Section Begin -->
<div class="product-shop spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-8 order-2 order-lg-1 product-sidebar-filter">
                @include('Frontend.user_Page.Index.sidebarProduct')
            </div>
            <div class="col-lg-9 order-1 order-lg-2">
               <div class="product-show-option">
                    <div class="row">
                        <div class="col-lg-7 col-md-7">
                            <form action="">
                                <div class="select-option">
                                    <select class="sorting" name="sort_by" onchange="this.form.submit();">
                                        <option {{request('sort_by') == 'latest' ? 'selected' : '' }} value="latest">Sắp xếp: Mới nhất</option>
                                        <option {{request('sort_by') == 'name-ascending' ? 'selected' : '' }} value="name-ascending">Sắp xếp: A-Z</option>
                                        <option {{request('sort_by') == 'name-descending' ? 'selected' : '' }} value="name-descending">Sắp xếp: Z-A</option>
                                        <option {{request('sort_by') == 'price-ascending' ? 'selected' : '' }} value="price-ascending">Sắp xếp: Giá nhỏ nhất</option>
                                        <option {{request('sort_by') == 'price-descending' ? 'selected' : '' }} value="price-descending">Sắp xếp: Giá lớn nhất</option>
                                    </select>
                                    <select class="p-show" name="show" onchange="this.form.submit();">
                                        <option {{request('show') == '12' ? 'selected' : '' }} value="12">Hiển thị: 12</option>
                                        <option {{request('show') == '18' ? 'selected' : '' }} value="18">Hiển thị: 18</option>
                                        <option {{request('show') == '24' ? 'selected' : '' }} value="24">Hiển thị: 24</option>
                                    </select>
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-5 col-md-5 text-right">
                           Sneaker Norda
                        </div>
                    </div>
               </div>
               <div class="product-list">
                    <div class="row">
                        @foreach ($products as $product)
                            <div class="col-lg-4 col-sm-6">
                                <div class="product-item">
                                    <div class="pi-pic">
                                        <img class="product_img" src="{{config('app.baseUrl') . $product->feature_image}}" alt="">
                                        @if ($product->discount != null)
                                            <div class="sale pp-sale">Sale</div>
                                        @endif
                                        <div class="icon">
                                            <i class="icon_heart_alt"></i>
                                        </div>
                                        <ul>
                                            <li class="quick-view" style="background-color: #e7ab3c"><a style="color: #fff" href="{{route('details.product',['slug'=>$product->slug, 'id' =>$product->id])}}">+ Chi tiết</a></li>
                                        </ul>
                                    </div>
                                    <div class="pi-text">
                                        <div class="catagory-name">{{$product->category->cate_name}}</div>
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
                            </div>
                        @endforeach
                    </div>
               </div>
               {{$products->links()}}
            </div>
        </div>
    </div>
</div>
<!-- Product Shop Section End -->
@stop
