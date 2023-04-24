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
              <li class="breadcrumb-item"><a href=""><i data-feather="home"></i></a></li>
              <li class="breadcrumb-item">Trang chủ</li>
            </ol>
        </div>
      </div>
    </div>
  </div>
  <!-- Container-fluid starts-->
  <div class="container-fluid default-page">
    <div class="row">
        <div class="col-12">
            <div class="card profile-greeting">
            <div class="card-body">
                <div>
                    <h1>Chào mừng Đến với trang Admin</h1>
                    <p> Trang quản trị quả lý mọi thông tin tại website bán giày sneaker Norda</p><a class="btn" href="">Tiếp tục<i data-feather="arrow-right"></i></a>
                    </div>
                    <div class="greeting-img"><img class="img-fluid" src="{{asset('Backend/assets/images/dashboard/profile-greeting/bg.png')}}" alt=""></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid Ends-->
@stop()
