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
                        <form action="" method="POST">
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
                                <input type="password" class="form-control" name="password" placeholder="Mật Khẩu" required="" />
                            </div>
                            <div class="form-group">
                                <label>Xác Nhận Mật Khẩu</label>
                                <input type="password" class="form-control" name="passwordAgain" placeholder="Nhập Lại Mật Khẩu" required="" />
                            </div>
                            <hr class="alert-warning">
                            <div class="form-group">
                                <label>Ảnh Đại Diện<label>
                                <input type="file" name="Hinh" class="form-control" />
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
                            <button type="reset"  class="btn btn-warning">Đặt Lại Mặc Định</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@endsection