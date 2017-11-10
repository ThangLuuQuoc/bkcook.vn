@extends('customer.layouts.master')
@section('content')

<section id="loaimon" class="loaimon">
    <div class="container">
        <div class="row">
            <div class="service_border_raund text-center"></div>
            <div class="main_service_area sections text-center">
                <div class="head_title text-center">
                    <h2>Loại món</h2>
                    <div class="separator"></div>
                </div>
				
                <div class="col-sm-3">
                    <div class="single_service"> 
                        <img class="bg-img" src="https://media.cooky.vn/recipe/g2/19494/s320/recipe19494-636274205695226444.jpg">
						<div>Súp</div>
                    </div>
                </div>
				
                <div class="col-sm-3">
					<div class="single_service"> 
						<img class="bg-img" src="https://media.cooky.vn/recipe/g1/537/s320/recipe537-635620986017152292.jpg">
						<div>Lẩu</div>
					</div>
                </div>
				
                <div class="col-sm-3">
                    <div class="single_service"> 
						<img class="bg-img" src="https://media.cooky.vn/recipe/g1/5949/s320/recipe5949-636258644291409028.png">
						<div>Bánh</div>
					</div>
                </div>
				
				<div class="col-sm-3">
                    <div class="single_service"> 
						<img class="bg-img" src="https://media.cooky.vn/recipe/g3/21228/s320/recipe21228-636386656291784619.jpg">
						<div>Snack</div>
					</div>
                </div>

            </div>
        </div>
    </div>
</section>

@endsection