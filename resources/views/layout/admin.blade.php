<!doctype html>

<html lang="en">

	<head>
		<meta charset="utf-8">

		<title>ADMIN - {{ $title }}</title>
		
		<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
		
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="author" content="">

		<base href="{{URL::to('')}}/" />
		
		<link rel="stylesheet" href="css/admin.css">

		<script src="js/jquery-2.2.0.min.js" type="text/javascript"></script>
		<script src="js/vue.js" type="text/javascript"></script>		
	</head>

	<body>
		<header>
			<nav>
				<ul>
					<li>
						<a href="admin/brands">BRANDS</a>
					</li>
					<li>
						<a href="admin/products">PRODUCTS</a>
					</li>
					<li>
						<a href="admin/announcements">ANNOUNCEMENTS</a>
					</li>
					<li>
						<a href="admin/events">EVENTS</a>
					</li>					
					<li>
						<a href="admin/editorials">EDITORIALS</a>
					</li>
					<li>
						<a href="admin/team">TEAM</a>
					</li>
					<li>
						<a href="admin/artists">ARTISTS</a>
					</li>
					<li>
						<a href="admin/boutiques">BOUTIQUES</a>
					</li>
					<li>
						<a href="admin/professionals">PROFESSIONALS</a>
					</li>
					<li>
						<a href="admin/restaurants">RESTAURANTS</a>
					</li>
					<li>
						<a href="admin/testimonials">TESTIMONIALS</a>
					</li>
					<li>
						<a href="admin/adminusers">USERS</a>
					</li>
					<li>
						<a href="admin/culture">CULTURE</a>
					</li>
				</ul>
			</nav>
		</header>
		
		<script>
			$('header nav ul li').css('width',(100 / $('header nav ul li').size()) + '%');
		</script>
		
		<div id="info"></div>
		
		<main>
			@yield('main')
		</main>
		
		<footer>
		</footer>
	
	</body>
	
</html>

