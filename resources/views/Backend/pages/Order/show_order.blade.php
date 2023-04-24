@extends('AdminLayout')
@section('admin_content')
<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-6">
                <h3>Chi tiết đơn hàng </h3>
            </div>
            <div class="col-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin')}}"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Chi tiết đơn hàng </li>
                    <li class="breadcrumb-item active">Liệt kê Chi tiết đơn hàng </li>
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
                <h3>Chi tiết đơn hàng </h3>
                <span style=" margin-top: 3px;">
                    @include('Backend.admin.alert')
              </span>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                <table class="display" id="basic-1">
                    <thead>
                    <tr style="text-align: center">

                        <th>Hình ảnh</th>
                        <th>Tên sản phẩm</th>
                        <th>Số lượng</th>
                        <th>Đơn giá</th>
                        <th>Tổng tiền</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($order->orderDetails as $orderDetail)
                            <tr>
                                <td style="text-align: center">
                                    <img src="{{$orderDetail->product->feature_image}}" alt="" style="width: 100px; height: 100px; border-radius: 6px">
                                </td>
                                <td style="text-align: center">
                                    {{$orderDetail->product->pro_name}}
                                </td>
                                <td style="text-align: center">
                                    {{$orderDetail->qty}}
                                </td>
                                <td style="text-align: center">
                                    {{number_format($orderDetail->amount)}}đ
                                </td>
                                <td style="text-align: center">
                                    {{number_format($orderDetail->total)}}đ
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
    <div class="row">
        <div class="col-xl-6 col-sm-12">
            <div class="card">
              <div class="card-header pb-0">
                <h3>Thông tin đơn đặt hàng</h3>
              </div>
              <div class="card-body">
                <ul class="list-group">
                  <li class="list-group-item"><span style="font-size: 16px; color: #000; padding: 0 6px 0 0">Họ và tên:</span>  {{$order->order_name}}</li>
                  <li class="list-group-item"><span style="font-size: 16px; color: #000; padding: 0 6px 0 0">Email:</span>  {{$order->email}}</li>
                  <li class="list-group-item"><span style="font-size: 16px; color: #000; padding: 0 6px 0 0">Công ty:</span>  {{$order->company_name}}</li>
                  <li class="list-group-item"><span style="font-size: 16px; color: #000; padding: 0 6px 0 0">Quốc gia:</span>  {{$order->country}}</li>
                  <li class="list-group-item"><span style="font-size: 16px; color: #000; padding: 0 6px 0 0">Tỉnh/Thành phố:</span>  {{$order->street_address}}</li>
                  <li class="list-group-item"><span style="font-size: 16px; color: #000; padding: 0 6px 0 0">Mã Zip:</span>  {{$order->zip}}</li>
                  <li class="list-group-item"><span style="font-size: 16px; color: #000; padding: 0 6px 0 0">Địa chỉ cụ thể:</span>  {{$order->town}}</li>
                  <li class="list-group-item"><span style="font-size: 16px; color: #000; padding: 0 6px 0 0">Số điện thoại:</span>  {{$order->phone}}</li>
                  <li class="list-group-item"><span style="font-size: 16px; color: #000; padding: 0 6px 0 0">Thành tiền: </span>  {{number_format(array_sum(array_column($order->orderDetails->toArray(), 'total')))}}đ</li>
                  <li class="list-group-item"><span style="font-size: 16px; color: #000; padding: 0 6px 0 0">Trạng thái:</span>  {{\App\Utilities\Constant::$order_status[$order->status]}}</li>
                  <li class="list-group-item"><span style="font-size: 16px; color: #000; padding: 0 6px 0 0">Phương thức thanh toán:</span>  {{$order->payment_type}}</li>

                </ul>
              </div>
            </div>
          </div>
    </div>
</div>
     <!-- Zero Configuration  Ends-->
@endsection
