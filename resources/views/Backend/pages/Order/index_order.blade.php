@extends('AdminLayout')
@section('admin_content')
<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-6">
                <h3>Đơn hàng </h3>
            </div>
            <div class="col-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin')}}"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Đơn hàng</li>
                    <li class="breadcrumb-item active">Liệt kê Đơn hàng</li>
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
                <h3>Đơn hàng</h3>
                <span style=" margin-top: 3px;">
                    @include('Backend.admin.alert')
              </span>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                <table class="display" id="basic-1">
                    <thead>
                    <tr style="text-align: center">

                        <th>ID</th>
                        <th>Khách hàng / Sản phẩm</th>
                        <th>Hình ảnh</th>
                        <th>Địa chỉ</th>
                        <th>Giá tiền</th>
                        <th>Trạng thái</th>
                        <th>Thời gian</th>
                        <th >Hành động</th>
                    </tr>
                    </thead>
                    <tbody>

                        @foreach ($orders as $order)
                            <tr>

                                <td style="text-align: center ">{{ $order->id}}</td>
                                <td style="text-align: center ">
                                    <b style="font-size: 15px; font-weight: 600">{{ $order->order_name}}</b>
                                    <br>
                                    <b style="font-size: 13px; font-weight: 500; color: #756363"> {{ $order->orderDetails[0]->product->pro_name}}</b>
                                    <br>
                                   <b style="font-size: 13px; font-weight: 500; color: #fe6060">
                                    @if(count($order->orderDetails) > 1)
                                        (và {{count($order->orderDetails) - 1}} sản phẩm khác)
                                    @endif
                                   </b>
                                </td>
                                <td style="text-align: center">
                                    <img src="{{$order->orderDetails[0]->product->feature_image}}" alt="" style="width: 100px; height: 100px; border-radius: 6px">
                                </td>

                                <td style="text-align: center ">{{ $order->town . ' - ' . $order->country}}</td>
                                <td style="text-align: center ">{{number_format(array_sum(array_column($order->orderDetails->toArray(), 'total')))}}đ</td>
                                <td style="text-align: center ">{{\App\Utilities\Constant::$order_status[$order->status]}}</td>
                                <td style="text-align: center ">{{ $order->created_at->format("H:i:s d-m-Y")}}</td>
                                <td style="text-align: center ">
                                    <a href="{{route('order.show', $order->id)}}" style="font-size: 13px " class="badge badge-light-success">Chi tiết</a>
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
