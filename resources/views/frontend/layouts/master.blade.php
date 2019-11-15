<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="keywords" content="">
<meta name="description" content="">
<title>Car Rental Portal</title>
@include('frontend.partials.styles')
</head>
<body>

<!-- Start Switcher -->
{{-- @include('frontend.partials.colorswitcher') --}}
<!-- /Switcher -->

<!--Header-->
@include('frontend.partials.header')
<!-- /Header -->


@include('frontend.partials.messages')
@yield('content')

<!--Footer -->
@include('frontend.partials.footer')
<!-- /Footer-->

<!--Back to top-->
<div id="back-top" class="back-top"> <a href="#top"><i class="fa fa-angle-up" aria-hidden="true"></i> </a> </div>
<!--/Back to top-->

<!--Login-Form -->
@include('frontend.partials.login')
<!--/Login-Form -->

<!--Register-Form -->
@include('frontend.partials.registration')

<!--/Register-Form -->

<!--Forgot-password-Form -->
@include('frontend.partials.forgotpassword')
<!--/Forgot-password-Form -->

{{-- script --}}
@include('frontend.partials.scripts')


</body>

<!-- Mirrored from themes.webmasterdriver.net/carforyou/demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 16 Jun 2017 07:22:11 GMT -->
</html>
