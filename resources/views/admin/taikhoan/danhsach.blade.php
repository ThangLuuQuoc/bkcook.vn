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
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example"style="table-layout:fixed;">
                            <thead>
                                <tr align="center">
                                    <th style="overflow:hidden;" title="ID">ID</th>
                                    <th style="overflow:hidden;" title="Họ và Tên">Họ-Tên</th>
                                    <th style="overflow:hidden;" title="Giới Tính">Giới Tính</th>
                                    <th style="overflow:hidden;" title="Tuổi">Tuổi</th>
                                    <th style="overflow:hidden;" title="Nghề Nghiệp">Nghề Nghiệp</th>
                                    <th style="overflow:hidden;" title="Tài Khoản Gmail">Gmail</th>
                                    <th style="overflow:hidden;" title="Tên Tài Khoản">Tên Tài Khoản</th>
                                    <th style="overflow:hidden;" title="Password">Password</th>
                                    <th style="overflow:hidden;" title="Loại Tài Khoản">Loại Tài Khoản</th>
                                    <th style="overflow:hidden;" title="Nổi Bật">Nổi Bật</th>
                                    <th style="overflow:hidden;" title="Ảnh Đại Diện">Ảnh Đại Diện</th>
                                    <th style="overflow:hidden;" title="Ngày Lập Tài Khoản">Ngày Lập</th>
                                    <th style="overflow:hidden;" title="Sửa Tài Khoản">Sửa Tài Khoản</th>
                                    <th style="overflow:hidden;" title="Xóa Tài Khoản">Xóa Tài Khoản</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $us)
                                <tr class="odd gradeX"align="center">
                                    <td style="overflow:hidden;text-overflow:ellipsis;white-space:nowrap;">{{$us->id }}</td>

                                    <td style="overflow:hidden;text-overflow:ellipsis;white-space:nowrap;" data-toggle="tooltip" data-placement="top" title="{{$us->hovaten }}">{{$us->hovaten }}</td>
                                    <td style="overflow:hidden;text-overflow:ellipsis;white-space:nowrap;" title="{{$us->gioitinh }}">{{$us->gioitinh }}</td>
                                    <td style="overflow:hidden;text-overflow:ellipsis;white-space:nowrap;" title="{{$us->tuoi }}">{{$us->tuoi }}</td>
                                    <td style="overflow:hidden;text-overflow:ellipsis;white-space:nowrap;" title="{{$us->congviec }}">{{$us->congviec }}</td>
                                    <td style="overflow:hidden;text-overflow:ellipsis;white-space:nowrap;" title="{{$us->email }}">{{$us->email }}</td>
                                    <td style="overflow:hidden;text-overflow:ellipsis;white-space:nowrap;" title="{{$us->tentaikhoan }}">{{$us->tentaikhoan }}</td>
                                    <td style="overflow:hidden;text-overflow:ellipsis;white-space:nowrap;" title="{{$us->password }}">{{$us->password }}</td>
                                    <td style="overflow:hidden;text-overflow:ellipsis;white-space:nowrap;">{{$us->level }}</td>
                                    <td style="overflow:hidden;text-overflow:ellipsis;white-space:nowrap;">{{$us->noibat }}</td>

<<<<<<< HEAD
                                    <td style="overflow:hidden;text-overflow:ellipsis;white-space:nowrap;"><img src="{{$us->anhdaidien }}"alt="" width="50px" height="50px"></td>
=======
                                    <td style="overflow:hidden;text-overflow:ellipsis;white-space:nowrap;"><img src="{{$us->anhdaidien }}" alt="" width="50px" height="50px"></td>
>>>>>>> 2832ba4ebe116adb1e4b07c379a83b491269de71
                                    <td style="overflow:hidden;text-overflow:ellipsis;white-space:nowrap;" title="{{$us->created_at }}">{{$us->created_at }}</td>

                                    <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="user/sua/{{$us->id }}">Sửa</a></td>
                                    <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="user/xoa/{{$us->id }}">Xóa</a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                </div>
                <!-- /.row -->
            </div>
<!-- /.container-fluid -->
<script type="text/javascript"charset="utf-8"async defer>

</script>
</div>
@endsection