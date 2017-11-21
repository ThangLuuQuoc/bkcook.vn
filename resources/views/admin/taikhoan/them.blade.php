@extends('admin.layouts.index')
@section('content')
<!-- Page Content -->
 <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Tài Khoản Người Dùng
                            <small>Thêm</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
<<<<<<< HEAD
                        <form action="" method="POST" enctype="multipart/form-data">
=======
                        <form action="user/them" method="POST" enctype="multipart/form-data">
>>>>>>> 2832ba4ebe116adb1e4b07c379a83b491269de71
                            <input type="hidden" name="_token" value="{{csrf_token()}}" />
                            <div class="form-group">
                                <label>Họ Và Tên</label>
                                <input class="form-control" name="fullname" placeholder="Họ và Tên" required="" />
                            </div>
                            <div class="form-group">
                                <label>Giới Tính : </label>
                                <label class="radio-inline">
                                    <input name="rdoGT" value="1" checked="" type="radio">Nam
                                </label>
                                <label class="radio-inline">
                                    <input name="rdoGT" value="2" type="radio">Nữ
                                </label>
                                <label class="radio-inline">
                                    <input name="rdoGT" value="3" type="radio">Không Xác Định
                                </label>
                            </div>
                            <div class="form-group">
                                <label>Tuổi</label>
                                <input class="form-control" name="tuoi" placeholder="Tuổi" />
                            </div>
                            <div class="form-group">
                                <label>Công Việc Hiện Tại</label>
                                <input class="form-control" name="congviec" placeholder="Công Việc" />
                            </div>
                            <hr class="alert-warning">
                            <div class="form-group">
                                <label>Địa Chỉ Gmail</label>
                                <input type="email" class="form-control" name="email" placeholder="Gmail" required="" />
                            </div>
                            <div class="form-group">
                                <label>Tên Tài Khoản</label>
                                <input type="text" class="form-control" name="tentaikhoan" placeholder="Tên Đăng Nhập" required="" />
                            </div>
                            <div class="form-group">
                                <label>Mật Khẩu</label>
                                <input id="pass" type="password" class="form-control" name="password" placeholder="Mật Khẩu" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title=":  Mật khẩu phải chứa ít nhất một ký tự thường,một ký tự hoa,một chứ số và mật khẩu phải dài hơn 8 ký tự" required />
                            </div>
                            <div class="form-group">
                                <label>Xác Nhận Mật Khẩu</label>
                                <input id="passa" type="password" class="form-control" name="passwordAgain" placeholder="Nhập Lại Mật Khẩu" required="" />
                            </div>
                            <hr class="alert-warning">

                            <div class="form-group">
                                <label>Ảnh Đại Diện<label>
                                <input type="file" name="anh" class="form-control" required="" />
                            </div>

                            <div class="form-group">
                                <label>Nổi Bật</label>
                                <input type="text" class="form-control" name="noibat" placeholder=""/>
                            </div>

                            <div class="form-group">
                                <label>Thông Tin Cá Nhân</label>
                                <textarea class="form-control" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Loại Tài Khoản : </label>
                                <label class="radio-inline">
                                    <input name="rdoUser" value="1" type="radio">Admin-CT
                                </label>
                                <label class="radio-inline">
                                    <input name="rdoUser" value="2" checked="" type="radio">Customer
                                </label>
                            </div>

                            <button type="submit" class="btn btn-success">Thêm Thành Viên</button>
                            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                            <button type="reset"  class="btn btn-warning">Đặt Lại Mặc Định</button>

                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
</div>
<script type="text/javascript">

</script>
<!-- /#page-wrapper -->
@endsection