@extends('AdminLayout')
@section('admin_content')
<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-6">
                <h3>Liệt kê danh mục sản phẩm</h3>
            </div>
            <div class="col-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin')}}"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Danh mục sản phẩm</li>
                    <li class="breadcrumb-item active">Liệt kê danh mục sản phẩm</li>
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
                <h3>Danh mục sản phẩm</h3>
                <span style=" margin-top: 3px;">
                    @include('Backend.admin.alert')
              </span>
            </div>

            <div class="card-body">
                <a href="{{route('category.create')}}">
                    <button class="btn btn-primary mb-3" >Thêm danh mục</button>
                </a>
                <div class="table-responsive">
                <table class="display" id="basic-1">
                    <thead>
                    <tr style="text-align: center">
                        <th style="width: 20px">STT</th>
                        <th>ID</th>
                        <th>Tên danh mục</th>
                        <th>Lớp danh mục </th>
                        <th>Slug</th>
                        <th>Trạng thái</th>
                        <th>Thời gian</th>
                        <th style="width: 120px;">Hành động</th>
                    </tr>
                    </thead>
                    <tbody>
                        @php
                            $stt = 1
                        @endphp
                     @foreach ($category as $key => $cate)
                        <tr>
                            <td style="text-align: center ; width: 20px">{{ $stt++ }}</td>
                            <td style="text-align: center">{{$cate->id}}</td>
                            <td style="text-align: center">{{$cate->cate_name}}</td>
                            <td style="text-align: center">{{$cate->parent_id}} </td>
                            <td style="text-align: center">{{$cate->slug}}</td>
                            <td style="text-align: center;width: 120px;">
                                @if($cate->cate_status == 0)
                                    <span style="font-size: 13px" class="badge badge-light-danger">Ẩn đi</span>
                                @else
                                    <span style="font-size: 13px" class="badge badge-light-success">Hiện lên</span>
                                @endif
                            </td>
                            <td style="text-align: center">{{$cate->created_at->format("H:i:s d-m-Y")}}</td>
                            <td>
                            <ul class="action" style="justify-content: center;">
                                <li class="edit"> <a href="{{route('category.edit',$cate->id)}}"><i class="icon-pencil-alt"></i></a></li>

                                <form class="form theme-form" action="{{route('category.destroy',$cate->id)}}" method="Post">
                                  @method('DELETE')
                                    @csrf
                                        <button class="delete" style="cursor: pointer; border:none"  onclick="return confirm('Bạn có muốn xóa danh mục sản phẩm này không ?');"><i class="icon-trash"></i></button>
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
