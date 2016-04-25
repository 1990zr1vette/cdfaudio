		
		<script>screen.orientation.lock('landscape');</script>
		
		<header id="mobileheader">
			<div data="0" id="headermenubutton" style="height:100%; width:5%; margin-left:20px;">
				<div class="spacer35"></div>
				<div style="height:4px; width:90%; margin-left:5%;" class="whiteline"></div>
				<div class="spacer10"></div>
				<div style="height:4px; width:90%; margin-left:5%;" class="whiteline"></div>
				<div class="spacer10"></div>
				<div style="height:4px; width:90%; margin-left:5%;" class="whiteline"></div>
			</div>
		</header>
		
		<nav id="mobilenav">
			<ul>
				<li class="clickable"><a href="{{ $urlol }}">{{ languages('Français', 'English') }}</a></li>
				<li class="clickable"><a href="{{ languages(HOME, HOME_FR) }}">{{ ucfirst(languages(HOME, HOME_FR)) }}</a></li>
				<li class="topli">{{ languages('PRODUCTS','PRODUITS') }}</li>
@foreach($Products as $Product)
				<li><a href="{{ $Product->href }}">{{ languages($Product->product, $Product->product_fr) }}</a></li>
@endforeach					
				<li class="topli">COUP DE FOUDRE</li>
				<li><a href="{{ languages(CULTUREURL, CULTUREURL_FR) }}">{{ titles(CULTURE, CULTURE_FR) }}</a></li>
				<li><a href="{{ languages(EXPERIENCEURL, EXPERIENCEURL_FR) }}">{{ titles('Experience','Expérience') }}</a></li>
				<li><a href="{{ languages(STUDIOSRERVICESURL, STUDIOSRERVICESURL_FR) }}">{{ titles('Studio and Services','Studio et Services') }}</a></li>
				<li><a href="{{ languages(TEAMURL, TEAMURL_FR) }}">{{ titles('Team','Équipe') }}</a></li>					
			<ul>
		</nav>		
		
		<script>
			$('#headermenubutton').click(function(){
				if ($(this).attr('data') == '0')
				{
					$(this).attr('data', '1');
					$('#mobilenav').animate({left:0});
				}
				else
				{
					$(this).attr('data', '0');
					$('#mobilenav').animate({left:'-' + $('#mobilenav').width() + 'px'});					
				}
			});
		</script>
