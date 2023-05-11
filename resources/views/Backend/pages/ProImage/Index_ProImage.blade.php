@extends('AdminLayout')
@section('admin_content')
<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-6">
                <h3>Liệt kê chi tiết ảnh sản phẩm</h3>
            </div>
            <div class="col-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin')}}"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Ảnh sản phẩm</li>
                    <li class="breadcrumb-item active">Liệt kê chi tiết ảnh sản phẩm</li>
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
                <h3>Ảnh sản phẩm</h3>
                <span style=" margin-top: 3px;">
                    @include('Backend.admin.alert')
              </span>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                <table class="display" id="basic-1">
                    <thead>
                    <tr style="text-align: center">
                        <th>STT</th>
                        <th>ID</th>
                        <th>ProductName</th>
                        <th>Hình ảnh</th>
                        {{-- <th>Tên hình ảnh</th> --}}
                        <th>Thời gian</th>
                    </tr>
                    </thead>
                    <tbody>
                        @php
                            $stt = 1
                        @endphp
                     @foreach ($proImage as $key => $proImg)
                        <tr >
                            <td style="text-align: center">{{ $stt++ }}</td>
                            <td style="text-align: center">{{$proImg->id }}</td>
                            {{-- <td style="text-align: center">{{$proImg->products->pro_name}}</td> --}}
                            <td style="text-align: center">{{ $proImg->image_name}}</td>
                            <td style="text-align: center">
                                <img src="{{$proImg->image_path}}" alt="" style="width: 100px; height: 100px; border-radius: 6px">
                            </td>
                            <td style="text-align: center">{{$proImg->created_at->format(" d-m-Y")}}</td>
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
