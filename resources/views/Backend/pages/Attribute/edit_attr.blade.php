@extends('AdminLayout')
@section('admin_content')
<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-6">
                <h3>Thuộc tính của sản phẩm</h3>
            </div>
            <div class="col-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin')}}"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Thuộc tính sản phẩm</li>
                    <li class="breadcrumb-item active">Sửa thuộc tính sản phẩm</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header pb-0" style="display:flex; justify-content: space-between;">
                      <h3>Sửa thuộc tính Sản Phẩm</h3>
                      <span style=" margin-top: 3px;">
                        @include('Backend.admin.alert')
                      </span>
                    </div>

                    <form class="form theme-form" action="{{route('attribute.update',$attr->id)}}" method="Post">
                        @method('PUT')
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Tên thuộc tính</label>
                                        <div class="col-sm-9">
                                            <input class="form-control " type="text" value="{{$attr->attr_name}}"  name="attr_name">
                                        </div>
                                    </div>
                                    <div class="row value1" >
                                        <label class="col-sm-3 col-form-label pt-0">Giá trị</label>
                                        <div class="col-sm-9">
                                            <input class="form-control " type="text" value="{{$attr->attr_value}}"  name="attr_value">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-end">
                            <div class="col-sm-9 offset-sm-3">
                                <button class="btn btn-primary" type="submit">Cập nhật</button>
                                <a  href="{{route('attribute.index')}}">
                                    <input class="btn btn-light" style="width: 136px;" value="Trở lại">
                                </a>
                            </div>
                        </div>
                    </form>
                  </div>
            </div>
        </div>
    </div>
</div>
@endsection
