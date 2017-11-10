@extends('customer.layouts.master')
@section('content')

<section id="vungmien" class="vungmien">
    <div class="container">
        <div class="row">
            <div class="service_border_raund text-center"></div>
            <div class="main_service_area sections text-center">
                <div class="head_title text-center">
                    <h2>Vùng miền</h2>
                    <div class="separator"></div>
                </div>

                <div class="col-sm-3">
                    <div class="single_service">
                        <img class="bg-img" src="vendor_customer/assets/images/mienbac.jpg">
						<div>Miền Bắc</div>
                    </div>
                </div>

                <div class="col-sm-3">
					<div class="single_service">
						<img class="bg-img" src="vendor_customer/assets/images/mientrung.jpg">
						<div>Miền Trung</div>
					</div>
                </div>

                <div class="col-sm-3">
                    <div class="single_service">
						<img class="bg-img" src="vendor_customer/assets/images/miennam.jpg">
						<div>Miền Nam</div>
					</div>
                </div>

            </div>
        </div>
    </div>
</section>
@endsection