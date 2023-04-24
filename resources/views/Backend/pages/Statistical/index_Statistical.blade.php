
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
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div id="piechart_3d" style="width: 900px; height: 500px; margin: auto;"></div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header border-0">
                            <div class="d-flex justify-content-between">
                                <h3 class="card-title">Online Store Visitors</h3>
                                <a href="javascript:void(0);">View Report</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="d-flex">
                                <p class="d-flex flex-column">
                                    <span class="text-bold text-lg">820</span>
                                    <span>Visitors Over Time</span>
                                </p>
                                <p class="ml-auto d-flex flex-column text-right">
                                    <span class="text-success">
                                        <i class="fas fa-arrow-up"></i> 12.5%
                                    </span>
                                    <span class="text-muted">Since last week</span>
                                </p>
                            </div>
                            <div class="position-relative mb-4">
                                <canvas id="visitors-chart" height="200"></canvas>
                            </div>
                            <div class="d-flex flex-row justify-content-end">
                                <span class="mr-2">
                                    <i class="fas fa-square text-primary"></i> This Week
                                </span>
                                <span>
                                    <i class="fas fa-square text-gray"></i> Last Week
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header border-0">
                            <h3 class="card-title">Products</h3>
                            <div class="card-tools">
                                <a href="#" class="btn btn-tool btn-sm">
                                    <i class="fas fa-download"></i>
                                </a>
                                <a href="#" class="btn btn-tool btn-sm">
                                    <i class="fas fa-bars"></i>
                                </a>
                            </div>
                        </div>
                        <div class="card-body table-responsive p-0">
                            <table class="table table-striped table-valign-middle">
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Price</th>
                                        <th>Sales</th>
                                        <th>More</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <img src="{{asset('Backend/assets/dist/img/default-150x150.png')}}" alt="Product 1" class="img-circle img-size-32 mr-2">
                                        Some Product
                                    </td>
                                    <td>$13 USD</td>
                                    <td>
                                        <small class="text-success mr-1">
                                        <i class="fas fa-arrow-up"></i>
                                        12%
                                        </small>
                                        12,000 Sold
                                    </td>
                                    <td>
                                        <a href="#" class="text-muted">
                                            <i class="fas fa-search"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="{{asset('Backend/assets/dist/img/default-150x150.png')}}" alt="Product 1" class="img-circle img-size-32 mr-2">
                                        Another Product
                                    </td>
                                    <td>$29 USD</td>
                                    <td>
                                        <small class="text-warning mr-1">
                                        <i class="fas fa-arrow-down"></i>
                                        0.5%
                                        </small>
                                        123,234 Sold
                                    </td>
                                    <td>
                                        <a href="#" class="text-muted">
                                            <i class="fas fa-search"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="{{asset('Backend/assets/dist/img/default-150x150.png')}}" alt="Product 1" class="img-circle img-size-32 mr-2">
                                        Amazing Product
                                    </td>
                                        <td>$1,230 USD</td>
                                    <td>
                                        <small class="text-danger mr-1">
                                            <i class="fas fa-arrow-down"></i>
                                            3%
                                        </small>
                                        198 Sold
                                    </td>
                                    <td>
                                        <a href="#" class="text-muted">
                                            <i class="fas fa-search"></i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header border-0">
                        <h3 class="card-title">Products</h3>
                        <div class="card-tools">
                            <a href="#" class="btn btn-tool btn-sm">
                                <i class="fas fa-download"></i>
                            </a>
                            <a href="#" class="btn btn-tool btn-sm">
                                <i class="fas fa-bars"></i>
                            </a>
                        </div>
                    </div>
                    <div class="card-body table-responsive p-0">
                        <table class="table table-striped table-valign-middle">
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th>Sales</th>
                                    <th>More</th>
                                </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <img src="{{asset('Backend/assets/dist/img/default-150x150.png')}}" alt="Product 1" class="img-circle img-size-32 mr-2">
                                    Some Product
                                </td>
                                <td>$13 USD</td>
                                <td>
                                    <small class="text-success mr-1">
                                    <i class="fas fa-arrow-up"></i>
                                    12%
                                    </small>
                                    12,000 Sold
                                </td>
                                <td>
                                    <a href="#" class="text-muted">
                                        <i class="fas fa-search"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="{{asset('Backend/assets/dist/img/default-150x150.png')}}" alt="Product 1" class="img-circle img-size-32 mr-2">
                                    Another Product
                                </td>
                                <td>$29 USD</td>
                                <td>
                                    <small class="text-warning mr-1">
                                    <i class="fas fa-arrow-down"></i>
                                    0.5%
                                    </small>
                                    123,234 Sold
                                </td>
                                <td>
                                    <a href="#" class="text-muted">
                                        <i class="fas fa-search"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="{{asset('Backend/assets/dist/img/default-150x150.png')}}" alt="Product 1" class="img-circle img-size-32 mr-2">
                                    Amazing Product
                                </td>
                                    <td>$1,230 USD</td>
                                <td>
                                    <small class="text-danger mr-1">
                                        <i class="fas fa-arrow-down"></i>
                                        3%
                                    </small>
                                    198 Sold
                                </td>
                                <td>
                                    <a href="#" class="text-muted">
                                        <i class="fas fa-search"></i>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
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
{{-- <script nonce="f5bdeeb8-da73-47b7-9e4a-5aae9122bb1f">
(function(w,d)
    {!function(bv,bw,bx,by){bv[bx]=bv[bx]||{};
        bv[bx].executed=[];
        bv.zaraz={deferred:[],listeners:[]};bv.zaraz.q=[];
        bv.zaraz._f=function(bz){return function(){var bA=Array.prototype.slice.call(arguments);
        bv.zaraz.q.push({m:bz,a:bA})}};
        for(const bB of["track","set","debug"])bv.zaraz[bB]=bv.zaraz._f(bB);
        bv.zaraz.init=()=>{var bC=bw.getElementsByTagName(by)[0],bD=bw.createElement(by),bE=bw.getElementsByTagName("title")[0];
        bE&&(bv[bx].t=bw.getElementsByTagName("title")[0].text);
        bv[bx].x=Math.random();bv[bx].w=bv.screen.width;bv[bx].h=bv.screen.height;
        bv[bx].j=bv.innerHeight;
        bv[bx].e=bv.innerWidth;
        bv[bx].l=bv.location.href;
        bv[bx].r=bw.referrer;
        bv[bx].k=bv.screen.colorDepth;
        bv[bx].n=bw.characterSet;
        bv[bx].o=(new Date).getTimezoneOffset();
        if(bv.dataLayer)for(const bI of Object.entries(Object.entries(dataLayer).reduce(((bJ,bK)=>({...bJ[1],...bK[1]})))))zaraz.set(bI[0],bI[1],{scope:"page"});
        bv[bx].q=[];for(;bv.zaraz.q.length;){const bL=bv.zaraz.q.shift();
        bv[bx].q.push(bL)}bD.defer=!0;for(const bM of[localStorage,sessionStorage])Object.keys(bM||{}).filter((bO=>bO.startsWith("_zaraz_"))).forEach((bN=>{try{bv[bx]["z_"+bN.slice(7)]=JSON.parse(bM.getItem(bN))}catch{bv[bx]["z_"+bN.slice(7)]=bM.getItem(bN)}}));
        bD.referrerPolicy="origin";
        bD.src="../../cdn-cgi/zaraz/sd0d9.js?z="+btoa(encodeURIComponent(JSON.stringify(bv[bx])));
        bC.parentNode.insertBefore(bD,bC)};["complete","interactive"].includes(bw.readyState)?zaraz.init():bv.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,"zarazData","script");})(window,document);
    </script>
--}}
