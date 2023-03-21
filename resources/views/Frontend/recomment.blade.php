
<div class="product-area pb-110">
    <div class="container">
        <div class="section-title-tab-wrap border-bottom-5 align-items-inherit mb-50">
            <div class="section-title-3">
                <h2>Sản phẩm được đề xuất</h2>
            </div>
            <div class="tab-style-4 nav">
                <a class="active" href="#product-6" data-bs-toggle="tab">Top 10</a>
                <a href="#product-7" data-bs-toggle="tab"> Women </a>
                <a href="#product-8" data-bs-toggle="tab">Men </a>
                <a href="#product-9" data-bs-toggle="tab"> Shoes</a>
                <a href="#product-10" data-bs-toggle="tab">Accessories</a>
            </div>
        </div>
        <div class="tab-content jump">
            <div id="product-6" class="tab-pane active">
                <div class="product-slider-active-3 nav-style-3">
                    @foreach ($pro_view as $key => $pro_viewItem)
                    <div class="product-plr-1">
                        <div class="single-product-wrap">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="">
                                    <img class="product_img" src="{{config('baseUrl') . $pro_viewItem->feature_image}}" alt="" >
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-3">
                                <div class="product-content-categories">
                                    <a href="shop.html">Men</a>
                                </div>
                                <h3><a class="product_name" href="product-details.html"
                                    >{{$pro_viewItem->pro_name}}</a></h3>

                                <div class="product-price-4">
                                    <span class="new-price">{{number_format($pro_viewItem->pro_price)}}vnđ</span>

                                </div>
                            </div>
                            <div class="product-content-wrap-3 product-content-position-2">
                                <div class="product-content-categories">
                                    <a href="shop.html">Men</a>
                                </div>
                                <h3><a href="product-details.html">{{$pro_viewItem->pro_name}}</a></h3>

                                <div class="product-price-4">
                                    <span class="new-price">{{number_format($pro_viewItem->pro_price)}}vnđ </span>
                                </div>
                                <div class="pro-add-to-cart-2">
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
