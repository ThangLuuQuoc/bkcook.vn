@extends('customer.layouts.master')
@section('content')
<section id="theloai" class="theloai">
    <div class="container">
        <div class="row">
            <div class="service_border_raund text-center"></div>
            <div class="main_service_area sections text-center">
                <div class="head_title text-center">
                    <h2>Thể loại</h2>
                    <div class="separator"></div>
                </div>

                <div class="col-sm-3" >
                    <div class="single_service" >
 <!--                       <img class="bg-img" src="vendor_customer/assets/images/khaivi.jpg">-->
                            <img src="https://media.cooky.vn/recipe/g2/19711/s320/recipe19711-636283930080207292.jpg" alt="">

						<div>Khai vị</div>
                    </div>
                </div>

                <div class="col-sm-3">
					<div class="single_service">
						<img class="bg-img" src="vendor_customer/assets/images/monchay.jpg">
						<div>Món chay</div>
					</div>
                </div>
                <div class="col-sm-3">
                    <div class="single_service">
						<img class="bg-img" src="vendor_customer/assets/images/monchinh.jpg">
						<div>Món chính</div>
					</div>
                </div>
				<div class="col-sm-3">
                    <div class="single_service">
						<img class="bg-img" src="vendor_customer/assets/images/anvat.jpg">
						<div>Ăn vặt</div>
					</div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection