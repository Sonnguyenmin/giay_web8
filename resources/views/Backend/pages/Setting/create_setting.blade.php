@extends('AdminLayout')
@section('admin_content')
<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-6">
                <h3>Setting</h3>
            </div>
            <div class="col-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin')}}"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Setting</li>
                    <li class="breadcrumb-item active">Thêm Setting</li>
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
                        <h3>Thêm Setting</h3>
                        <span style=" margin-top: 3px;">
                              @include('Backend.admin.alert')
                        </span>
                    </div>
                    <form class="form theme-form" action="{{route('setting.store') .'?type='.request()->type}}" method="Post">
                        @csrf
                      <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Config_key</label>
                                    <div class="col-sm-9">
                                        <input class="form-control"  type="text" name="config_key">
                                    </div>
                                </div>
                                @if (request()->type === 'Text')
                                    <div class="row">
                                        <label class="col-sm-3 col-form-label">Config_value</label>
                                        <div class="col-sm-9">
                                            <input class="form-control"  type="text" name="config_value">
                                        </div>
                                    </div>
                                @elseif (request()->type === 'Textarea')
                                    <div class="row">
                                        <label class="col-sm-3 col-form-label">Config_value</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control tinymce_edit" style="resize: none" rows="6" cols="6" name="config_value" placeholder="Nội dung setting"></textarea>
                                        </div>
                                    </div>
                                    @endif
                            </div>
                        </div>
                      </div>
                      <div class="card-footer text-end">
                        <div class="col-sm-9 offset-sm-3">
                            <button class="btn btn-primary" type="submit">Thêm</button>
                            <a href="{{route('setting.index')}}">
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
