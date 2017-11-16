@extends('admin.layouts.index')
@section('content')

<script>
    function validateForm() {
        var a = document.forms["suaMonAn"]["tenMonAn"].value.trim();
        var b = document.forms["suaMonAn"]["gioiThieu"].value.trim();
        var c = document.forms["suaMonAn"]["nLChinh"].value.trim();
        var d = document.forms["suaMonAn"]["nLPhu"].value.trim();
        var e = document.forms["suaMonAn"]["giaVi"].value.trim();
        var f = document.forms["suaMonAn"]["doKho"].value.trim();
        var g = document.forms["suaMonAn"]["soBuoc"].value.trim();

        if (a == "") {
            alert("Bạn chưa nhập tên món ăn");
            return false;
        } else if (b == "") {
            alert("Bạn chưa nhập giới thiệu");
            return false;
        } else if (c == "") {
            alert("Bạn chưa nhập nguyên liệu chính");
            return false;
        } else if (d == "") {
            alert("Bạn chưa nhập nguyên liệu phụ");
            return false;
        } else if (e == "") {
            alert("Bạn chưa nhập gia vị");
            return false;
        } else if (f == "") {
            alert("Bạn chưa nhập độ khó");
            return false;
        } else if (g == "") {
            alert("Bạn chưa nhập số bước");
            return false;
        } else if (isNaN(g)) {
            alert("Số bước phải là chữ số");
            return false;
        } else {
            return true;
        }
    }

    function addBox() {}
</script>

<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Món Ăn
                    <small>Sửa</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                <form action="{{route('suaMonAn', $monan -> id)}}" method="POST" name="suaMonAn" onsubmit="return validateForm()">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-group">
                        <label>Tên món ăn</label>
                        <input class="form-control" name="tenMonAn" value="{{$monan -> ten_monan}}" required="" />
                    </div>
                    <div class="form-group">
                        <label>Giới thiệu</label>
                        <input class="form-control" name="gioiThieu" value="{{$monan -> gioithieu}}" required="" />
                    </div>
                    <div class="form-group">
                        <label>Nguyên liệu chính</label>
                        <input class="form-control" name="nLChinh" value="{{$monan -> nguyen_lieu_chinh}}" required=""/>
                    </div>
                    <div class="form-group">
                        <label>Nguyên liệu phụ</label>
                        <input class="form-control" name="nLPhu" value="{{$monan -> nguyen_lieu_phu}}" required=""/>
                    </div>
                    <div class="form-group">
                        <label>Gia vị</label>
                        <input class="form-control" name="giaVi" value="{{$monan -> giavi}}" required=""/>
                    </div>
                    <div class="form-group">
                        <label>Độ khó</label>
                        <input class="form-control" name="doKho" value="{{$monan -> do_kho}}" required=""/>
                    </div>
                    <div class="form-group">
                        <label>Số bước thực hiện</label>
                        <input class="form-control" name="soBuoc" value="{{$monan -> so_buoc}}" required="" />
                    </div>
                    <div class="form-group">
                        <label>Tên mục đích</label>                       
                        <select class="form-control" name="mucDich">
                            @foreach($mucdich as $md)
                            <option value="{{$md -> id}}">{{$md -> ten}}</option>
                            @endforeach
                        </select>                       
                    </div>
                    <div class="form-group">
                        <label>Tên loại món</label>                       
                        <select class="form-control" name="loaiMon">
                            @foreach($loaimon as $lm)
                            <option value="{{$lm -> id}}">{{$lm -> ten}}</option>
                            @endforeach
                        </select>                       
                    </div>
                    <div class="form-group">
                        <label>Tên công dụng</label>                       
                        <select class="form-control" name="congDung">
                            @foreach($congdung as $cd)
                            <option value="{{$cd -> id}}">{{$cd -> ten}}</option>
                            @endforeach
                        </select>                       
                    </div>
                    <div class="form-group">
                        <label>Tên vùng miền</label>                       
                        <select class="form-control" name="vungMien">
                            @foreach($vungmien as $vm)
                            <option value="{{$vm -> id}}">{{$vm -> ten}}</option>
                            @endforeach
                        </select>                        
                    </div>
                    <div class="form-group">
                        <label>Các bước nấu</label>
                        @foreach($cacbuocnau as $cbn)                        
                        <textarea name="cacBuocNau" class="ckeditor">{{$cbn -> noidung}}</textarea><br>
                        @endforeach
                    </div>                            
                    <button type="submit" class="btn btn-default">Sửa</button>                   
                    <button type="button" class="btn btn-default" onclick="window.location='{{ URL::previous() }}'">Cancel</button>
                    <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
        @endsection