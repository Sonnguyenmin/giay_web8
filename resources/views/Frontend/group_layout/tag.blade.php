<div class="product-area pb-110">
    <div class="container">
        <div class="section-title-tab-wrap border-bottom-3 mb-30 pb-15">
            <div class="section-title-3">
            </div>
            <div class="tab-style-3 nav">
                @foreach ($category as $key => $cateItem)
                    <a class="{{$key == 0 ? 'active' : ''}}" href="#brand_tab_{{$cateItem->id}}" data-bs-toggle="tab">{{$cateItem->cate_name}}</a>
                @endforeach

            </div>
        </div>
        <div class="tab-content jump">
            @foreach ($category as $keycate => $cateItemPro)
                <div id="brand_tab_{{$cateItemPro->id}}" class="tab-pane {{$keycate == 0 ? 'active' : ''}}">
                    <div class="product-slider-active-2 dot-style-2 dot-style-2-position-static dot-style-2-mrg-2 dot-style-2-active-black">
                        @foreach ($cateItemPro->products as $ProItemTag)
                            <div class="product-plr-2">
                                <div class="single-product-wrap-2 mb-25">
                                    <div class="product-img-2">
                                        <a href="product-details.html">
                                            <img class="pro_img" src="{{config('app.baseUrl') .$ProItemTag->feature_image}}" alt="">
                                        </a>
                                    </div>
                                    <div class="product-content-3">
                                        <span>{{$ProItemTag->category->cate_name}}</span>
                                        <h4><a  class="product_name" href="product-details.html">{{$ProItemTag->pro_name}}</a></h4>

                                        <div class="pro-price-action-wrap">
                                            <div class="product-price-3">
                                                <span>{{number_format($ProItemTag->pro_price)}} vnđ</span>
                                            </div>
                                            <div class="product-action-3">
                                                <button title="Wishlist"><i class="icon-heart"></i></button>
                                                <button title="Compare"><i class="icon-basket-loaded"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
