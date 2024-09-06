<!doctype html>
<html lang="en">


<!-- Mirrored from www.indonez.com/html-demo/equity/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 31 Aug 2024 22:32:01 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<!-- meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Premium HTML5 Template by Arbitrage">
	<meta name="keywords" content="blockit, uikit3, indonez, handlebars, scss, javascript">
	<meta name="author" content="Arbitrage">
	<meta name="theme-color" content="#FCB42D">
	<!-- preload assets -->
	<link rel="preload" href="{{ asset('') }}fonts/fa-brands-400.woff2" as="font" type="font/woff2" crossorigin>
	<link rel="preload" href="{{ asset('') }}fonts/fa-solid-900.woff2" as="font" type="font/woff2" crossorigin>
	<link rel="preload" href="{{ asset('') }}fonts/archivo-v18-latin-regular.woff2" as="font" type="font/woff2" crossorigin>
	<link rel="preload" href="{{ asset('') }}fonts/archivo-v18-latin-300.woff2" as="font" type="font/woff2" crossorigin>
	<link rel="preload" href="{{ asset('') }}fonts/archivo-v18-latin-700.woff2" as="font" type="font/woff2" crossorigin>
	<link rel="preload" href="{{ asset('') }}css/style.css" as="style">
	<link rel="preload" href="{{ asset('') }}js/vendors/uikit.min.js" as="script">
	<link rel="preload" href="{{ asset('') }}js/utilities.min.js" as="script">
	<link rel="preload" href="{{ asset('') }}js/config-theme.js" as="script">
	<!-- stylesheet -->
	<link rel="stylesheet" href="{{ asset('') }}css/style.css">
	<!-- <link rel="stylesheet" href="{{ asset('') }}teccss/style.css"> -->
	<!-- uikit -->
	<script src="{{ asset('') }}js/vendors/uikit.min.js"></script>
	<!-- favicon -->
	<link rel="shortcut icon" href="{{ asset('') }}img/favicon.ico" type="image/x-icon">
	<!-- touch icon -->
	<link rel="apple-touch-icon-precomposed" href="{{ asset('') }}img/apple-touch-icon.png">
	<title>Arbitrage</title>
</head>

<body>
	<!-- page loader begin -->
	<div class="page-loader">
		<div></div>
		<div></div>
		<div></div>
	</div>
	<!-- page loader end -->
	<!-- header begin -->
	@include('body.header')
	<!-- header end -->
	<main>
		@yield('contents')
	</main>
	<!-- footer begin -->
	@include('body.footer')
	<!-- footer end -->
	<!-- to top begin -->
	<a href="#" class="to-top uk-visible@m" data-uk-scroll>
		Top<i class="fas fa-chevron-up" ></i>
	</a>
	<!-- to top end -->
	<!-- javascript -->
	<script src="{{ asset('') }}js/vendors/tradingview-widget.min.js"></script>
	<script src="{{ asset('') }}js/vendors/particles.min.js"></script>
	<script src="{{ asset('') }}js/config-particles.js"></script>
	<script src="{{ asset('') }}js/utilities.min.js"></script>
	<script src="{{ asset('') }}js/config-theme.js"></script>
</body>
</html>