@extends('AdminLayout')
@section('admin_content')

<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-6">
                <h3>Tin tức</h3>
            </div>
            <div class="col-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin')}}"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Tin tức</li>
                    <li class="breadcrumb-item active">Sửa Tin tức</li>
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
                        <h3>Sửa Tin tức</h3>
                        <span style=" margin-top: 3px;">
                              @include('Backend.admin.alert')
                        </span>
                    </div>
                    <form class="form theme-form" action="{{route('blogs.update',$blogs->id)}}" method="Post" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Tiêu đề Tin tức</label>
                                        <div class="col-sm-9">
                                            <input class="form-control"
                                            type="text"
                                            name="title"
                                            value="{{$blogs->title}}">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Phụ đề Tin tức</label>
                                        <div class="col-sm-9">
                                            <input class="form-control"
                                            type="text"
                                            name="subtitle"
                                            value="{{$blogs->subtitle}}">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Hình ảnh</label>
                                        <div class="col-sm-9">
                                            <input class="form-control"  type="file"  name="blog_path">
                                        </div>
                                        <label class="col-sm-3 col-form-label"></label>
                                        <div class="col-sm-9">
                                            <img src="{{$blogs->blog_path}}" alt="" style="width: 200px; height:100px; border-radius: 5px; margin-top: 10px">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Danh mục</label>
                                            <div class="col-sm-9">
                                                <input class="form-control"
                                                type="text"
                                                name="category"
                                                value="{{$blogs->category}}">
                                            </div>
                                        </div>
                                    <div class="row">
                                        <label class="col-sm-3 col-form-label">Nội dung</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control tinymce_edit"
                                            style="resize: none"
                                            rows="6"
                                            cols="6"
                                            name="content">{{$blogs->content}}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-end">
                            <div class="col-sm-9 offset-sm-3">
                                <button class="btn btn-primary" type="submit">Cập nhật</button>
                                <a href="{{route('blogs.index')}}">
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
