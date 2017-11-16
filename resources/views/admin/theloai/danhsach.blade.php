@extends('admin.layouts.index')
@section('content')

<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">     
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Thể Loại
                    <small>Danh sách</small>
                </h1>
            </div>
            <div class="col-lg-12">
                @if(Session::has('themthanhcong'))
                <div class="alert alert-success"><strong>{{Session::get('themthanhcong')}}</strong></div>
                @elseif(Session::has('suathanhcong'))
                <div class="alert alert-success"><strong>{{Session::get('suathanhcong')}}</strong></div>
                @endif
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">         
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Tên</th>
                        <th>Tên không dấu</th>
                        <th>Ngày tạo</th>
                        <th>Ngày cập nhật</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($danh_sach as $ds)
                    <tr class="odd gradeX" align="center">                      
                        <td>{{$ds -> id}}</td>
                        <td>{{$ds -> ten}}</td>
                        <td>{{$ds -> tenkhongdau}}</td>
                        <td>{{$ds -> created_at}}</td>
                        <td>{{$ds -> updated_at}}</td>                                
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="{{route('xoaTheLoai', $ds -> id)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')""> Xóa</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{route('suaTheLoai', $ds -> id)}}">Sửa</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>       
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@endsection