@extends('AdminLayout')
@section('admin_content')
<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-6">
                <h3>Liệt kê sản phẩm</h3>
            </div>
            <div class="col-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin')}}"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">sản phẩm</li>
                    <li class="breadcrumb-item active">Liệt kê sản phẩm</li>
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
                <h3>Sản phẩm</h3>
                <span style=" margin-top: 3px;">
                    @include('Backend.admin.alert')
              </span>
            </div>

            <div class="card-body">
                <a href="{{route('product.create')}}">
                    <button class="btn btn-primary mb-3" >Thêm sản phẩm</button>
                </a>
                <div class="table-responsive">
                <table class="display" id="basic-1">
                    <thead>
                    <tr style="text-align: center">
                        <th style="width: 20px">STT</th>
                        <th>TH</th>
                        <th>User</th>
                        <th>DM</th>
                        <th>Tên SP</th>
                        <th>Giá tiền</th>
                        <th>Hình ảnh</th>
                        <th>Nội dung</th>
                        <th>Slug</th>
                        <th>Trạng thái</th>
                        <th>Thời gian</th>
                        <th style="width: 120px;">Hành động</th>
                    </tr>
                    </thead>
                    <tbody>
                        @php
                            $stt = 1
                        @endphp
                     @foreach ($products as $key => $proItem)
                        <tr>
                            <td style="text-align: center ; width: 20px">{{ $stt++ }}</td>
                            <td style="text-align: center">{{$proItem->brand->brand_name}}</td>
                            <td style="text-align: center">{{$proItem->user_id}}</td>
                            <td style="text-align: center">{{$proItem->category->cate_name}}</td>
                            <td style="text-align: center">{{$proItem->pro_name}}</td>
                            <td style="text-align: center">{{number_format($proItem->pro_price)}}vnđ</td>
                            <td style="text-align: center">
                                <img src="{{$proItem->feature_image}}" alt="" style="width: 100px; height: 100px; border-radius: 6px">
                            </td>
                            <td style="text-align: center; width: 300px">{{$proItem->pro_content}} </td>
                            <td style="text-align: center">{{$proItem->slug}}</td>
                            <td style="text-align: center;width: 120px;">
                                @if($proItem->pro_status == 0)
                                    <span style="font-size: 13px" class="badge badge-light-danger">Ẩn đi</span>
                                @else
                                    <span style="font-size: 13px" class="badge badge-light-success">Hiện lên</span>
                                @endif
                            </td>
                            <td style="text-align: center">{{$proItem->created_at->format(" d-m-Y")}}</td>
                            <td>
                            <ul class="action" style="justify-content: center;">
                                <li class="edit"> <a href="{{route('product.edit',$proItem->id)}}"><i class="icon-pencil-alt"></i></a></li>
                                <form class="form theme-form" action="{{route('product.destroy',$proItem->id)}}" method="Post">
                                  @method('DELETE')
                                    @csrf
                                        <button class="delete" style="cursor: pointer; border:none"  onclick="return confirm('Bạn có muốn xóa sản phẩm này không ?');"><i class="icon-trash"></i></button>
                                </form>
                                {{-- <li class="delete" >
                                    <a href=""
                                    data-url="{{route('product.destroy', $proItem->id)}}"
                                    class="action_delete"><i class="icon-trash"></i></a>
                                </li> --}}
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
