@extends('customer.layouts.master')
@section('content')

<section id="mucdich" class="mucdich">
    <div class="container">
        <div class="row">
            <div class="service_border_raund text-center"></div>
            <div class="main_service_area sections text-center">
                <div class="head_title text-center">
                    <h2>Mục đích</h2>
                    <div class="separator"></div>
                </div>

                <div class="col-sm-3">
                    <div class="single_service">
                        <img class="bg-img" src="vendor_customer/assets/images/giamcan.jpg">
						<div>Giảm cân</div>
                    </div>
                </div>

                <div class="col-sm-3">
					<div class="single_service">
						<img class="bg-img" src="vendor_customer/assets/images/lamdep.jpg">
						<div>Làm đẹp</div>
					</div>
                </div>

                <div class="col-sm-3">
                    <div class="single_service">
						<img class="bg-img" src="vendor_customer/assets/images/sinhnhat.jpg">
						<div>Sinh nhật</div>
					</div>
                </div>

				<div class="col-sm-3">
                    <div class="single_service">
						<img class="bg-img" src="vendor_customer/assets/images/lienhoan.jpg">
						<div>Liên hoan</div>
					</div>
                </div>

            </div>
        </div>
    </div>
</section>

@endsection