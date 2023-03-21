@extends('AdminLayout')
@section('admin_content')

<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-6">
                <h3>Users</h3>
            </div>
            <div class="col-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin')}}"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Users</li>
                    <li class="breadcrumb-item active">Thêm User</li>
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
                        <h3>Thêm User</h3>
                        <span style=" margin-top: 3px;">
                              @include('Backend.admin.alert')
                        </span>
                    </div>
                    <form class="form theme-form" action="{{route('users.store')}}" method="Post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Tên </label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="text" value="{{old('name')}}" name="name" placeholder="Nhập tên thành viên">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">email</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="text" value="{{old('email')}}" name="email" placeholder="Nhập email">
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Password</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" type="password"  name="password" placeholder="Nhập password">
                                            </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-3 col-form-label">Chọn vai trò:</label>
                                        <div class="col-sm-9">
                                            <select class="form-select digits selectRole" name="role_id[]" multiple="multiple">
                                                <option value= ""></option>
                                                @foreach ($roles as $role)
                                                    <option value="{{$role->id}}">{{$role->role_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-end">
                            <div class="col-sm-9 offset-sm-3">
                                <button class="btn btn-primary" type="submit">Thêm</button>
                                <a href="{{route('users.index')}}">
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
