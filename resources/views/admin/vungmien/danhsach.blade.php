@extends('admin.layouts.index')
@section('content')
<!-- Page Content -->
<style type="text/css">
th,td {
    text-align: justify;
    max-width: 250px;
}
</style>
<script type="text/javascript">
    function checkout(){
            return confirm('bạn có muốn xoá không?');
        }
</script>
<!-- Page Content -->
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Vùng Miền
                            <small>Danh sách</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    @if(!empty($vungmien))
                    
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>Tên</th>
                                <th>tên không dấu</th>
                                 <th>Vị trí</th>
                                 <th>Giới thiệu</th>
                                <th>Xoá</th>
                                <th>Sửa</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($vungmien as $md)
                            <tr class="even gradeC" align="center">
                                <td>{{$md->ten}}</td>
                                <td>{{$md->tenkhongdau}}</td>
                                <td>{{$md->vitri}}</td>
                                <td>{{$md->gioithieu}}</td>
                                <td class="center"><i class="fa fa-trash-o fa-fw"></i><a href="{{route('xoaVungMien',$md->id)}}" onclick="return confirm('bạn có muốn xoá không?');">Xoá</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{route('suaVungMien',$md->id)}}">Sửa</a></td>
                            </tr>
                             @endforeach
                        </tbody>
                    </table>
                    @else
                        <h3 class="text-muted">không có loại công dụng nào</h3>
                    @endif
                </div>
                <!-- /.row -->
            </div>
<!-- /.container-fluid -->
</div>
@endsection