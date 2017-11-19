<header id="main_menu" class="header navbar-fixed-top">
    <div class="main_menu_bg">
        <div class="container-fluid">
            <div class="row">
                <div class="nave_menu">
                    <nav class="navbar navbar-default" id="navmenu">
                        <div class="container-fluid">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand" href="trangchu">
                                    <img src="vendor_customer/assets/images/logo.png"/>
                                </a>
                            </div>

                            <!-- Collect the nav links, forms, and other content for toggling -->

                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav navbar-right">
                                    <li><a href="trangchu">Trang Chủ</a></li>
                                    <li><a href="#theloai">Thể Loại</a></li>
                                    <li><a href="#loaimon">Loại Món</a></li>
                                    <li><a href="#mucdich">Mục Đích</a></li>
                                    <li><a href="#vungmien">Vùng Miền</a></li>
                                    <li>
                                        <a href="#" data-toggle="dropdown" role="button" aria-haspopup="true"
                                               aria-expanded="false">
                                            <span class="fa fa-search"></span></a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                    <form class="navbar-form" role="search">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="Search">
                                                        </div>
                                                    </form>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="#monan">Món Ăn</a></li>
                                    <li><a href="dangbai">Bài Viết</a></li>
                                    <li><a href="#nhahang">Nhà Hàng Liên Kết</a></li>
                                    <li><a href="#thanhvien">Top Thành Viên</a></li>
                                    <li><a href="javascript:void(0)" class="signin">Đăng Nhập</a></li>
                                    <li><a href="javascript:void(0)" class="signup">Đăng Ký</a></li>
                                    
<!--
                                     <li>
                                        <a href="#" data-toggle="dropdown" role="button" aria-haspopup="true"
                                               aria-expanded="false">
                                            <span class="fa fa-search"></span></a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <div class="container float-right">
                                                    <form class="navbar-form" role="search">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="Search">
                                                        </div>
                                                    </form>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
-->
                                </ul>
                            </div>
                            
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal signin-->
      <div class="modal fade" id="modal-signin" role="dialog">
        <div class="modal-dialog">
        
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header" style="padding:35px 50px;">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4><span><i class="fa fa-lock" aria-hidden="true"></i></span> Login</h4>
            </div>
            <div class="modal-body" style="padding:40px 50px;">
              <form role="form">
                <div class="form-group">
                  <label for="usrname" style="color: black"><span><i class="fa fa-user" aria-hidden="true"></i></span> Username</label>
                  <input type="text" class="form-control" id="usrname" placeholder="Enter email">
                </div>
                <div class="form-group" >
                  <label for="psw" style="color: black"><span><i class="fa fa-eye" aria-hidden="true"></i></span> Password</label>
                  <input type="password" class="form-control" id="psw" placeholder="Enter password">
                </div>
                <div class="checkbox">
                  <label><input type="checkbox" value="" checked>Remember me</label>
                </div>
                  <button type="submit" class="btn btn-success btn-block" id="btn-signin"><span><i class="fa fa-power-off" aria-hidden="true"></i></span> Login</button>
              </form>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-danger btn-default pull-left" id="btn-signin-cancel" data-dismiss="modal"><span ><i class="fa fa-times" aria-hidden="true"></i></span> Cancel</button>
              <p>Not a member? <a href="javascript:void(0)" id="a-signup">Sign Up</a></p>
              <p>Forgot <a href="#">Password?</a></p>
            </div>
          </div>
          
        </div>
      </div>
<!-- Modal signup-->
      <div class="modal fade" id="modal-signup" role="dialog">
        <div class="modal-dialog">
        
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header" style="padding:35px 50px;">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4><span><i class="fa fa-lock" aria-hidden="true"></i></span> Sign up</h4>
            </div>
            <div class="modal-body" style="padding:40px 50px;">
              <form role="form">
                <div class="form-group">
                  <label for="usrname" style="color: black"><span><i class="fa fa-user" aria-hidden="true"></i></span> Username</label>
                  <input type="text" class="form-control" id="usrname" placeholder="Enter name">
                </div>
                <div class="form-group" >
                  <label for="psw" style="color: black"><span><i class="fa fa-envelope" aria-hidden="true"></i></span> Email</label>
                  <input type="text" class="form-control" id="psw" placeholder="Enter email">
                </div>
                <div class="form-group" >
                  <label for="psw" style="color: black"><span><i class="fa fa-eye" aria-hidden="true"></i></span> Password</label>
                  <input type="password" class="form-control" id="psw" placeholder="Enter password">
                </div>
                <div class="form-group" >
                  <label for="psw" style="color: black"><span><i class="fa fa-eye" aria-hidden="true"></i></span> Retype Password</label>
                  <input type="password" class="form-control" id="psw" placeholder="Enter password">
                </div>
                <div class="checkbox">
                  <label><input type="checkbox" value="" checked>Remember me</label>
                </div>
                  <button type="submit" class="btn btn-success btn-block" id="btn-signin"><span><i class="fa fa-power-off" aria-hidden="true"></i></span> Sign up</button>
              </form>
            </div>
          </div>
          
        </div>
      </div>
</header> <!--End of header -->
