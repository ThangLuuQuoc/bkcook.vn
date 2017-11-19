@extends('admin.layouts.index')
@section('content')
<!-- Page Content -->
<script>
    function validateForm() {
        var x = document.forms["suaTheLoai"]["ten"].value.trim();
        if (x == "") {
            alert("Bạn chưa nhập tên thể loại");
            return false;
        } else {
            return true;
        }
    }
</script>
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Thể loại
                    <small>Sửa</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                <form name="suaTheLoai" action="{{route('suaTheLoai', $theloai -> id)}}" method="POST" onsubmit="return validateForm()">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-group">
                        <label>Tên thể loại</label>
                        <input class="form-control" name="ten" value="{{$theloai -> ten}}" required />
                    </div>
                    <button type="submit" class="btn btn-default">Sửa</button>
                    <button type="button" class="btn btn-default" onclick="window.location='{{ URL::previous() }}'">Huỷ bỏ</button>
                    <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        @endsection