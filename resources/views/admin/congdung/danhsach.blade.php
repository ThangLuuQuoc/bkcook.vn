@extends('admin.layouts.index')
@section('content')
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
                        <h1 class="page-header">Công Dụng
                            <small>List</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    @if(isset($congdung))
                    
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>Name</th>
                                <th>ten khong dau</th>
                                 <th>date</th>
                                <!-- <th>Status</th> -->
                                <th>Add</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($congdung as $cd)
                            <tr class="even gradeC" align="center">
                                <td>{{$cd->ten}}</td>
                                <td>{{$cd->tenkhongdau}}</td>
                                <td>{{$cd->created_at}}</td>
                                <!-- <td>Ẩn</td> -->
                                <td class="center"><i class="fa fa-plus fa-fw"></i><a href="{{route('themCongDung')}}"> Add</a></td>
                                <td class="center"><i class="fa fa-trash-o fa-fw"></i><a href="{{route('xoaCongDung',$cd->id)}}" onclick="return confirm('bạn có muốn xoá không?');">Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{route('suaCongDung',$cd->id)}}">Edit</a></td>
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