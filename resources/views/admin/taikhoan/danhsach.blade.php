@extends('admin.layouts.index')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Tài Khoản Người Dùng
                            <small>Danh Sách</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Họ-Tên</th>
                                <th>Giới Tính</th>
                                <th>Tuổi</th>
                                <th>Nghề Nghiệp</th>
                                <th>Gmail</th>
                                <th>Tên Tài Khoản</th>
                                <th>Password</th>
                                <th>Loại Tài Khoản</th>
                                <th>Nổi Bật</th>
                                <th>Ảnh Đại Diện</th>
                                <th>Ngày Lập</th>
                                <th>Sửa Tài Khoản</th>
                                <th>Xóa Tài Khoản</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="odd gradeX" align="center">
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/user/sua">Sửa</a></td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/user/xoa">Xóa</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
<!-- /.container-fluid -->
</div>
@endsection