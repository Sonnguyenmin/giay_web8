<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from admin.pixelstrap.com/koho/template/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 Jan 2023 13:40:57 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Koho admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Koho admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{asset('Backend/assets/images/admin.png')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('Backend/assets/images/admin.png')}}" type="image/x-icon">
    <title>Trang Quản trị Norda</title>
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('Backend/assets/css/vendors/font-awesome.css')}}">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{asset('Backend/assets/css/vendors/icofont.css')}}">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('Backend/assets/css/vendors/themify.css')}}">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('Backend/assets/css/vendors/flag-icon.css')}}">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('Backend/assets/css/vendors/feather-icon.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('Backend/assets/css/vendors/scrollbar.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('Backend/assets/css/vendors/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('Backend/assets/css/vendors/prism.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('Backend/assets/css/vendors/datatables.css')}}">
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{asset('Backend/assets/css/vendors/bootstrap.css')}}">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{asset('Backend/assets/css/style.css')}}">
    <link id="color" rel="stylesheet" href="{{asset('Backend/assets/css/color-1.css')}}" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{asset('Backend/assets/css/responsive.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

</head>
  <body>
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- Loader starts-->
    <div class="loader-wrapper">
      <div class="loader"></div>
    </div>
    <!-- Loader ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
         <!-- Page Header Start-->
        <div class="page-header">
            <div class="header-wrapper row m-0" style="padding: 22.6px 30px">
            <form class="form-inline search-full col" action="#" method="get">
                <div class="form-group w-100">
                <div class="Typeahead Typeahead--twitterUsers">
                    <div class="u-posRelative">
                    <input class="demo-input Typeahead-input form-control-plaintext w-100" type="text" placeholder="Search Koho .." name="q" title="" autofocus>
                    <div class="spinner-border Typeahead-spinner" role="status"><span class="sr-only">Loading...</span></div><i class="close-search" data-feather="x"></i>
                    </div>
                    <div class="Typeahead-menu"></div>
                </div>
                </div>
            </form>
            <div class="header-logo-wrapper col-auto p-0">
                <div class="logo-wrapper"><a href="{{route('admin')}}"><img class="img-fluid for-light" src="{{asset('Backend/assets/images/favicon/logo.png')}}" alt=""><img class="img-fluid for-dark" src="{{asset('Backend/assets/images/favicon/logo-3.png')}}" alt=""></a></div>
                <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="align-center"></i></div>
            </div>
            <div class="left-header col horizontal-wrapper ps-0">

            </div>
            <div class="nav-right col-6 pull-right right-header p-0">
                <ul class="nav-menus">
                <li>
                    <div class="mode"><i data-feather="moon"></i></div>
                </li>
                <li class="onhover-dropdown">
                    <div class="notification-box"><i data-feather="star"></i></div>
                    <div class="onhover-show-div bookmark-flip">
                    <div class="flip-card">
                        <div class="flip-card-inner">
                        <div class="front">
                            <ul class="droplet-dropdown bookmark-dropdown">
                            <li class="gradient-primary"><i data-feather="star"></i>
                                <h3 class="mb-0">Đánh dấu trang</h3>
                            </li>
                            <li>
                                <div class="row">
                                <div class="col-4 text-center"><a href="file-manager.html"><i data-feather="file-text"></i></a></div>
                                <div class="col-4 text-center"><a href="general-widget.html"><i data-feather="activity"></i></a></div>
                                <div class="col-4 text-center"><a href="user-profile.html"><i data-feather="users"></i></a></div>
                                <div class="col-4 text-center"><a href="clipboard.html"><i data-feather="clipboard"></i></a></div>
                                <div class="col-4 text-center"><a href="to-do.html"><i data-feather="anchor"></i></a></div>
                                <div class="col-4 text-center"><a href="internationalization.html"><i data-feather="settings"></i></a></div>
                                </div>
                            </li>
                            <li class="text-center">
                                <button class="flip-btn" id="flip-btn">Thêm dấu trang mới</button>
                            </li>
                            </ul>
                        </div>
                        <div class="back">
                            <ul>
                            <li>
                                <div class="droplet-dropdown bookmark-dropdown flip-back-content">
                                <input type="text" placeholder="Tìm kiếm">
                                </div>
                            </li>
                            <li class="pb-0">
                                <button class="d-block flip-back" id="flip-back">Trở lại </button>
                            </li>
                            </ul>
                        </div>
                        </div>
                    </div>
                    </div>
                </li>
                <li class="onhover-dropdown">
                    <div class="notification-box"><i data-feather="bell"></i><span class="badge rounded-pill badge-primary">4                                </span></div>
                    <ul class="notification-dropdown onhover-show-div">
                    <li><i data-feather="bell">            </i>
                        <h3 class="mb-0">Thông báo</h3>
                    </li>
                    <li><a href="email_read.html">
                        <p><i class="fa fa-circle-o me-3 font-primary"> </i>Xử lý giao hàng <span class="pull-right">10 min.</span></p></a></li>
                    <li><a href="email_read.html">
                        <p><i class="fa fa-circle-o me-3 font-success"></i>Hoàn tất đơn hàng<span class="pull-right">1 hr</span></p></a></li>
                    <li><a href="email_read.html">
                        <p><i class="fa fa-circle-o me-3 font-info"></i>Vé đã tạo<span class="pull-right">3 hr</span></p></a></li>
                    <li><a href="email_read.html">
                        <p><i class="fa fa-circle-o me-3 font-danger"></i>Giao hàng hoàn tất<span class="pull-right">6 hr</span></p></a></li>
                    <li><a class="btn btn-primary" href="email_read.html">Kiểm tra tất cả thông báo</a></li>
                    </ul>
                </li>
                <li class="onhover-dropdown"><i data-feather="message-square"></i>
                    <ul class="chat-dropdown onhover-show-div">
                    <li><i data-feather="message-square"></i>
                        <h3 class="mb-0">Hộp tin nhắn</h3>
                    </li>
                    <li>
                        <div class="d-flex"><img class="img-fluid rounded-circle me-3" src="{{asset('Backend/assets/images/user/6.jpg')}}" alt="">
                        <div class="status-circle online"></div>
                        <div class="flex-grow-1"><a href="user-profile.html"><span>Nguyễn Trường Sơn</span>
                            <p>Bạn có muốn đi xem phim không?</p></a></div>
                        <p class="f-12 font-success">2 phút trước</p>
                        </div>
                    </li>
                    <li>
                        <div class="d-flex"><img class="img-fluid rounded-circle me-3" src="{{asset('Backend/assets/images/user/1.jpg')}}" alt="">
                        <div class="status-circle online"></div>
                        <div class="flex-grow-1"><a href="user-profile.html"><span>Nguyễn Thị Hải Vân</span>
                            <p>Cảm ơn bạn đánh giá chúng tôi.</p></a></div>
                        <p class="f-12 font-success">5 phút trước</p>
                        </div>
                    </li>
                    <li>
                        <div class="d-flex"><img class="img-fluid rounded-circle me-3" src="{{asset('Backend/assets/images/user/7.jpg')}}" alt="">
                        <div class="status-circle offline"></div>
                        <div class="flex-grow-1"><a href="user-profile.html"><span>Nguyễn Trường Giang</span>
                            <p>Cập nhật báo cáo dự án là gì</p></a></div>
                        <p class="f-12 font-danger">9 phút trước</p>
                        </div>
                    </li>
                    <li class="text-center"> <a class="btn btn-primary" href="chat.html">Xem tất cả</a></li>
                    </ul>
                </li>
                <li class="maximize"><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i data-feather="maximize"></i></a></li>
                <li class="profile-nav onhover-dropdown p-0 me-0">
                    <div class="d-flex profile-media"><img class="b-r-50" src="{{asset('Backend/assets/images/dashboard/profile.png')}}" alt="">
                    <div class="flex-grow-1">
                        <span>
                            {{ Auth::user()->name}}
                        </span>
                        <p class="mb-0 font-roboto">Quản trị viên <i class="middle fa fa-angle-down"></i></p>
                    </div>
                    </div>
                    <ul class="profile-dropdown onhover-show-div">
                    <li><a href=""><i data-feather="user"></i><span>{{ Auth::user()->name}}</span></a></li>
                    <li><a href="email_inbox.html"><i data-feather="mail"></i><span>Hộp thư đến</span></a></li>
                    <li><a href="{{route('logout')}}"><i data-feather="log-in"> </i><span>Đăng xuất</span></a></li>
                    </ul>
                </li>
                </ul>
            </div>
            </div>
        </div>
        <!-- Page Header Ends -->
        <!-- Page Body Start-->
        <div class="page-body-wrapper">
            <!-- Page Sidebar Start-->
            <div class="sidebar-wrapper">
                <div>
                    <div class="logo-wrapper"><a href="{{route('admin')}}"><img class="img-fluid for-light" src="{{asset('Backend/assets/images/favicon/logo.png')}}" alt=""><img class="img-fluid for-dark" src="{{asset('Backend/assets/images/favicon/logo-3.png')}}" alt=""></a>
                        <div class="back-btn"><i class="fa fa-angle-left"></i></div>
                        <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="align-left"> </i></div>
                    </div>
                    <div class="logo-icon-wrapper"><a href=""><img class="img-fluid for-light" src="{{asset('Backend/assets/images/favicon/admin.png')}}" alt=""><img class="img-fluid for-dark" src="{{asset('Backend/assets/images/favicon/admin.png')}}" alt=""></a></div>
                    <nav class="sidebar-main">
                        <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
                        <div id="sidebar-menu">
                        <ul class="sidebar-links" id="simple-bar">
                            <li class="back-btn"><a href="index-2.html"><img class="img-fluid for-light" src="{{asset('Backend/assets/images/favicon/logo.png')}}" alt=""><img class="img-fluid for-dark" src="{{asset('Backend/assets/images/favicon/logo-3.png')}}" alt=""></a>
                            <div class="mobile-back text-end"><span>Trở lại</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                            </li>
                            <li class="sidebar-main-title">
                            <div>
                                <h4 class="lan">Tổng quan</h4>
                            </div>
                            </li>
                            <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="{{route('admin')}}"><i data-feather="home"> </i><i class="flag-icon flag-icon-vn" ></i><span style="padding-left: 3px">Trang chủ</span></a></li>
                            <li class="sidebar-list">
                                <a class="sidebar-link sidebar-title" href="javascript:void(0)"><i data-feather="user-plus"></i><span>Users</span> </a>
                                <ul class="sidebar-submenu">
                                    <li>
                                        <a href="{{route('users.index')}}">Danh sách nhân viên</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="sidebar-list">
                                <a class="sidebar-link sidebar-title" href="javascript:void(0)"><i data-feather="server"></i><span>Danh sách</span> </a>
                                <ul class="sidebar-submenu">
                                    <li>
                                        <a href="{{route('roles.index')}}">Danh sách vai trò</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="sidebar-list">
                                <a class="sidebar-link sidebar-title" href="javascript:void(0)"><i data-feather="database"></i><span>Dữ liệu Permission</span> </a>
                                <ul class="sidebar-submenu">
                                    <li>
                                        <a href="{{route('permission.index')}}">Danh sách quyền cho phép</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="sidebar-main-title">
                            <div>
                                <h4 class="lan">Trang</h4>
                            </div>
                            </li>
                            <li class="sidebar-list">
                                <a class="sidebar-link sidebar-title" href="javascript:void(0)"><i data-feather="box"></i><span>Danh mục</span> </a>
                                <ul class="sidebar-submenu">
                                    <li>
                                        <a href=" {{route('category.index')}}">Danh mục sản phẩm</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="sidebar-list">
                                <a class="sidebar-link sidebar-title" href="javascript:void(0)"><i data-feather="layers"></i><span>Thương hiệu</span> </a>
                                <ul class="sidebar-submenu">
                                    <li>
                                        <a href=" {{route('brand.index')}}">Thương hiệu sản phẩm</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="sidebar-list">
                                <a class="sidebar-link sidebar-title" href="javascript:void(0)"><i data-feather="check-square"></i><span>Thuộc tính</span> </a>
                                <ul class="sidebar-submenu">
                                    <li>
                                        <a href=" {{route('attribute.index')}}">Thuộc tính sản phẩm</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="sidebar-list">
                                <a class="sidebar-link sidebar-title" href="javascript:void(0)"><i data-feather="menu"></i><span>Menus</span> </a>
                                <ul class="sidebar-submenu">
                                    <li>
                                        <a href="{{route('menu.index')}}">Menu sản phẩm</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="sidebar-list">
                                <a class="sidebar-link sidebar-title" href="javascript:void(0)"><i data-feather="shopping-bag"></i><span>Sản phẩm</span> </a>
                                <ul class="sidebar-submenu">
                                    <li>
                                        <a href="{{route('product.index')}}">Sản phẩm</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="sidebar-main-title">
                                <div>
                                    <h4 class="lan">Thương mại</h4>
                                </div>
                            </li>
                            <li class="sidebar-list">
                                <a class="sidebar-link sidebar-title" href="javascript:void(0)"><i data-feather="truck"></i><span>Đơn hàng</span> </a>
                                <ul class="sidebar-submenu">
                                    <li>
                                        <a href="">Quản lý đơn hàng</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="sidebar-main-title">
                                <div>
                                    <h4 class="lan">Các thành phần</h4>
                                </div>
                            </li>
                            <li class="sidebar-list">
                                <a class="sidebar-link sidebar-title" href="javascript:void(0)"><i data-feather="tv"></i><span>Slides</span> </a>
                                <ul class="sidebar-submenu">
                                    <li>
                                        <a href="{{route('slide.index')}}">Slides</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="sidebar-list">
                                <a class="sidebar-link sidebar-title" href="javascript:void(0)"><i data-feather="settings"></i><span>Settings</span> </a>
                                <ul class="sidebar-submenu">
                                    <li>
                                        <a href="{{route('setting.index')}}">Settings</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <div class="sidebar-img-section">
                            <div class="sidebar-img-content"><img class="img-fluid" src="{{asset('Backend/assets/images/dashboard/upgrade/2.png')}}" alt="">
                                <h4>Trang quản trị cửa hàng bán giày Norda</h4>
                            </div>
                        </div>
                        </div>
                        <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
                    </nav>
                </div>
            </div>
            <!-- Page Sidebar Ends-->
            <div class="page-body">
                @yield("admin_content")
            </div>
            <!-- footer start-->
            <footer class="footer">
                <div class="container-fluid">
                <div class="row">
                    <div class="col-10 p-0 footer-left">
                    <p class="mb-0"> Trang quản trị cửa hàng bán giày Norda </p>
                    </div>
                    <div class="col-2 p-0 footer-right"><i class="fa fa-heart font-danger"></i></div>
                </div>
                </div>
            </footer>
        </div>
    </div>

    <!-- latest jquery-->
    <script src="{{asset('Backend/assets/js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('Backend/assets/js/bootstrap/popper.min.js')}}"></script>
    <script src="{{asset('Backend/assets/js/bootstrap/bootstrap.bundle.min.js')}}"></script>
    <!-- feather icon js-->
    <script src="{{asset('Backend/assets/js/icons/feather-icon/feather.min.js')}}"></script>
    <script src="{{asset('Backend/assets/js/icons/feather-icon/feather-icon.js')}}"></script>
    <script src="{{asset('Backend/assets/js/scrollbar/simplebar.js')}}"></script>
    <script src="{{asset('Backend/assets/js/scrollbar/custom.js')}}"></script>
    <!-- Sidebar jquery-->
   <script src="{{asset('Backend/assets/js/datatable/datatables/jquery.dataTables.min.js')}}"></script>
   <script src="{{asset('Backend/assets/js/datatable/datatables/datatable.custom.js')}}"></script>
   <script src="{{asset('Backend/assets/js/tooltip-init.js')}}"></script>

   <script src="{{asset('Backend/assets/js/datepicker/date-time-picker/moment.min.js')}}"></script>
   <script src="{{asset('Backend/assets/js/datepicker/date-time-picker/tempusdominus-bootstrap-4.min.js')}}"></script>
   <script src="{{asset('Backend/assets/js/datepicker/date-time-picker/datetimepicker.custom.js')}}"></script>


    <script src="{{asset('Backend/assets/js/config.js')}}"></script>
    <script src="{{asset('Backend/assets/js/sidebar-menu.js')}}"></script>
    <script src="{{asset('Backend/assets/js/chart/knob/knob.min.js')}}"> </script>
    <script src="{{asset('Backend/assets/js/chart/knob/knob-chart.js')}}"></script>
    <script src="{{asset('Backend/assets/js/chart/apex-chart/apex-chart.js')}}"></script>
    <script src="{{asset('Backend/assets/js/chart/apex-chart/stock-prices.js')}}"> </script>
    <script src="{{asset('Backend/assets/js/prism/prism.min.js')}}"></script>
    <script src="{{asset('Backend/assets/js/clipboard/clipboard.min.js')}}"></script>
    <script src="{{asset('Backend/assets/js/custom-card/custom-card.js')}}"></script>
    <script src="{{asset('Backend/assets/js/notify/bootstrap-notify.min.js')}}"></script>
    <script src="{{asset('Backend/assets/js/dashboard/default.js')}}"></script>
    <script src="{{asset('Backend/assets/js/notify/index.js')}}"></script>
    <script src="{{asset('Backend/assets/js/typeahead/handlebars.js')}}"></script>
    <script src="{{asset('Backend/assets/js/typeahead/typeahead.bundle.js')}}"></script>
    <script src="{{asset('Backend/assets/js/typeahead/typeahead.custom.js')}}"></script>
    <script src="{{asset('Backend/assets/js/typeahead-search/handlebars.js')}}"></script>
    <script src="{{asset('Backend/assets/js/typeahead-search/typeahead-custom.js')}}"></script>
    <!-- Theme js-->
    <script src="{{asset('Backend/assets/js/script.js')}}"></script>
    <script src="{{asset('Backend/assets/js/theme-customizer/customizer.js')}}"></script>

    {{-- Role Permission --}}
    <script type="text/javascript">
        $(function(){
            $('.check_wrapper').on('click', function(){
                $(this).parents('.cart_parent').find('.check_inner').prop('checked', $(this).prop('checked'));
            });
            $('.check_all').on('click', function(){
                $(this).parents().find('.check_inner').prop('checked', $(this).prop('checked'));
                $(this).parents().find('.check_wrapper').prop('checked', $(this).prop('checked'));
            });
        });
    </script>

    {{-- slug --}}
    <script type="text/javascript">
        function ChangeToSlug()
            {
                var slug;

                //Lấy text từ thẻ input title
                slug = document.getElementById("slug").value;
                slug = slug.toLowerCase();
                //Đổi ký tự có dấu thành không dấu
                    slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
                    slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
                    slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
                    slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
                    slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
                    slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
                    slug = slug.replace(/đ/gi, 'd');
                    //Xóa các ký tự đặt biệt
                    slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
                    //Đổi khoảng trắng thành ký tự gạch ngang
                    slug = slug.replace(/ /gi, "-");
                    //Đổi nhiều ký tự gạch ngang liên tiếp thành 1 ký tự gạch ngang
                    //Phòng trường hợp người nhập vào quá nhiều ký tự trắng
                    slug = slug.replace(/\-\-\-\-\-/gi, '-');
                    slug = slug.replace(/\-\-\-\-/gi, '-');
                    slug = slug.replace(/\-\-\-/gi, '-');
                    slug = slug.replace(/\-\-/gi, '-');
                    //Xóa các ký tự gạch ngang ở đầu và cuối
                    slug = '@' + slug + '@';
                    slug = slug.replace(/\@\-|\-\@|\@/gi, '');
                    //In slug ra textbox có id “slug”
                document.getElementById('convert_slug').value = slug;
            }
    </script>

     <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
     <script type="text/javascript">
        $(function(){
            $(".tag_select").select2({
                 tags: true,
                 tokenSeparators: [',']
            })
            $(".select_2").select2({
                placeholder: "Chọn danh mục",
                allowClear: true
            })
            $(".select_brand").select2({
                placeholder: "Chọn thương hiệu",
                allowClear: true
            })
            $(".selectRole").select2({
                placeholder: "Chọn vai trò...",
                allowClear: true
            })
         })
     </script>


    {{-- attribute --}}
    <script type="text/javascript">
        $('#InputName').change(function(event){
            var _ip = $('#InputName').val();
            if(_ip == 'size'){
                $('.value2').show();
                $('#slug2').attr({
                    name: 'attr_value',
                });
                $('.value1').hide();
                $('#slug1').attr({
                    name: '',
                });
            }
            else{
                $('.value1').show();
                $('#slug1').attr({
                    name: 'attr_value',
                });
                $('.value2').hide();
                $('#slug2').attr({
                    name: '',
                });
            }
        })
    </script>
  </body>

<!-- Mirrored from admin.pixelstrap.com/koho/template/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 Jan 2023 13:42:41 GMT -->
</html>
