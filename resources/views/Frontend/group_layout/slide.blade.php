@php
    $baseUrl = config('app.baseUrl');
@endphp
<div class="slider-area " style="background-color: rgba(153, 153, 153, 0.2); padding:0 0 30px 0">
    <div class="hero-slider-active-1 hero-slider-pt-1 nav-style-1 dot-style-1" style="padding-top:0">
        @foreach($slide as $key => $sl)
            <div class="single-hero-slider single-animation-wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="hero-slider-content-1 hero-slider-content-1-pt-1 slider-animated-1" style="padding-top: 50px">
                                <h3 class="animated">{{$sl->slide_name}}</h3>

                                <p class="animated" >{{$sl->slide_desc}}</p>
                                <div class="btn-style-1">
                                    <a class="animated btn-1-padding-1" href="">Xem ngay</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="hero-slider-img-1 slider-animated-1">
                                <img class="animated" src="{{$baseUrl . $sl->image_path}}" alt="" >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
