@extends('admin.layouts.index')
@section('content')
<script>
    function validateForm() {
        var x = document.forms["congdung"]["ten"].value.trim();
        if (x == "") {
            alert("Bạn chưa nhập tên công dụng");
            return false;
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
                        <h1 class="page-header">Công Dụng
                            <small>Thêm</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form name="congdung" action="{{route('themCongDung')}}" enctype="multipart/form-data" method="POST" onsubmit="return validateForm()">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <div class="form-group">
                                <label>Tên</label>
                                <input class="form-control" name="ten" required placeholder="nhập tên công dụng"/>
                            </div>
                             <div class="form-group">
                                <label>Ảnh Đại Diện<label>
                                <input type="file" name="anh" class="form-control" required />
                            </div>
                            <button type="submit" class="btn btn-default">Thêm</button>
                            <button type="button" class="btn btn-default" onclick="window.location='{{ URL::previous() }}'">Huỷ bỏ</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@endsection