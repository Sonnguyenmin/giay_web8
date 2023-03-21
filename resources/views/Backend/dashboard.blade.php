@extends('AdminLayout')
@section('admin_content')
<div class="container-fluid">
    <div class="page-title">
      <div class="row">
        <div class="col-6">
            <h3>Chào mừng đến với trang quản trị NORDA</h3>
        </div>
        <div class="col-6">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="">                                       <i data-feather="home"></i></a></li>
              <li class="breadcrumb-item">Trang chủ</li>
            </ol>
        </div>
      </div>
    </div>
  </div>
  <!-- Container-fluid starts-->
  <div class="container-fluid default-page">
    <div class="row">
        <div class="col-xl-5 col-lg-5">
            <div class="card profile-greeting">
            <div class="card-body">
                <div>
                    <h1>Chào mừng Đến với trang Admin</h1>
                    <p> Bạn đã hoàn thành 40% công việc trong tuần này! Bắt đầu một mục tiêu mới và cải thiện kết quả của bạn</p><a class="btn" href="user-profile.html">Tiếp tục<i data-feather="arrow-right"></i></a>
                    </div>
                    <div class="greeting-img"><img class="img-fluid" src="{{asset('Backend/assets/images/dashboard/profile-greeting/bg.png')}}" alt=""></div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6 col-lg-3">
            <div class="card yearly-view">
                <div class="card-header pb-0">
                    <h3>Tổng quan hàng năm<span class="badge badge-primary">50/100</span></h3>
                    <h5 class="mb-0">thứ hai</h5>
                </div>
                <div class="card-body p-0">
                    <div class="yearly-view" id="yearly-view"></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 col-lg-4">
            <div class="card activity-review">
                <div class="card-header pb-0">
                    <h3> Hoạt động </h3>
                    <div class="card-header-right">
                        <ul class="list-unstyled card-option">
                            <li>
                            <div><i class="icon-settings"></i></div>
                            </li>
                            <li><i class="view-html fa fa-code"></i></li>
                            <li><i class="icofont icofont-maximize full-card"></i></li>
                            <li><i class="icofont icofont-minus minimize-card"></i></li>
                            <li><i class="icofont icofont-refresh reload-card"></i></li>
                            <li><i class="icofont icofont-error close-card"></i></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                    <table class="table table-bordernone">
                        <tbody>
                        <tr>
                            <td>
                            <div class="d-flex">                             <img class="img-fluid" src="{{asset('Backend/assets/images/dashboard/activity/1.jpg')}}" alt="">
                                <div class="flex-grow-1"><a href="to-do.html">
                                    <h5>Xem xét yêu cầu jim Smith</h5></a>
                                <p>ngày 03 tháng 1 năm 19 12:25 chiều tại Tame</p>
                                </div>
                                <div class="time-badge">
                                <p>14 phút trước  </p>
                                </div>
                            </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <div class="d-flex"><img class="img-fluid" src="{{asset('Backend/assets/images/dashboard/activity/2.jpg')}}" alt="">
                                <div class="flex-grow-1"> <a href="to-do.html">
                                    <h5>Đã thêm liên hệ mới</h5></a>
                                <p>ngày 02 tháng 1 năm 19 03:10 chiều tại Fresno</p>
                                </div>
                                <div class="time-badge">
                                <p>22 phút trước  </p>
                                </div>
                            </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <div class="d-flex"> <img class="img-fluid" src="{{asset('Backend/assets/images/dashboard/activity/3.jpg')}}" alt="">
                                <div class="flex-grow-1"> <a href="to-do.html">
                                    <h5>Đã gửi đánh giá (504)236-7302</h5></a>
                                <p>02/01/19 07:35 chiều tại Iris</p>
                                </div>
                                <div class="time-badge">
                                <p>30 phút trước  </p>
                                </div>
                            </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    </div>
                    <div class="code-box-copy">
                    <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#activity-view" title="" data-bs-original-title="Copy" aria-label="Copy"><i class="icofont icofont-copy-alt"></i></button>
                    <pre><code class="language-html" id="activity-view">&lt;div class="card activity-review"&gt;
                        &lt;div class="card-header pb-0"&gt;
                        &lt;h3&gt; Activity &lt;/h3&gt;
                            &lt;div class="card-header-right"&gt;
                                &lt;ul class="list-unstyled card-option"&gt;
                                    &lt;li&gt;
                                        &lt;div&gt;&lt;i class="icon-settings"&gt;&lt;/i&gt;&lt;/div&gt;
                                    &lt;/li&gt;
                                    &lt;li&gt;&lt;i class="view-html fa fa-code"&gt;&lt;/i&gt;&lt;/li&gt;
                                    &lt;li&gt;&lt;i class="icofont icofont-maximize full-card"&gt;&lt;/i&gt;&lt;/li&gt;
                                    &lt;li&gt;&lt;i class="icofont icofont-minus minimize-card"&gt;&lt;/i&gt;&lt;/li&gt;
                                    &lt;li&gt;&lt;i class="icofont icofont-refresh reload-card"&gt;&lt;/i&gt;&lt;/li&gt;
                                    &lt;li&gt;&lt;i class="icofont icofont-error close-card"&gt;&lt;/i&gt;&lt;/li&gt;
                                &lt;/ul&gt;
                                &lt;/div&gt;
                            &lt;/div&gt;
                            &lt;div class="card-body"&gt;
                            &lt;div class="table-responsive"&gt;
                                &lt;table class="table table-bordernone"&gt;
                                    &lt;tbody&gt;
                                        &lt;tr&gt;
                                            &lt;td&gt;
                                                &lt;div class="d-flex"&gt;
                                                    &lt;img class="img-fluid" src="{{asset('Backend/assets/images/dashboard/activity/1.jpg')}}" alt="" /&gt;
                                                &lt;div class="flex-grow-1"&gt;
                                                &lt;h5&gt;Xem lại yêu cầu j im Smith&lt;/h5&gt;
                                                &lt;p&gt;03/01/2019 12:25 chiều tại Temecula&lt;/p&gt;
                                                &lt;/div&gt;
                                            &lt;/div&gt;
                                            &lt;/td&gt;
                                        &lt;/tr&gt;
                                        &lt;tr&gt;
                                            &lt;td&gt;
                                                &lt;div class="d-flex"&gt;&lt;img class="img-fluid" src="{{asset('Backend/assets/images/dashboard/activity/2.jpg')}}" alt="" /&gt;
                                                    &lt;div class="flex-grow-1"&gt;
                                                    &lt;h5&gt;Liên hệ mới đã thêm tin nhắn&lt;/h5&gt;
                                                    &lt;p&gt;ngày 02 tháng 1 năm 2019 03:10 chiều tại Fresno&lt;/p&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;
                                            &lt;/td&gt;
                                        &lt;/tr&gt;
                                        &lt;tr&gt;
                                            &lt;td&gt;
                                                &lt;div class="d-flex"&gt;
                                                    &lt;img class="img-fluid" src="{{asset('Backend/assets/images/dashboard/activity/1.jpg')}}" alt="" /&gt;
                                                    &lt;div class="flex-grow-1"&gt;
                                                        &lt;h5&gt;Đã gửi đánh giá (504)236-7302&lt;/h5&gt;
                                                        &lt;p&gt;ngày 02 tháng 1 năm 2019 03:10 chiều tại Fresno&lt;/p&gt;
                                                    &lt;/div&gt;
                                                    &lt;/div&gt;
                                            &lt;/td&gt;
                                        &lt;/tr&gt;
                                        &lt;/tbody&gt;
                                    &lt;/table&gt;
                                    &lt;/div&gt;
                                &lt;/div&gt;
                            &lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        <div class="col-xl-6 col-lg-6">
            <div class="row">
            <div class="col-xl-12 col-sm-6 col-lg-12">
                <div class="card value-chart bg-primary">
                <div class="card-body">
                    <div class="row">
                    <div class="col-6">
                        <div class="round-progress knob-block text-center">
                        <div class="progress-circle">
                            <input class="knob1" data-width="10" data-height="70" data-thickness=".3" data-angleoffset="0" data-linecap="round" data-fgcolor="#534686" data-bgcolor="#C4C4C4" value="62">
                        </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="valuechart-detail">
                        <div>
                            <p>Giá trị bán hàng của chúng tôi         </p>
                            <h2>2.199.000.000đ</h2>
                        </div>
                        </div>
                    </div>
                    </div>
                </div><span class="badge badge-primary">Mới</span>
                </div>
            </div>
            <div class="col-xl-12 col-sm-6 col-lg-12">
                <div class="card value-chart stock-value bg-secondary">
                <div class="card-body">
                    <div class="row">
                    <div class="col-6">
                        <div class="stock-value" id="stock-value"></div>
                    </div>
                    <div class="col-6">
                        <div class="valuechart-detail">
                        <div>
                            <p>Giá trị hôm nay</p>
                            <h2>300.000.000đ</h2>
                        </div>
                        </div>
                    </div>
                    </div>
                </div><span class="badge badge-primary">Hot</span>
                </div>
            </div>
            </div>
        </div>
        <div class="col-xl-6 col-lg-6">
            <div class="beyo-line row">
            <div class="beyoline-header col-xl-12">
                <div id="beyo-line"></div>
            </div>
            <div class="beyo-detail col-xl-12">
                <h3>Ngoài Dòng <span class="badge badge-primary">6 giờ trước</span></h3>
                <p>Một trong những ngôi sao lướt sóng trẻ, sáng giá nhất thế giới, Kanoa igarashi.</p>
                <div class="date-history">
                <ul>
                    <li><img class="img-fluid" src="{{asset('Backend/assets/images/dashboard/beyo-line/1.png')}}" alt=""></li>
                    <li><img class="img-fluid" src="{{asset('Backend/assets/images/dashboard/beyo-line/2.png')}}" alt=""></li>
                    <li><img class="img-fluid" src="{{asset('Backend/assets/images/dashboard/beyo-line/3.png')}}" alt=""></li>
                    <li><img class="img-fluid" src="{{asset('Backend/assets/images/dashboard/beyo-line/4.png')}}" alt=""></li>
                    <li>
                    <h2>+ 350</h2>
                    </li>
                </ul>
                <div class="date-lable">
                    <h3>10</h3>
                    <p>june</p>
                </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid Ends-->
@stop()
