@extends('AdminLayout')
@section('admin_content')
<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-6">
                <h3>Liệt kê Setting</h3>
            </div>
            <div class="col-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin')}}"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Setting</li>
                    <li class="breadcrumb-item active">Liệt kê Setting</li>
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
                <h3>Setting</h3>
                <span style=" margin-top: 3px;">
                    @include('Backend.admin.alert')
              </span>
            </div>

            <div class="card-body">
                <div class="btn-group" role="group" style="margin-bottom: 16px">
                    <button class="btn btn-primary dropdown-toggle" id="btnGroupDrop1" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Thêm Setting</button>
                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                        <a class="dropdown-item" href="{{route('setting.create') .'?type=Text'}}" style="color: #55adf4">Text</a>
                        <a class="dropdown-item" href="{{route('setting.create') .'?type=Textarea'}}" style="color: #cb21ff">Textarea</a>
                    </div>
                  </div>
                <div class="table-responsive">
                <table class="display" id="basic-1">
                    <thead>
                    <tr style="text-align: center">
                        <th style="width: 20px">STT</th>
                        <th>Config_key</th>
                        <th>Config_value</th>
                        <th>Type</th>
                        <th>Thời gian</th>
                        <th style="width: 120px;">Hành động</th>
                    </tr>
                    </thead>
                    <tbody>
                        @php
                            $stt = 1
                        @endphp
                     @foreach ($setting as $key => $set)
                        <tr>
                            <td style="text-align: center ; width: 20px">{{ $stt++ }}</td>
                            <td style="text-align: center">{{$set->config_key}}</td>
                            <td style="text-align: center">{{$set->config_value}}</td>
                            <td style="text-align: center">{{$set->type}}</td>
                            <td style="text-align: center">{{$set->created_at->format("d-m-Y")}}</td>
                            <td>
                            <ul class="action" style="justify-content: center;">
                                <li class="edit"> <a href="{{route('setting.edit', $set->id) .'?type='. $set->type}}"><i class="icon-pencil-alt"></i></a></li>

                                <form class="form theme-form" action="{{route('setting.destroy',$set->id)}}" method="Post">
                                  @method('DELETE')
                                    @csrf
                                        <button class="delete" style="cursor: pointer; border:none"  onclick="return confirm('Bạn có muốn xóa Setting này không ?');"><i class="icon-trash"></i></button>
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
