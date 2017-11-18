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
            <table class="table table-striped table-bordered table-hover" id="dataTables-example" style="table-layout:fixed;">         
                <thead>
                    <tr align="center">
                        <th style="overflow:hidden;" title="ID">ID</th>
                        <th style="overflow:hidden;" title="Tên món ăn">Tên món ăn</th>
                        <th style="overflow:hidden;" title="Giới thiệu">Giới thiệu</th>
                        <th style="overflow:hidden;" title="Nguyên liệu chính">Nguyên liệu chính</th>
                        <th style="overflow:hidden;" title="Nguyên liệu phụ">Nguyên liệu phụ</th>
                        <th style="overflow:hidden;" title="Gia vị">Gia vị</th>
                        <th style="overflow:hidden;" title="Độ khó">Độ khó</th>
                        <th style="overflow:hidden;" title="Số bước">Số bước</th>
                        <th style="overflow:hidden;" title="Số lượt xem">Số lượt xem</th>
                        <th style="overflow:hidden;" title="Số lượt thích">Số lượt thích</th>
                        <th style="overflow:hidden;" title="Số bước thực hiện">Số bước thực hiện</th>
                        <th style="overflow:hidden;" title="Mục đích ID">Mục đích ID</th>
                        <th style="overflow:hidden;" title="Loại món ID">Loại món ID</th>
                        <th style="overflow:hidden;" title="Công dụng ID">Công dụng ID</th>
                        <th style="overflow:hidden;" title="Vùng miền ID">Vùng miền ID</th>
                        <th style="overflow:hidden;" title="Ngày tạo">Ngày tạo</th>
                        <th style="overflow:hidden;" title="Ngày cập nhật">Ngày cập nhật</th>
                        <th style="overflow:hidden;" title="Xóa">Xóa</th>
                        <th style="overflow:hidden;" title="Sửa">Sửa</th>
                        <th style="overflow:hidden;" title="Thêm bước nấu">Thêm bước nấu</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($monan as $ma)
                    <tr class="odd gradeX" align="center">                      
                        <td style="overflow:hidden;text-overflow:ellipsis;white-space:nowrap;" title="{{$ma -> id}}">{{$ma -> id}}</td>
                        <td style="overflow:hidden;text-overflow:ellipsis;white-space:nowrap;" title="{{$ma -> ten_monan}}">{{$ma -> ten_monan}}</td>
                        <td style="overflow:hidden;text-overflow:ellipsis;white-space:nowrap;" title="{{$ma -> gioithieu}}">{{$ma -> gioithieu}}</td>
                        <td style="overflow:hidden;text-overflow:ellipsis;white-space:nowrap;" title="{{$ma -> nguyen_lieu_chinh}}">{{$ma -> nguyen_lieu_chinh}}</td>
                        <td style="overflow:hidden;text-overflow:ellipsis;white-space:nowrap;" title="{{$ma -> nguyen_lieu_phu}}">{{$ma -> nguyen_lieu_phu}}</td>
                        <td style="overflow:hidden;text-overflow:ellipsis;white-space:nowrap;" title="{{$ma -> giavi}}">{{$ma -> giavi}}</td>
                        <td style="overflow:hidden;text-overflow:ellipsis;white-space:nowrap;" title="{{$ma -> do_kho}}">{{$ma -> do_kho}}</td>
                        <td style="overflow:hidden;text-overflow:ellipsis;white-space:nowrap;" title="{{$ma -> so_buoc}}">{{$ma -> so_buoc}}</td>
                        <td style="overflow:hidden;text-overflow:ellipsis;white-space:nowrap;" title="{{$ma -> so_luot_xem}}">{{$ma -> so_luot_xem}}</td>
                        <td style="overflow:hidden;text-overflow:ellipsis;white-space:nowrap;" title="{{$ma -> so_luot_thich}}">{{$ma -> so_luot_thich}}</td>
                        <td style="overflow:hidden;text-overflow:ellipsis;white-space:nowrap;" title="{{$ma -> so_buoc}}">{{$ma -> so_buoc}}</td>
                        <td style="overflow:hidden;text-overflow:ellipsis;white-space:nowrap;" title="{{$ma -> id_mucdich}}">{{$ma -> id_mucdich}}</td>
                        <td style="overflow:hidden;text-overflow:ellipsis;white-space:nowrap;" title="{{$ma -> id_loaimon}}">{{$ma -> id_loaimon}}</td>
                        <td style="overflow:hidden;text-overflow:ellipsis;white-space:nowrap;" title="{{$ma -> id_congdung}}">{{$ma -> id_congdung}}</td>
                        <td style="overflow:hidden;text-overflow:ellipsis;white-space:nowrap;" title="{{$ma -> id_vungmien}}">{{$ma -> id_vungmien}}</td>
                        <td style="overflow:hidden;text-overflow:ellipsis;white-space:nowrap;" title="{{$ma -> created_at}}">{{$ma -> created_at}}</td>
                        <td style="overflow:hidden;text-overflow:ellipsis;white-space:nowrap;" title="{{$ma -> updated_at}}">{{$ma -> updated_at}}</td>
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