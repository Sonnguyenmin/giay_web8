@extends('AdminLayout')
@section('admin_content')
<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-6">
                <h3>Liệt kê Bình luận</h3>
            </div>
            <div class="col-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin')}}"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Chi tiết Bình luận</li>
                    <li class="breadcrumb-item active">Liệt kê chi tiết Bình luận</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
      <!-- Zero Configuration  Starts-->
      <div class="col-sm-12">
        <div class="card">
            <div class="card-header pb-0" style="display:flex; justify-content: space-between;">
                <h3>Chi tiết Bình luận</h3>
                <span style=" margin-top: 3px;">
                    @include('Backend.admin.alert')
              </span>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                <table class="display" id="basic-1">
                    <thead>
                    <tr style="text-align: center">
                        <th style="width: 20px">STT</th>
                        <th>Id Sản phẩm</th>
                        <th>Id KH</th>
                        <th>email KH</th>
                        <th>tên KH</th>
                        <th>Phản hồi KH</th>
                        <th>Đánh giá</th>
                        <th>Thời gian</th>
                    </tr>
                    </thead>
                    <tbody>
                        @php
                            $stt = 1
                        @endphp
                     @foreach ($proComments as $key => $proComment)
                        <tr>
                            <td style="text-align: center ; width: 20px">{{ $stt++ }}</td>
                            <td style="text-align: center">{{ $proComment->product_id}}</td>
                            <td style="text-align: center">{{ $proComment->user_id}}</td>
                            <td style="text-align: center">{{ $proComment->email}}</td>
                            <td style="text-align: center">{{ $proComment->name }}</td>
                            <td style="text-align: center">{{ $proComment->messages}}</td>
                            <td style="text-align: center">{{ $proComment->rating}} <i data-feather="star"></i></td>
                            <td style="text-align: center">{{ $proComment->created_at->format(" d-m-Y")}}</td>
                        </tr>
                     @endforeach
                    </tbody>
                </table>
                </div>
            </div>
        </div>
      </div>
    </div>
</div>
      <!-- Zero Configuration  Ends-->
@endsection
