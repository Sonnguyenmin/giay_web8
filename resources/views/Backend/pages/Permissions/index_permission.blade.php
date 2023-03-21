@extends('AdminLayout')
@section('admin_content')
<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-6">
                <h3>Danh sách dữ liệu Permission</h3>
            </div>
            <div class="col-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin')}}"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Danh sách dữ liệu </li>
                    <li class="breadcrumb-item active">Liệt kê Danh sách dữ liệu</li>
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
                <h3>Sản phẩm</h3>
                <span style=" margin-top: 3px;">
                    @include('Backend.admin.alert')
              </span>
            </div>

            <div class="card-body">
                <a href="{{route('permission.create')}}">
                    <button class="btn btn-primary mb-3" >Thêm Permission</button>
                </a>
                <div class="table-responsive">
                <table class="display" id="basic-1">
                    <thead>
                    <tr style="text-align: center">
                        <th style="width: 20px">STT</th>
                        <th>Tên permission</th>
                        <th>Nội dung</th>
                        <th>Parent_id</th>
                        <th>Key_code</th>
                        {{-- <th>Thời gian</th> --}}
                    </tr>
                    </thead>
                    <tbody>
                        @php
                            $stt = 1
                        @endphp
                     @foreach ($permission as $key => $perItem)
                        <tr>
                            <td style="text-align: center ; width: 20px">{{ $stt++ }}</td>
                            <td style="text-align: center">{{$perItem->per_name}}</td>
                            <td style="text-align: center">{{$perItem->display_name}}</td>
                            <td style="text-align: center; width: 300px">{{$perItem->parent_id}} </td>
                            <td style="text-align: center">{{$perItem->key_code}}</td>
                            {{-- <td style="text-align: center">{{$perItem->created_at->format(" d-m-Y")}}</td> --}}
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
