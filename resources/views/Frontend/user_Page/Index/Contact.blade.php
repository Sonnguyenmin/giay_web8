@extends('welcome')
@section('content')
 <!-- Breacrumb Section Begin -->
 <div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <a href="index.html"><i class="fa fa-home"></i> Trang Chủ</a>
                    <a href="shop.html">shop</a>
                    <span>Liên hệ</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breacrumb Section End -->

{{-- Map Section Begin --}}
<div class="map spad">
    <div class="container">
        <div class="map-inner">
            <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d6045.018459477291!2d105.92713848749594!3d20.931516155205763!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMjDCsDU1JzUwLjQiTiAxMDXCsDU1JzQ0LjAiRQ!5e0!3m2!1svi!2s!4v1681305047869!5m2!1svi!2s"
                height="610" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
            </iframe>
            <div class="icon">
                <i class="fa fa-map-marker"></i>
            </div>
        </div>
    </div>
</div>
{{-- Map Section End --}}

{{-- Contact Section Begin  --}}
<section class="contact-section spad">
    <section class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="contact-title">
                    <h4>
                        Liên hệ chúng tôi
                    </h4>
                    <p>

                    </p>
                </div>
                <div class="contact-widget">
                    <div class="cw-item">
                        <div class="ci-icon">
                            <i class="ti-location-pin"></i>
                        </div>
                        <div class="ci-text">
                            <span>Địa chỉ:</span>
                            <p>Thôn Công luận 2, Thị Trấn Văn Giang, Văn Giang, Hưng Yên</p>
                        </div>
                    </div>
                    <div class="cw-item">
                        <div class="ci-icon">
                            <i class="ti-mobile"></i>
                        </div>
                        <div class="ci-text">
                            <span>Số điện thoại:</span>
                            <p>035 309 0212</p>
                        </div>
                    </div>
                    <div class="cw-item">
                        <div class="ci-icon">
                            <i class="ti-email"></i>
                        </div>
                        <div class="ci-text">
                            <span>Email:</span>
                            <p>nguyentruongson1842001@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 offset-lg-1">
                <div class="contact-form">
                    <div class="leave-comment">
                        <div style="display:flex; justify-content: space-between;">
                            <h4>Để lại bình luận</h4>
                            <span>
                                @include('Backend.admin.alert')
                            </span>
                        </div>
                        <p>Gửi thông tin bình luận của bạn với chúng tôi</p>
                        <form action="" class="comment-form" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="text" name="name" placeholder="Tên của bạn">
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" name="phone" placeholder="Số điện thoại">
                                </div>
                                <div class="col-lg-12">
                                    <input type="text" name="email" placeholder="Email của bạn">
                                </div>
                                <div class="col-lg-12">
                                    <textarea name="content" id="" placeholder="TIn nhắn của bạn"></textarea>
                                    <button type="submit" class="site-btn">Gửi Tin nhắn</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>
{{-- Contact Section End  --}}
@stop
