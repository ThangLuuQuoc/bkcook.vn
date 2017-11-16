@extends('admin.layouts.index')
@section('content')

<script>
    function validateForm() {
        var a = document.forms["themMonAn"]["tenMonAn"].value.trim();
        var b = document.forms["themMonAn"]["gioiThieu"].value.trim();
        var c = document.forms["themMonAn"]["nLChinh"].value.trim();
        var d = document.forms["themMonAn"]["nLPhu"].value.trim();
        var e = document.forms["themMonAn"]["giaVi"].value.trim();
        var f = document.forms["themMonAn"]["doKho"].value.trim();
        var g = document.forms["themMonAn"]["soBuoc"].value.trim();
        var h = document.forms["themMonAn"]["noiDungBuoc"].value.trim();

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
        // } else if (h == "") {
        //     alert("Bạn chưa nhập nội dung các bước");
        //     return false;
        } else {
            return true;
        }
    }
</script>

<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Món Ăn
                    <small>Thêm</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                <form action="{{route('themMonAn')}}" method="POST" name="themMonAn" onsubmit="return validateForm()">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-group">
                        <label>Tên món ăn</label>
                        <input class="form-control" name="tenMonAn" placeholder="Nhập tên món ăn" required="" />
                    </div>
                    <div class="form-group">
                        <label>Giới thiệu</label>
                        <input class="form-control" name="gioiThieu" placeholder="Nhập giới thiệu" required="" />
                    </div>
                    <div class="form-group">
                        <label>Nguyên liệu chính</label>
                        <input class="form-control" name="nLChinh" placeholder="Nhập nguyên liệu chính" required=""/>
                    </div>
                    <div class="form-group">
                        <label>Nguyên liệu phụ</label>
                        <input class="form-control" name="nLPhu" placeholder="Nhập nguyên liệu phụ" required=""/>
                    </div>
                    <div class="form-group">
                        <label>Gia vị</label>
                        <input class="form-control" name="giaVi" placeholder="Nhập gia vị" required=""/>
                    </div>
                    <div class="form-group">
                        <label>Độ khó</label>
                        <input class="form-control" name="doKho" placeholder="Nhập độ khó" required=""/>
                    </div>
                    <div class="form-group">
                        <label>Số bước thực hiện</label>
                        <input class="form-control" name="soBuoc" placeholder="Nhập số bước thực hiện (chữ số)" required="" />
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
                        <textarea name="noiDungBuoc" class="ckeditor"></textarea>
                    </div>
                    <button type="submit" class="btn btn-default">Thêm</button>                   
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