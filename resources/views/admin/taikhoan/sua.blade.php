@extends('admin.layouts.index')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Tài Khoản Thành Viên:<i style="color: red;">{{ $user->tentaikhoan }}</i>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <hr class="alert-danger">
                    <div style="text-align: center">
                        <h2>Sửa Tài Khoản</h2>
                    </div>
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="admin/user/sua/{{$user->id}}" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{csrf_token()}}" />
                            <div class="form-group">
                                <label>Họ Và Tên</label>
                                <input class="form-control" value="{{ $user->hovaten }}" name="fullname" placeholder="Họ và Tên" required="" />
                            </div>
                            <div class="form-group">
                                <label>Giới Tính : </label>
                                <label class="radio-inline">
                                    <input name="rdoGT" value="1"
                                    @if ($user->gioitinh == "Nam")
                                        {{"checked"}}
                                    @endif
                                    type="radio">
                                    Nam
                                </label>
                                <label class="radio-inline">
                                    <input name="rdoGT" value="2"
                                    @if ($user->gioitinh == "Nữ")
                                        {{"checked"}}
                                    @endif
                                        type="radio">
                                    Nữ
                                </label>
                                <label class="radio-inline">
                                    <input name="rdoGT" value="3"
                                    @if ($user->gioitinh == "Không Xác Định")
                                        {{"checked"}}
                                    @endif
                                     type="radio">
                                     Không Xác Định
                                </label>
                            </div>
                            <div class="form-group">
                                <label>Tuổi</label>
                                <input class="form-control" value="{{ $user->tuoi }}" name="tuoi" placeholder="Tuổi" />
                            </div>
                            <div class="form-group">
                                <label>Công Việc Hiện Tại</label>
                                <input class="form-control" value="{{ $user->congviec }}" name="congviec" placeholder="Công Việc" />
                            </div>
                            <hr class="alert-warning">
                            <div class="form-group">
                                <label>Địa Chỉ Gmail</label>
                                <input type="email" class="form-control" value="{{ $user->email }}" name="email" placeholder="Gmail" required="" />
                            </div>
                            <div class="form-group">
                                <label>Tên Tài Khoản</label>
                                <input type="text" class="form-control" value="{{ $user->tentaikhoan }}" name="tentaikhoan" placeholder="Tên Đăng Nhập" required="" />
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
                            <label>Ảnh Đại Diện</label>
                            <br>
                            <div class="form-group">
                                <img src="{{ $user->anhdaidien }}" alt="Kết nối Internet không ổn định" style="width: 580px;height: 350px">
                            </div>
                            <hr class="bg-danger">
                            <div class="form-group">
                                <label>Thay Đổi Ảnh Đại Diện<label>
                                <input type="file" name="Hinh" required="" />
                            </div>

                            <div class="form-group">
                                <label>Nổi Bật</label>
                                <input type="text" class="form-control" value="{{ $user->noibat }}" name="noibat" placeholder=""/>
                            </div>
                            <div class="form-group">
                                <label>Loại Tài Khoản : </label>
                                <label class="radio-inline">
                                    <input name="rdoUser" value="1"
                                    @if ($user->level == 1)
                                        {{"checked"}}
                                    @endif
                                     type="radio">Admin-CT
                                </label>
                                <label class="radio-inline">
                                    <input name="rdoUser" value="2"
                                    @if ($user->level == 2)
                                        {{"checked"}}
                                    @endif
                                     type="radio">Customer
                                </label>
                            </div>
                            <button type="submit" class="btn btn-success">Sưa Thông Tin Tài Khoản</button>
                            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                            <button type="reset"  class="btn btn-warning">Đặt Lại Mặc Định</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
        <!-- /.container-fluid -->
</div>
@endsection