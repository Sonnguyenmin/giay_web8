
<div class="product-area bg-white pt-115">
    <div class="container">
        <div class="border-bottom-3 product-pb-80">
            <div class="section-title-2 text-center mb-45">
                <h2><span>Best</span> Seller</h2>
                <p>Top sản phẩm bán chạy nhất của chúng tôi</p>
            </div>
            <div class="tab-btn-wrap mb-40">
                <div class="tab-style-2 nav">
                    <a class="active" href="#product-1" data-bs-toggle="tab">All Products</a>
                </div>
                <div class="btn-style-2">
                    <a class="animated" href="shop.html">Xem tất cả sản phẩm <i class="icon-arrow-right"></i></a>
                </div>
            </div>
            <div class="tab-content jump">
                <div id="product-1" class="tab-pane active">
                    <div class="row">
                        @foreach ($product as $key => $pro)
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="single-product-wrap mb-35">
                                    <div class="product-img product-img-zoom mb-15">
                                        <a href="product-details.html">
                                            <img class="product_image" src="{{config('app.baseUrl') . $pro->feature_image}}" alt="">
                                        </a>
                                        <div class="product-action-2 tooltip-style-2">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                            <button title="Compare"><i class="icon-refresh"></i></button>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-2 text-center">
                                        <h3><a class="product_name" href="product-details.html">{{$pro->pro_name}}</a></h3>
                                        <div class="product-price-2">
                                            <span>{{number_format($pro->pro_price)}}</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-2 product-content-position text-center">
                                        <h3><a class="product_name"  href="product-details.html">{{$pro->pro_name}}</a></h3>
                                        <div class="product-price-2">
                                            <span>{{number_format($pro->pro_price)}}</span>
                                        </div>
                                        <div class="pro-add-to-cart">
                                            <button title="Add to Cart">Thêm giỏ hàng</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
