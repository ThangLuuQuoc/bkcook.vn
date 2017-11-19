@extends('admin.layouts.index')
@section('content')

<script>
    function validateForm() {
        var a = document.forms["suaBuocNau"]["noiDungBuoc"].value.trim();
        if (a == "") {
            alert("Bạn chưa nhập nội dung bước nấu");
            return false;
        }  else {
            return true;
        }
    }
</script>

<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Các bước nấu
                    <small>Sửa</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                <form action="{{route('suaBuocNau', [$buocnau -> id_monan, $buocnau -> id])}}" method="POST" name="suaBuocNau" onsubmit="return validateForm()">
                    <input type="hidden" name="_token" value="{{csrf_token()}}" />
                    <div class="form-group">
                        <label>Nội dung</label>
                        <textarea name="noiDungBuoc" class="form-control" style="height: 250px">{{$buocnau -> noidung}}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Chọn ảnh</label>
                        <input type="file" name="image" multiple="multiple" />
                    </div>
                    <button type="submit" class="btn btn-default">Sửa</button>
                    <button type="button" class="btn btn-default" onclick="window.location='{{ URL::previous() }}'">Cancel</button>
                    <form>
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
        </div>
        <!-- /#page-wrapper -->
        @endsection