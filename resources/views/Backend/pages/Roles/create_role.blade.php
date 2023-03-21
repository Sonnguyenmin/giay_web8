@extends('AdminLayout')
@section('admin_content')

<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-6">
                <h3>Danh sách vai trò</h3>
            </div>
            <div class="col-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin')}}"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Danh sách vai trò</li>
                    <li class="breadcrumb-item active">Thêm Danh sách vai trò</li>
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
                        <h3>Thêm Danh sách vai trò</h3>
                        <span style=" margin-top: 3px;">
                              @include('Backend.admin.alert')
                        </span>
                    </div>
                    <form class="form theme-form" action="{{route('roles.store')}}" method="Post">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Tên vai trò</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="text" name="role_name">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-3 col-form-label">Nội dung</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control tinymce_edit" style="resize: none" rows="6" cols="6" name="display_name" placeholder="Nội dung vai trò">{{old('display_name')}}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="container-fluid" style="margin-top: 24px">
                                    <div class="card" >
                                        <div style="border: 1px solid #EFF3F9">
                                            <div class="page-builder">
                                                <div id="myGrid">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div style="background-color: #f7a6f7; display:flex; padding:25px ; border: 1px solid #EFF3F9; border-radius: 10px" >
                                                                <input
                                                                    style="font-size: 20px"
                                                                    class="form-check-input check_all"
                                                                    type="checkbox"
                                                                    >
                                                                <span
                                                                    style="font-size: 16px; margin-left: 6px; position: relative; color: #fffdfd">
                                                                    Chọn tất cả
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @foreach ($permissionParent as $perParentItem)
                                    <div class="container-fluid cart_parent " >
                                        <div class="page-builder" >
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div  style="background-color: #6c88b7; padding: 25px ; display:flex;border: 1px solid #EFF3F9">
                                                        <input
                                                            style="font-size: 20px"
                                                            class="form-check-input check_wrapper"
                                                            type="checkbox"
                                                            value="{{$perParentItem->id}}">
                                                        <span
                                                            style="font-size: 16px; margin-left: 6px; position: relative; ">
                                                            Module {{$perParentItem->per_name}}
                                                        </span>
                                                    </div>
                                                    <div class="card" style="border-top-left-radius: 0px;border-top-right-radius: 0px;">
                                                        <div class="card-body" style="border: 1px solid #EFF3F9">
                                                            <div class="page-builder">
                                                                <div id="myGrid">
                                                                    <div class="row" >
                                                                        @foreach ($perParentItem->permissionChildren as $perChildItem)
                                                                            <div class="col-md-3" >
                                                                                <input style="font-size: 20px"
                                                                                class="form-check-input check_inner"
                                                                                type="checkbox" name="permission_id[]"
                                                                                value="{{$perChildItem->id}}">
                                                                                <span
                                                                                    style="font-size: 16px; margin-right: 6px; position: relative; top: 3px;">
                                                                                    {{$perChildItem->per_name}}
                                                                                </span>
                                                                            </div>
                                                                        @endforeach
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="card-footer text-end">
                            <div class="col-sm-9 offset-sm-3">
                                <button class="btn btn-primary" type="submit">Thêm</button>
                                <a href="{{route('roles.index')}}">
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
