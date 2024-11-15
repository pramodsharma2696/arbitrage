<!doctype html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
	<!-- meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Arbitrage Prime Limited</title>
	<meta name="description" content="Arbitrage Prime Limited | Navigate the Global Markets Confidently">
	<meta name="keywords" content="blockit, uikit3, indonez, handlebars, scss, javascript">
	<meta name="author" content="Arbitrage Prime Limited">
	<meta property="og:title" content="Arbitrage Prime Limited">
	<meta property="og:description" content="Arbitrage Prime Limited | Navigate the Global Markets Confidently">
	

	<meta name="theme-color" content="#FCB42D">
	<!-- preload assets -->
	<link rel="preload" href="{{ asset('') }}fonts/fa-brands-400.woff2" as="font" type="font/woff2" crossorigin>
	<link rel="preload" href="{{ asset('') }}fonts/fa-solid-900.woff2" as="font" type="font/woff2" crossorigin>
	<link rel="preload" href="{{ asset('') }}fonts/archivo-v18-latin-regular.woff2" as="font" type="font/woff2" crossorigin>
	<link rel="preload" href="{{ asset('') }}fonts/archivo-v18-latin-300.woff2" as="font" type="font/woff2" crossorigin>
	<link rel="preload" href="{{ asset('') }}fonts/archivo-v18-latin-700.woff2" as="font" type="font/woff2" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
	<link rel="preload" href="{{ asset('') }}css/style.css" as="style">
	<link rel="preload" href="{{ asset('') }}js/vendors/uikit.min.js" as="script">
	<link rel="preload" href="{{ asset('') }}js/utilities.min.js" as="script">
	<link rel="preload" href="{{ asset('') }}js/config-theme.js" as="script">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<!-- stylesheet -->
	<link rel="stylesheet" href="{{ asset('') }}css/style.css">
	<link rel="stylesheet" href="{{ asset('') }}css/megamenu.css">
	<!-- <link rel="stylesheet" href="{{ asset('') }}teccss/style.css"> -->
	<!-- uikit -->
	<script src="{{ asset('') }}js/vendors/uikit.min.js"></script>
	<!-- favicon -->
	<link rel="shortcut icon" href="{{ asset('') }}img/user/favicon.png" style="width:120px;height:auto">
	<!-- touch icon -->
	<link rel="apple-touch-icon-precomposed" href="{{ asset('') }}img/apple-touch-icon.png">
	
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
	 <!-- TradingView Widget 1 BEGIN -->
<div class="tradingview-widget-container" id="tradingview-widget-container-1">
    <div class="tradingview-widget-container__widget"></div>
    
    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
        {
            "symbols": [{
                    "proName": "FOREXCOM:SPXUSD",
                    "title": "S&P 500 Index"
                },
                {
                    "proName": "FOREXCOM:NSXUSD",
                    "title": "US 100 Cash CFD"
                },
                {
                    "proName": "FX_IDC:EURUSD",
                    "title": "EUR to USD"
                },
                {
                    "proName": "BITSTAMP:BTCUSD",
                    "title": "Bitcoin"
                },
                {
                    "proName": "BITSTAMP:ETHUSD",
                    "title": "Ethereum"
                }
            ],
            "showSymbolLogo": true,
            "isTransparent": false,
            "displayMode": "adaptive",
            "colorTheme": "light",
            "locale": "en"
        }
    </script>
</div>
<!-- TradingView Widget 1 END -->
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
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	<script src="{{ asset('') }}js/vendors/tradingview-widget.min.js"></script>
	<script src="{{ asset('') }}js/vendors/particles.min.js"></script>
	<script src="{{ asset('') }}js/config-particles.js"></script>
	<script src="{{ asset('') }}js/utilities.min.js"></script>
	<script src="{{ asset('') }}js/config-theme.js"></script>
	<script src="{{ asset('') }}js/commodities.js"></script>
	<script src="{{ asset('') }}js/indices.js"></script>
	<script src="{{ asset('') }}js/equities.js"></script>
	<script src="{{ asset('') }}js/forex.js"></script>
	<script src="{{ asset('') }}js/cryptocurrencies.js"></script>
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script>
  		AOS.init();
	</script>

</body>
</html>