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
                <a href="{{route('permission.index')}}">Danh sách quyền</a>
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
    <li class="sidebar-list">
        <a class="sidebar-link sidebar-title" href="javascript:void(0)"><i data-feather="shopping-bag"></i><span>Ảnh Sản phẩm</span> </a>
        <ul class="sidebar-submenu">
            <li>
                <a href="{{route('ProductImage.index')}}">Ảnh sản phẩm</a>
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
                <a href="{{route('order.index')}}">Quản lý đơn hàng</a>
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
    <li class="sidebar-list">
        <a class="sidebar-link sidebar-title" href="javascript:void(0)"><i data-feather="bar-chart-2"></i><span>Thống kê</span> </a>
        <ul class="sidebar-submenu">
            <li>
                <a href="{{route('Statistical.index')}}">Thống kê Norda</a>
            </li>
        </ul>
    </li>
</ul>
