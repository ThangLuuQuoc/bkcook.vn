@extends('admin.layouts.index')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">     
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Món Ăn
                    <small>Danh sách</small>
                </h1>
            </div>
            <div class="col-lg-12">
                @if(Session::has('themmonanthanhcong'))
                <div class="alert alert-success"><strong>{{Session::get('themmonanthanhcong')}}</strong></div>
                @elseif(Session::has('suamonanthanhcong'))
                <div class="alert alert-success"><strong>{{Session::get('suamonanthanhcong')}}</strong></div>
                @elseif(Session::has('thembuocnauthanhcong'))
                <div class="alert alert-success"><strong>{{Session::get('thembuocnauthanhcong')}}</strong></div>
                @endif
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">         
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Tên món ăn</th>
                        <th>Giới thiệu</th>
                        <th>Nguyên liệu chính</th>
                        <th>Nguyên liệu phụ</th>
                        <th>Gia vị</th>
                        <th>Độ khó</th>
                        <th>Số bước</th>
                        <th>Số lượt xem</th>
                        <th>Số lượt thích</th>
                        <th>Số bước thực hiện</th>
                        <th>Mục đích ID</th>
                        <th>Loại món ID</th>
                        <th>Công dụng ID</th>
                        <th>Vùng miền ID</th>
                        <th>Ngày tạo</th>
                        <th>Ngày cập nhật</th>
                        <th>Delete</th>
                        <th>Edit</th>
                        <th>Add</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($monan as $ma)
                    <tr class="odd gradeX" align="center">                      
                        <td>{{$ma -> id}}</td>
                        <td>{{$ma -> ten_monan}}</td>
                        <td>{{$ma -> gioithieu}}</td>
                        <td>{{$ma -> nguyen_lieu_chinh}}</td>
                        <td>{{$ma -> nguyen_lieu_phu}}</td>
                        <td>{{$ma -> giavi}}</td>
                        <td>{{$ma -> do_kho}}</td>
                        <td>{{$ma -> so_buoc}}</td>
                        <td>{{$ma -> so_luot_xem}}</td>
                        <td>{{$ma -> so_luot_thich}}</td>
                        <td>{{$ma -> so_buoc}}</td>
                        <td>{{$ma -> id_mucdich}}</td>
                        <td>{{$ma -> id_loaimon}}</td>
                        <td>{{$ma -> id_congdung}}</td>
                        <td>{{$ma -> id_vungmien}}</td>
                        <td>{{$ma -> created_at}}</td>
                        <td>{{$ma -> updated_at}}</td>
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="{{route('xoaMonAn', $ma -> id)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')""> Xóa</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{route('suaMonAn', $ma -> id)}}">Sửa</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{route('themBuocNau', $ma -> id)}}">Thêm bước nấu</a></td>
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