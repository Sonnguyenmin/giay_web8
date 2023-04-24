@extends('welcome')
@section('content')

<!-- Breacrumb Section Begin -->
<div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <a href="{{route('home')}}"><i class="fa fa-home"></i> Trang chủ</a>
                    <a href="{{route('shop')}}">shop</a>
                    <span>Tin tức</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breacrumb Section End -->

{{-- Blog Section Begin --}}
<section class="blog-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-8 order-2 order-lg-1">
                <div class="blog-sidebar">
                    <div class="search-form">
                        <h4>Tìm kiếm</h4>
                        <form action="shop">
                            <input name="search" value="{{request('search')}}" type="text" placeholder="Tìm kiếm sản phẩm ">
                            <button type="submit"> <i class="ti-search"></i></button>
                        </form>
                    </div>
                    <div class="blog-catagory">
                        <h4>Categories</h4>
                        <ul class="filter-catagories">
                            @foreach ($categories as $category)
                                <li><a href="shop/category/{{$category->cate_name}}">{{$category->cate_name}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="recent-post">
                        <h4>Recent Post</h4>
                        <div class="recent-blog">
                            @foreach ($blogs as $blog)
                                <a href="" class="rb-item">
                                    <div class="rb-pic">
                                        <img src="{{$blog->image}}" alt="">
                                    </div>
                                    <div class="rb-text">
                                        <h6>{{$blog->title}}</h6>
                                        <p>{{$blog->category}} <span>-  {{date('M d, Y', strtotime($blog->created_at))}}</span></p>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 order-1 order-lg-2">
                <div class="row">
                    @foreach ($blogs as $blog)
                        <div class="clog-lg-6 col-sm-6">
                            <div class="blog-item">
                                <div class="bi-pic">
                                    <img src="{{$blog->image}}" alt="">
                                </div>
                                <div class="bi-text">
                                    <a href="">
                                        <h4>{{$blog->title}}</h4>
                                    </a>
                                    <p>{{$blog->category}} <span>-  {{date('M d, Y', strtotime($blog->created_at))}}</span></p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
{{-- Blog Section End --}}
@endsection
