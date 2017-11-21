@extends('admin.layouts.index')
@section('content')
<!-- Page Content -->
<script>
    function validateForm() {
        var x = document.forms["themTheLoai"]["ten"].value.trim();
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
                <h1 class="page-header">Thể Loại
                    <small>Thêm</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->                      
            <div class="col-lg-7" style="padding-bottom:120px">
                <form name="themTheLoai" action="{{route('themTheLoai')}}" enctype="multipart/form-data" method="POST" onsubmit="return validateForm()">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-group">
                        <label>Tên thể loại</label>
                        <input class="form-control" name="ten" placeholder="Nhập tên thể loại" required="" />
                    </div>
                     <div class="form-group">
                        <label>Ảnh Đại Diện<label>
                        <input type="file" name="anh" class="form-control" />
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