@extends('admin.layouts.index')
@section('content')
<!-- Page Content -->
<script>
    function validateForm() {
        var x = document.forms["suaVungMien"]["ten"].value.trim();
        if (x == "") {
            alert("Bạn chưa nhập tên vùng miển");
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
                        <h1 class="page-header">Vùng Miền
                            <small>Sửa</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form name="suaVungMien" action="{{route('suaVungMien',$vungmien->id)}}" method="POST" onsubmit="return validateForm()">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            
                                <div class="form-group">
                                    <label>Tên vùng miền</label>
                                    <input class="form-control" name="ten" required value="{{$vungmien->ten}}" placeholder="nhập tên công dụng"/>
                                </div>
                                 <div class="form-group">
                                    <label>vị trí</label>
                                    <input class="form-control" name="vitri" required value="{{$vungmien->vitri}}" required placeholder="nhập vị trí"/>
                                </div>
                                 <div class="form-group">
                                    <label>Giới thiệu</label>
                                    <input class="form-control" name="gioithieu" value="{{$vungmien->gioithieu}}" required placeholder="nhập tên không dấu"/>
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