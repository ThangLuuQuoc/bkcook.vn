@extends('customer.layouts.master')
@section('content')

<section id="thanhvien" class="thanhvien">
    <div class="container">
        <div class="row">
            <div class="service_border_raund text-center"></div>
            <div class="main_service_area sections text-center">
                <div class="head_title text-center">
                    <h2>Thành viên tiêu biểu</h2>
                    <div class="separator"></div>
                </div>

                <div class="col-sm-3">
                    <div class="thanhviendon">
                        <img class="bg-img" src="vendor_customer/assets/images/hungtran.jpg">
						<div>Hùng Trần</div>
                    </div>
                </div>

                <div class="col-sm-3">
					<div class="thanhviendon">
						<img class="bg-img" src="vendor_customer/assets/images/hauyen.jpg">
						<div>Hạ Uyên</div>
					</div>
                </div>

                <div class="col-sm-3">
                    <div class="thanhviendon">
						<img class="bg-img" src="vendor_customer/assets/images/thientrangpham.jpg">
						<div>Thiên Trang Phạm</div>
					</div>
                </div>

            </div>
        </div>
    </div>
</section>
@endsection