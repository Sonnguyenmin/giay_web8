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
                    <li class="breadcrumb-item">Danh sách dữ liệu</li>
                    <li class="breadcrumb-item active">Thêm Danh sách dữ liệu</li>
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
                        <h3>Thêm Danh sách dữ liệu</h3>
                        <span style=" margin-top: 3px;">
                              @include('Backend.admin.alert')
                        </span>
                    </div>
                    <form class="form theme-form" action="{{route('permission.store')}}" method="Post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Chọn tên mudule:</label>
                                        <div class="col-sm-9">
                                            <select class="form-select digits select_2" name="module_parent" >
                                                <option value="">Chọn tên module</option>
                                                @foreach (config('permission.table_module') as $Item)
                                                    <option value= "{{$Item}}">{{$Item}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="container-fluid">
                                    <div class="page-builder" >
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="card" style="border-top-left-radius: 0px;border-top-right-radius: 0px;">
                                                    <div class="card-body" style="border: 1px solid #EFF3F9">
                                                        <div class="page-builder">
                                                            <div id="myGrid">
                                                                <div class="row" >

                                                                    @foreach (config('permission.module_inner') as $ItemInner)
                                                                        <div class="col-md-3" >
                                                                            <input style="font-size: 20px"
                                                                            class="form-check-input"
                                                                            type="checkbox" name="module_inner[]" value="{{$ItemInner}}">
                                                                            <span
                                                                                style="font-size: 16px; margin-right: 6px; position: relative; top: 3px;">
                                                                                {{$ItemInner}}
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
                            </div>
                        </div>
                        <div class="card-footer text-end">
                            <div class="col-sm-9 offset-sm-3">
                                <button class="btn btn-primary" type="submit">Thêm</button>
                                <a href="{{route('permission.index')}}">
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
