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
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example" style="table-layout:fixed;">
                        <thead>
                            <tr align="center">
                                <th style="overflow:hidden;" title="Tên">Tên</th>
                                <th style="overflow:hidden;" title="Tên không dấu">Tên không dấu</th>
                                <th style="overflow:hidden;" title="Thuộc thể loại">Thuộc thể loại</th>
                                 <th style="overflow:hidden;" title="ảnh">Ảnh</th>
                                 <th style="overflow:hidden;" title="Ngày tạo">ngày tạo</th>
                                <th style="overflow:hidden;" title="Xoá loại món">Xoá</th>
                                <th style="overflow:hidden;" title="Sửa loại món">Sửa</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($loaimon as $lm)
                            <tr class="even gradeC" align="center">
                                <td style="overflow:hidden;text-overflow:ellipsis;white-space:nowrap;" title="{{$lm->ten}}">{{$lm->ten}}</td>
                                <td style="overflow:hidden;text-overflow:ellipsis;white-space:nowrap;" title="{{$lm->tenkhongdau}}">{{$lm->tenkhongdau}}</td>
                                <td style="overflow:hidden;text-overflow:ellipsis;white-space:nowrap;">@foreach($theloai as $tl) 
                                        @if($tl->id == $lm->id_theloai) 
                                            {{$tl->ten}} 
                                            @break
                                        @endif
                                    @endforeach
                                </td>
                                <td><img src="{{$lm->anh}}" alt="" width="50px" height="50px"></td>
                                <td style="overflow:hidden;text-overflow:ellipsis;white-space:nowrap;" title="{{$lm->created_at}}">{{$lm->created_at}}</td>
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