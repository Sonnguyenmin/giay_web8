@extends('AdminLayout')
@section('admin_content')
<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-6">
                <h3>Danh mục sản phẩm</h3>
            </div>
            <div class="col-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin')}}"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Danh mục sản phẩm</li>
                    <li class="breadcrumb-item active">Thêm danh mục sản phẩm</li>
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
                        <h3>Thêm Danh Mục Sản Phẩm</h3>
                        <span style=" margin-top: 3px;">
                              @include('Backend.admin.alert')
                        </span>
                    </div>
                    <form class="form theme-form" action="{{route('category.store')}}" method="Post">
                        @csrf
                      <div class="card-body">
                        <div class="row">
                          <div class="col">
                            <div class="mb-3 row">
                              <label class="col-sm-3 col-form-label">Tên danh mục</label>
                              <div class="col-sm-9">
                                <input class="form-control" id="slug" onkeyup="ChangeToSlug()" type="text" name="cate_name">
                              </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-3 col-form-label">Chọn danh mục cha:</label>
                                <div class="col-sm-9">
                                    <select class="form-select digits" name="parent_id" >
                                        <option value= "0">chọn danh mục cha </option>
                                        {!!$htmlOption!!}
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-3 col-form-label">Slug</label>
                                <div class="col-sm-9">
                                  <input class="form-control"  id="convert_slug" type="text" name="slug">
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-3 col-form-label">Trạng thái</label>
                                <div class="col-sm-9">
                                    <select class="form-select digits" name="cate_status" id="exampleFormControlSelect9">
                                        <option value= "0">Ẩn </option>
                                        <option value="1">Hiển thị</option>
                                    </select>
                                </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="card-footer text-end">
                        <div class="col-sm-9 offset-sm-3">
                            <button class="btn btn-primary" type="submit">Thêm</button>
                            <a href="{{route('category.index')}}">
                                <input class="btn btn-light" style="width: 136px;" value="Xem chi tiết">
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
