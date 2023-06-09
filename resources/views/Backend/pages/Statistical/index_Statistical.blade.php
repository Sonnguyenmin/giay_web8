
<link rel="stylesheet" href="{{asset('Backend/assets/plugins/fontawesome-free/css/all.min.css')}}">
<link rel="stylesheet" href="{{asset('Backend/assets/dist/css/adminlte.min2167.css?v=3.2.0')}}">
<?php
    $connect = new mysqli('localhost', 'root', '', 'norda');
    $query = "SELECT `tbl_brand`.*, COUNT(tbl_product.brand_id) AS 'number_brand' FROM `tbl_product` INNER JOIN `tbl_brand` ON tbl_product.brand_id = tbl_brand.id GROUP BY tbl_product.brand_id;";

    $result = mysqli_query($connect, $query);
    $data = [];
    while ($row = mysqli_fetch_array($result)){
        $data[] = $row;
    }
?>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    google.charts.load("current", {packages:["corechart"]});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['brand_name', 'number_brand'],
            <?php
                foreach($data as $key){
                    echo "['".$key['brand_name']."', ".$key['number_brand']."],";
                }
            ?>
        ]);
        var options = {
            title: 'Biểu đồ tất cả sản phẩm ',
            is3D: true,
        };

    var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
    chart.draw(data, options);
    }
</script>
@extends('AdminLayout')
@section('admin_content')
<div class="container-fluid" >
    <div class="page-title">
        <div class="row">
            <div class="col-6">
                <h3>Thống kê trang quản trị</h3>
            </div>
            <div class="col-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin')}}"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Thông kê</li>
                    <li class="breadcrumb-item active">Thống kê trang quản trị</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="content" >
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>{{$categoryCount}}</h3>
                            <p>Danh mục sản phẩm</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-cube"></i>
                        </div>

                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>{{$brandCount}}</h3>
                            <p>Thương hiệu sản phẩm</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-briefcase"></i>
                        </div>

                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-warning" >
                        <div class="inner">
                            <h3>{{$userCount}}</h3>
                            <p style="color: #fff">Đăng kí người dùng</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>{{$productCount}}</h3>
                            <p>Sản Phẩm</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>

                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bd-pink">
                        <div class="inner">
                            <h3>{{$settingCount}}</h3>
                            <p>Thông tin </p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>

                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bd-blue">
                        <div class="inner">
                            <h3>{{$slideCount}} + {{$blogCount}}</h3>
                            <p>Slide + Tin tức</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>

                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bd-menu">
                        <div class="inner">
                            <h3>{{number_format($profit)}}đ</h3>
                            <p>Doanh thu theo năm</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>

                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bd-order">
                        <div class="inner" >
                            <h3>{{$orderCount}} - {{$orderDetailsCount}}</h3>
                            <p>Đơn hàng - Chi tiết đơn hàng</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div id="piechart_3d" style="width: 900px; height: 500px; margin: auto;"></div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="" method="GET" class="form-inline">
                                <div class="form-group" style="margin-right: 10px">
                                    <input type="date" name="date_from" class="form-control" >
                                </div>
                                <div class="form-group" style="margin-right: 10px">
                                    <input type="date" name="date_to" class="form-control" >
                                </div>
                                <button type="submit" class="btn btn-primary">Tìm kiếm</button>
                            </form>
                        </div>
                        <div class="card-header border-0" style="display:flex; align-item: center" >
                            <h3 style="margin-right: 6px" class="card-title">Đơn hàng tiền mặt</h3> - <h3 style="margin-left: 6px; color: #0dcaf0" class="card-title">Doanh thu : {{number_format($subTotal)}} đ</h3>
                        </div>
                        <div class="card-body table-responsive p-0">
                            <table class="table table-striped table-valign-middle">
                                <thead>
                                    <tr>
                                        <th>Stt</th>
                                        <th>Tên khách hàng</th>
                                        <th>Địa chỉ</th>
                                        <th>SĐT</th>
                                        <th>Đơn hàng</th>
                                        <th>HTThanh toán</th>
                                        <th>ngày đặt</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $stt = 1
                                    @endphp
                                    @foreach ($orders as $order)
                                        <tr>
                                            <td>{{$stt++}}</td>
                                            <td>{{$order->order_name}}</td>
                                            <td>{{$order->town}}</td>
                                            <td>{{$order->phone}}</td>
                                            <td >
                                                @foreach ($order->orderDetails as $orderDetail)
                                                    <span>- {{$orderDetail->product->pro_name}}
                                                        @if($orderDetail->qty > 1)
                                                           x {{$orderDetail->qty}}
                                                        @else

                                                        @endif
                                                        + size:{{$orderDetail->size}}</br></span>
                                                    <br/>
                                                @endforeach

                                            </td>
                                            <td>{{$order->payment_type}}</td>
                                            <td>{{$order->created_at}}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header border-0" style="display:flex; align-item: center" >
                            <h3 style="margin-right: 6px" class="card-title">Đơn hàng thanh toán trực tuyến</h3> - <h3 style="margin-left: 6px; color: #00e49f" class="card-title">Doanh thu : {{number_format($totalPayment)}} đ</h3>
                        </div>
                        <div class="card-body table-responsive p-0">
                            <table class="table table-striped table-valign-middle">
                                <thead>
                                    <tr>
                                        <th>Stt</th>
                                        <th>Tên khách hàng</th>
                                        <th>Địa chỉ</th>
                                        <th>SĐT</th>
                                        <th>Đơn hàng</th>
                                        <th>HTThanh toán</th>
                                        <th>ngày đặt</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $stt = 1
                                    @endphp
                                    @foreach ($orderPayment as $order)
                                        <tr>
                                            <td>{{$stt++}}</td>
                                            <td>{{$order->order_name}}</td>
                                            <td>{{$order->town}}</td>
                                            <td>{{$order->phone}}</td>
                                            <td >
                                                @foreach ($order->orderDetails as $orderDetail)
                                                    <span>- {{$orderDetail->product->pro_name}}
                                                        @if($orderDetail->qty > 1)
                                                            x {{$orderDetail->qty}}
                                                        @else

                                                        @endif
                                                        + size:{{$orderDetail->size}}</br></span>
                                                    <br/>
                                                @endforeach
                                            </td>
                                            <td>{{$order->payment_type}}</td>
                                            <td>{{$order->created_at}}</td>
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
</div>

@endsection

<script src="{{asset('Backend/assets/plugins/jquery/jquery.min.js')}}"></script>

<script src="{{asset('Backend/assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<script src="{{asset('Backend/assets/dist/js/adminlte2167.js?v=3.2.0')}}"></script>

<script src="{{asset('Backend/assets/plugins/chart.js/Chart.min.js')}}"></script>

<script src="{{asset('Backend/assets/dist/js/demo.js')}}"></script>

<script src="{{asset('Backend/assets/dist/js/pages/dashboard3.js')}}"></script>
