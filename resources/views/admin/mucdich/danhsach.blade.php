@extends('admin.layouts.index')
@section('content')
<!-- Page Content -->
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
                        <h1 class="page-header">Mục Đích
                            <small>Danh Sách</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    @if(isset($mucdich))
                    
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>Tên</th>
                                <th>Tên không dấu</th>
                                 <th>ngày tạo</th>
                                <!-- <th>Status</th> -->
                                <th>Xoá</th>
                                <th>Sửa</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($mucdich as $md)
                            <tr class="even gradeC" align="center">
                                <td>{{$md->ten}}</td>
                                <td>{{$md->tenkhongdau}}</td>
                                <td>{{$md->created_at}}</td>
                                <td class="center text-info"><i class="fa fa-trash-o fa-fw"></i><a href="{{route('xoaMucDich',$md->id)}}" onclick="return confirm('bạn có muốn xoá không?');">Xoá</a></td>
                                <td class="center text-info"><i class="fa fa-pencil fa-fw"></i> <a href="{{route('suaMucDich',$md->id)}}">Sửa</a></td>
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