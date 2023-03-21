@extends('AdminLayout')
@section('admin_content')

<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-6">
                <h3>Slide</h3>
            </div>
            <div class="col-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin')}}"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Slide</li>
                    <li class="breadcrumb-item active">Sửa Slide</li>
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
                        <h3>Sửa Slide</h3>
                        <span style=" margin-top: 3px;">
                              @include('Backend.admin.alert')
                        </span>
                    </div>
                    <form class="form theme-form" action="{{route('slide.update',$slide->id)}}" method="Post" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Tên Slide</label>
                                        <div class="col-sm-9">
                                            <input class="form-control"
                                            type="text"
                                            id="slug"
                                            onkeyup="ChangeToSlug()"
                                            name="slide_name"
                                            value="{{$slide->slide_name}}">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Hình ảnh</label>
                                        <div class="col-sm-9">
                                            <input class="form-control"  type="file"  name="image_path">
                                        </div>
                                        <label class="col-sm-3 col-form-label"></label>
                                        <div class="col-sm-9">
                                            <img src="{{$slide->image_path}}" alt="" style="width: 200px; height:100px; border-radius: 5px; margin-top: 10px">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-3 col-form-label">Nội dung</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control tinymce_edit"
                                            style="resize: none"
                                            rows="6"
                                            cols="6"
                                            name="slide_desc">{{$slide->slide_desc}}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-end">
                            <div class="col-sm-9 offset-sm-3">
                                <button class="btn btn-primary" type="submit">Cập nhật</button>
                                <a href="{{route('slide.index')}}">
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
