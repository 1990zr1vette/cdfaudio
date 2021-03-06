<!DOCTYPE html>

<html lang="en">

	<head>
		<meta charset="utf-8">
		<!--<meta name="viewport" content="width=device-width; initial-scale=1.0;">-->

		<title>CDF - {{ ucfirst($title) }}</title>
		
		<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
		
		<meta name="description" content="{{ $description }}" />
		<meta name="keywords" content="{{ $keywords }}" />
		
		<meta property="fb:page_id" content="" />
		<meta property="fb:app_id" content="" />		
		<meta property="og:site_name" content="" />
		<meta property="og:title" content="" />
		<meta property="og:image" content="" />
		<meta property="og:url" content="" />
		<meta property="og:description" content="" />
	
		<base href="{{URL::to('')}}/" />
		
		<link rel="stylesheet" href="css/style.css">

		<script src="js/jquery-2.2.0.min.js" type="text/javascript"></script>
		
		<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>
	
	<body id="body">
@if (MOBILE == 0)
		@include('layout.partials.header')
@else 
		@include('layout.partials.mobileheader')
@endif

		<main id="main">
			@yield('main')
		</main>
@if (MOBILE == 1)
		<script>$('#main').css('top', 100);</script>
@endif		

		@include('layout.partials.footer')
	</body>
	
</html>
