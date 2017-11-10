<!doctype html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>@yield('Ẩm thực quanh ta')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <!--Google fonts Link-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,500i,700,700i" rel="stylesheet">
    <link rel="stylesheet" href="vendor_customer/assets/css/skills/progressbar.css">
    <link rel="stylesheet" href="vendor_customer/assets/css/skills/style.css">
    <link rel="stylesheet" href="vendor_customer/assets/css/fonticons.css">
    <link rel="stylesheet" href="vendor_customer/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendor_customer/assets/css/bootstrap.min.css">
    <!--For Plugins external css-->
    <link rel="stylesheet" href="vendor_customer/assets/css/teamslide.css"/>
    <link rel="stylesheet" href="vendor_customer/assets/css/plugins.css"/>
    <!--Theme custom css -->
    <link rel="stylesheet" href="vendor_customer/assets/css/style.css">
    <link rel="stylesheet" href="vendor_customer/assets/css/chitietmonan.css" >
    <!--Theme Responsive css-->
    <link rel="stylesheet" href="vendor_customer/assets/css/responsive.css"/>
    <link rel="stylesheet" type="text/css" href="vendor_customer/vendor/css/mycss.css">
    <script src="vendor_customer/assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>
<body data-spy="scroll" data-target=".navbar-collapse">
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->

@include("customer.layouts.header")
@include("customer.layouts.home")
@yield('content')
@include('customer.layouts.couter')
@include('customer.layouts.contact')
@include('customer.layouts.footer')

<!-- START SCROLL TO TOP  -->

<div class="scrollup">
    <a href="#"><i class="fa fa-chevron-up"></i></a>
</div>


<script src="vendor_customer/assets/js/vendor/jquery-1.11.2.min.js"></script>
<script src="vendor_customer/assets/js/vendor/bootstrap.min.js"></script>
<script src="vendor_customer/assets/js/jquery.easypiechart.min.js"></script>
<script src="vendor_customer/assets/js/jquery.mixitup.min.js"></script>
<script src="vendor_customer/assets/js/jquery.easing.1.3.js"></script>
<script src="vendor_customer/assets/css/skills/inview.min.js"></script>
<script src="vendor_customer/assets/css/skills/progressbar.js"></script>
<script src="vendor_customer/assets/css/skills/main.js"></script>
<!--This is link only for gmaps-->
<!--
<script src="http://maps.google.com/maps/api/js"></script>
<script src="vendor_customer/assets/js/gmaps.min.js"></script>
<script>
    var map = new GMaps({
        el: '.ourmaps',
        scrollwheel: false,
        lat: -12.043333,
        lng: -77.028333
    });
</script>
-->
<script src="vendor_customer/assets/js/plugins.js"></script>
<script src="vendor_customer/assets/js/main.js"></script>
</body>
</html>
