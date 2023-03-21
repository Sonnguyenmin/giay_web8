@extends('AdminLayout')
@section('admin_content')
<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-6">
                <h3>thương hiệu sản phẩm</h3>
            </div>
            <div class="col-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin')}}"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">thương hiệu sản phẩm</li>
                    <li class="breadcrumb-item active">Sửa thương hiệu sản phẩm</li>
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
                      <h3>Sửa thương hiệu Sản Phẩm</h3>
                      <span style=" margin-top: 3px;">
                        @include('Backend.admin.alert')
                      </span>
                    </div>
                        <form class="form theme-form" action="{{route('brand.update',$brand->id)}}" method="Post">
                            @method('PUT')
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                <div class="col">
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Tên thương hiệu</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" value="{{$brand->brand_name}}" id="slug" onkeyup="ChangeToSlug()" type="text" name="brand_name">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Slug</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" value="{{$brand->slug}}"  id="convert_slug" type="text" name="slug">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <label class="col-sm-3 col-form-label">Trạng thái</label>
                                        <div class="col-sm-9">
                                            <select class="form-select digits" name="brand_status" id="exampleFormControlSelect9">
                                                @if($brand->brand_status == 1)
                                                    <option value= "0">Ẩn </option>
                                                    <option value="1" selected>Hiển thị</option>
                                                @else
                                                    <option value= "0" selected >Ẩn </option>
                                                    <option value="1">Hiển thị</option>
                                                @endif
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="card-footer text-end">
                                <div class="col-sm-9 offset-sm-3">
                                <button class="btn btn-primary"  type="submit">Cập nhật</button>
                                <a href="{{route('brand.index')}}">
                                    <input class="btn btn-light" style="width: 136px; cursor: pointer;" value="Trở lại">
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
