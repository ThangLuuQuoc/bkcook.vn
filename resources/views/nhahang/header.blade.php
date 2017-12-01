 <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">

            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="alert-warning">
                    <a class="navbar-brand" href="#">Ẩm Thực Quanh Ta</a>
                </div>
            </div>
            <!-- /.navbar-header -->
            <div class="g-plus" data-action="share" data-height="24"></div>

            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        @if(Auth::user())
                        <li><a><i class="fa fa-user fa-fw">::</i><b style="color: red;">{{ Auth::user()->tentaikhoan }}</b></a>
                        </li>
                        <li><a href="admin/user/sua/{{Auth::user()->id}}"><i class="fa fa-gear fa-fw">::</i>Cài Đặt</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="admin/dangxuat"><i class="fa fa-sign-out fa-fw">::</i>Đăng Xuất</a>
                        </li>
                        @endif
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
<div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li class="alert-info">
                            <a href="#"><i class="fa fa-dashboard fa-fw"></i> --- Điều Khiển</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> --- Món Ăn<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{route('danhSachMonAn')}}">Danh Sách Các Món Ăn</a>
                                </li>
                                <li>
                                    <a href="{{route('themMonAn')}}">Thêm Món Ăn</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> --- Thể Loại<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{route('danhSachTheLoai')}}">Danh Sach Các Thể Loại</a>
                                </li>
                                <li>
                                    <a href="{{route('themTheLoai')}}">Thêm Thể Loại</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-cube fa-fw"></i> --- Loại Món<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{route('danhSachLoaiMon')}}">Danh Sách Các Loại Món</a>
                                </li>
                                <li>
                                    <a href="{{route('themLoaiMon')}}">Thêm Loại Món</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                         <li>
                            <a href="#"><i class="fa fa-bars"></i> --- Công Dụng<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{route('danhSachCongDung')}}">Danh Sách Các Công Dụng</a>
                                </li>
                                <li>
                                    <a href="{{route('themCongDung')}}">Thêm Công Dụng</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-adjust"></i> --- Mục Đích<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{route('danhSachMucDich')}}">Danh Sách Các Mục Đích</a>
                                </li>
                                <li>
                                    <a href="{{route('themMucDich')}}">Thêm Mục Đích</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        {{-- <li>
                            <a href="#"><i class="fa fa-bullhorn"></i> --- Món Ăn Theo Công Dụng<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{route('danhSachCongDung')}}">Danh Sách Các Công Dụng</a>
                                </li>
                                <li>
                                    <a href="{{route('themCongDung')}}">Thêm Công Dụng</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li> --}}
                        <li>
                            <a href="#"><i class="glyphicon glyphicon-globe"></i>  --- Vùng Miền<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{route('danhSachVungMien')}}">Danh Sách Các Vùng Miền</a>
                                </li>
                                <li>
                                    <a href="{{route('themVungMien')}}">Thêm Vùng Miền</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="admin/nhahang/danhsach"><i class="fa fa-home"></i> ---  Nhà Hàng Liên Kết<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="admin/nhahang/danhsach">Danh Sach Nhà Hàng Liên Kết</a>
                                </li>
                                <li>
                                    <a href="admin/nhahang/them">Thêm Nhà Nhà Hàng Liên Kết</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="admin/info"><i class="fa fa-users fa-fw"></i> --- Tài Khoản Người Dùng<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="admin/user/danhsach">Danh Sách Tài Khoản Người Dùng</a>
                                </li>
                                <li>
                                    <a href="admin/user/them">Thêm Tài Khoản Người Dùng</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-comment-o"></i> --- Bài Viết Của Thành Viên <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Danh Sách Bài Viết</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                        <li>
                            <a href="admin/thongke/lichsu"><i class="fa fa-bar-chart"></i> --- Thống Kê <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="admin/thongke/thuchientk">Thống Kê</a></li>
                                <li><a href="admin/thongke/lichsu">Lịch Sử Thống Kê</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>  <!-- /.sidebar-collapse -->
</div>
</nav>