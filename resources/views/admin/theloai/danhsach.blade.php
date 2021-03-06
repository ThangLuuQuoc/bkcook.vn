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
            <table class="table table-striped table-bordered table-hover" id="dataTables-example" style="table-layout:fixed;">         
                <thead>
                    <tr align="center">
                        <th style="overflow:hidden;" title="ID">ID</th>
                        <th style="overflow:hidden;" title="Tên">Tên</th>
                        <th style="overflow:hidden;" title="Tên không dấu">Tên không dấu</th>
                         <th style="overflow:hidden;" title="Ảnh">Ảnh</th>
                        <th style="overflow:hidden;" title="Ngày tạo">Ngày tạo</th>
                        <th style="overflow:hidden;" title="Ngày cập nhật">Ngày cập nhật</th>
                        <th style="overflow:hidden;" title="Xoá thể loại">Xoá</th>
                        <th style="overflow:hidden;" title="Sửa thể loại">Sửa</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($theloai as $ds)
                    <tr class="odd gradeX" align="center">                      
                        <td style="overflow:hidden;text-overflow:ellipsis;white-space:nowrap;">{{$ds -> id}}</td>
                        <td style="overflow:hidden;text-overflow:ellipsis;white-space:nowrap;"  title="{{$ds->ten}}">{{$ds -> ten}}</td>
                        <td style="overflow:hidden;text-overflow:ellipsis;white-space:nowrap;"  title="{{$ds->tenkhongdau}}">{{$ds -> tenkhongdau}}</td>
                         <td><img src="{{$ds->anh}}" alt="" width="50px" height="50px"></td>
                        <td style="overflow:hidden;text-overflow:ellipsis;white-space:nowrap;"  title="{{$ds->created_at}}">{{$ds -> created_at}}</td>
                        <td style="overflow:hidden;text-overflow:ellipsis;white-space:nowrap;"  title="{{$ds->updated_at}}">{{$ds -> updated_at}}</td>                                
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