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
                        <h1 class="page-header">Loại Món
                            <small>Danh sách</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    @if(isset($loaimon))
                    
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>Tên</th>
                                <th>Tên không dấu</th>
                                <th>Thuộc thể loại</th>
                                 <th>ngày tạo</th>
                                <!-- <th>Status</th> -->
                                <th>Xoá</th>
                                <th>Sửa</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($loaimon as $lm)
                            <tr class="even gradeC" align="center">
                                <td>{{$lm->ten}}</td>
                                <td>{{$lm->tenkhongdau}}</td>
                                <td>@foreach($theloai as $tl) 
                                        @if($tl->id == $lm->id_theloai) 
                                            {{$tl->ten}} 
                                            @break
                                        @endif
                                    @endforeach
                                </td>
                                <td>{{$lm->created_at}}</td>
                                <!-- <td>Ẩn</td> -->
                                <td class="center text-info"><i class="fa fa-trash-o fa-fw"></i><a href="{{route('xoaLoaiMon',$lm->id)}}" onclick="return confirm('bạn có muốn xoá không?');">Xoá</a></td>
                                <td class="center text-info"><i class="fa fa-pencil fa-fw"></i> <a href="{{route('suaLoaiMon',$lm->id)}}">Sửa</a></td>
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