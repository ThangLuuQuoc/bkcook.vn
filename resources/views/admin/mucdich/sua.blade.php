@extends('admin.layouts.index')
@section('content')
<!-- Page Content -->
<script>
    function validateForm() {
        var x = document.forms["suaMucDich"]["ten"].value.trim();
        if (x == "") {
            alert("Bạn chưa nhập tên mục đích");
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
                        <h1 class="page-header">Mục Đích
                            <small>Sửa</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form name="suaMucDich" action="{{route('suaMucDich',$mucdich->id)}}" method="POST" onsubmit="return validateForm()" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <div class="form-group">
                                    <label>Tên</label>
                                    <input class="form-control" name="ten" required value="{{$mucdich->ten}}" placeholder="nhập tên mục đích"/>
                                </div>
                                <div class="form-group">
                                <label>Ảnh Đại Diện<label>
                                <input type="file" name="anh" class="form-control" />
                            </div>
                            <button type="submit" class="btn btn-default">Lưu</button>
                           <button type="button" class="btn btn-default" onclick="window.location='{{ URL::previous() }}'">Huỷ bỏ</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
</div>
@endsection