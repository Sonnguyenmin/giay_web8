@extends('AdminLayout')
@section('admin_content')
<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-6">
                <h3>Liệt kê thuộc tính</h3>
            </div>
            <div class="col-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin')}}"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">thuộc tính sản phẩm</li>
                    <li class="breadcrumb-item active">Liệt kê thuộc tính sản phẩm</li>
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
                <h3>Thuộc tính sản phẩm</h3>
                <span style=" margin-top: 3px;">
                    @include('Backend.admin.alert')
              </span>
            </div>

            <div class="card-body">
                <a href="{{route('attribute.create')}}">
                    <button class="btn btn-primary mb-3" >Thêm thuộc tính</button>
                </a>
                <div class="table-responsive">
                <table class="display" id="basic-1">
                    <thead>
                    <tr style="text-align: center">
                        <th style="width: 20px">STT</th>
                        <th>Tên thuộc tính</th>
                        <th>Giá trị</th>
                        <th style="width: 120px;">Hành động</th>
                    </tr>
                    </thead>
                    <tbody>
                        @php
                            $stt = 1
                        @endphp
                     @foreach ($attr as $key => $a)
                        <tr>
                            <td style="text-align: center ; width: 20px">{{ $stt++ }}</td>
                            <td style="text-align: center">{{$a->attr_name}}</td>
                            <td style="text-align: center; width: 360px;">{{$a->attr_value}}
                            </td>
                            <td>
                                <ul class="action" style="justify-content: center;">
                                    <li class="edit"> <a href="{{route('attribute.edit', $a->id)}}"><i class="icon-pencil-alt"></i></a></li>

                                    <form class="form theme-form" action="{{route('attribute.destroy', $a->id)}}" method="Post">
                                      @method('DELETE')
                                        @csrf
                                            <button class="delete" style="cursor: pointer; border:none"  onclick="return confirm('Bạn có muốn xóa thuộc tính sản phẩm này không ?');"><i class="icon-trash"></i></button>
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
