@extends('admin.layouts.index')
@section('content')
<!-- Page Content -->
<script>
    function validateForm() {
        var x = document.forms["themVungMien"]["ten"].value.trim();
        if (x == "") {
            alert("Bạn chưa nhập tên vùng miền");
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
                            <small>Thêm</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form name="themVungMien" action="{{route('themVungMien')}}" method="POST" onsubmit="return validateForm()">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                          
                            <div class="form-group">
                                <label>Tên vùng miền</label>
                                <input class="form-control" name="ten" required placeholder="nhập tên vùng miền"/>
                            </div>
                            <div class="form-group">
                                <label>vị trí</label>
                                <input class="form-control" name="vitri" required placeholder="vị trí"/>
                            </div>
                            <div class="form-group">
                                <label>giới thiệu</label><br>
                                <textarea cols="80" rows="6" name="gioithieu" required></textarea>
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