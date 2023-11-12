<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Job Hunt</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/jobboard/images/favicon.png') }}"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="CreativeLayers">

	<!-- Styles -->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/jobboard/css/bootstrap-grid.css') }}" />
	<link rel="stylesheet" href="{{asset('assets/jobboard/css/icons.css') }}">
	<link rel="stylesheet" href="{{asset('assets/jobboard/css/animate.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/jobboard/css/style.css') }}" />
	<link rel="stylesheet" type="text/css" href="{{asset('assets/jobboard/css/responsive.css') }}" />
	<link rel="stylesheet" type="text/css" href="{{asset('assets/jobboard/css/chosen.css') }}" />
	<link rel="stylesheet" type="text/css" href="{{asset('assets/jobboard/css/colors.css') }}" />
	<link rel="stylesheet" type="text/css" href="{{asset('assets/jobboard/css/bootstrap.css') }}" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
    @yield('css')
</head>
<body>

<div class="page-loading">
	<img src="{{asset('assets/jobboard/images/loader.gif') }}" alt="" />
</div>

<div class="theme-layout" id="scrollup">

    @include('components._inc_header')

	@yield('content')

	@include('components._inc_footer')

</div>

@include('components.auth._inc_auth')

<script src="{{ asset('assets/jobboard/js/jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/jobboard/js/modernizr.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/jobboard/js/script.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/jobboard/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/jobboard/js/wow.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/jobboard/js/slick.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/jobboard/js/parallax.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/jobboard/js/select-chosen.js') }}" type="text/javascript"></script>

@yield('script')
</body>
</html>

