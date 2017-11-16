@extends('admin.layouts.index')
@section('content')
<!-- Page Content -->
 <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Category
                            <small>Add</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="{{route('themCongDung')}}" method="POST">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                          
                            <div class="form-group">
                                <label>Category Name1</label>
                                <input class="form-control" name="name1" required placeholder="nhập tên công dụng"/>
                            </div>
                            <div class="form-group">
                                <label>Category name2</label>
                                <input class="form-control" name="name2" required placeholder="nhập tên không dấu"/>
                            </div>
                             <div class="form-group">
                                <span class="text-info">@if(Session::has('thanhcong')) {{Session::get('thanhcong')}} @endif</span>
                            </div>
                            <button type="submit" class="btn btn-default">Category Add</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@endsection