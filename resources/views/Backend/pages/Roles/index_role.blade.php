@extends('AdminLayout')
@section('admin_content')
<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-6">
                <h3>Liệt kê danh sách vai trò </h3>
            </div>
            <div class="col-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin')}}"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Danh sách vai trò</li>
                    <li class="breadcrumb-item active">Liệt kê danh sách vai trò</li>
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
                <h3>Danh sách vai trò</h3>
                <span style=" margin-top: 3px;">
                    @include('Backend.admin.alert')
              </span>
            </div>

            <div class="card-body">
                <a href="{{route('roles.create')}}">
                    <button class="btn btn-primary mb-3" >Thêm danh sách vai trò</button>
                </a>
                <div class="table-responsive">
                <table class="display" id="basic-1">
                    <thead>
                    <tr style="text-align: center">
                        <th style="width: 20px">STT</th>
                        <th>Tên vai trò</th>
                        <th>Nội dung</th>
                        <th style="width: 120px;">Hành động</th>
                    </tr>
                    </thead>
                    <tbody>
                        @php
                            $stt = 1
                        @endphp
                     @foreach ($role as $key => $ro)
                        <tr>
                            <td style="text-align: center ; width: 20px">{{ $stt++ }}</td>
                            <td style="text-align: center">{{$ro->role_name}}</td>
                            <td style="text-align: center">{{$ro->display_name}}</td>
                            <td>
                                <ul class="action" style="justify-content: center;">
                                    <li class="edit"> <a href="{{route('roles.edit',$ro->id)}}"><i class="icon-pencil-alt"></i></a></li>
                                    <form class="form theme-form" action="{{route('roles.destroy',$ro->id)}}" method="Post">
                                    @method('DELETE')
                                        @csrf
                                            <button class="delete" style="cursor: pointer; border:none"  onclick="return confirm('Bạn có muốn xóa vai trò này không ?');"><i class="icon-trash"></i></button>
                                    </form>
                                </ul>
                            </td>
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
