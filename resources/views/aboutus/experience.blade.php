@extends('layout/default')

@section('main')
			<div id="banner">
				<img src="images/cdf-banners-about_experience.jpg" />
				<div class="banner_overlay"></div>
				<h1 class="upper" id="bannertitle" style="position:relative; z-index:3; color:#fff;">{{ languages('Experience', 'Expérience') }}</h1>
			</div>			
			<script src="js/banner.js" type="text/javascript"></script>	
			
			<div class="spacer20"></div>
			<hr>
			<div class="spacer20"></div>
			
			<div style="width:calc(92% - 40px); margin:0 auto; padding:20px; background-color:#fff; border:1px solid #cfcfcf; border-radius:15px;">
@if (Session::get('lang') == 'EN')			
				We are proud to share a short list of our clients. Our expertise crosses over from personal into many professional domains. CDF is known for delivering particular systems to all of our associates. We take an intense interest in providing high quality, practical and aesthetic solutions in every install. Sound and image, multi-media installations require vision and understanding from professionals who are sensitive to your goals and desires. CDF is able to bring art and technology together for your personal and professional systems.
@else
				Nous sommes fiers de partager avec vous une liste de quelques-uns de nos clients. Notre savoir-faire s’étend aussi bien aux particuliers qu’à de nombreux professionnels. CDF est réputé pour fournir des systèmes particuliers à tous ses associés. Lors de chaque installation, nous veillons à vous fournir des solutions pratiques et esthétiques, de la plus haute qualité. Les installations multimédias, de son et d’image, exigent l’intervention de professionnels compétents et doués d’une certaine vision, à l’écoute de vos objectifs et de vos envies. CDF allie art et technologie dans tous vos systèmes personnels et professionnels.
@endif	
			</div>
			
			<div class="spacer20"></div>
			<hr>
			<div class="spacer20"></div>

			<div class="experience noresize">
				<div class="leftcolumn experiencecolumn">
					<div class="spacer20"></div>
					<div class="experiencetitle">
						<img src="images/icon_experience_artists.png" />
						<span>{{ languages('ARTISTS', 'Artistes') }}</span>
					</div>
					<div class="experienceinfo">
						<div class="spacer10"></div>
@foreach($Artists as $Artist)
						<div>
@if ($Artist->website)						
							<a target="_blank" href="{{ $Artist->website }}">{{ $Artist->artist }}</a>
@else
							{{ $Artist->artist }}
@endif	
						</div>
@endforeach				
						<div></div>
					</div>
				</div>
				<div class="rightcolumn experiencecolumn">
					<div class="spacer20"></div>
					<div class="experiencetitle">
						<img src="images/icon_experience_restaurants.png" />
						<span>{{ languages('Restaurants & Bars', 'Bars et restaurants') }}</span>
					</div>
					<div class="experienceinfo">
						<div class="spacer10"></div>
@foreach($Restaurants as $Restaurant)
						<div>
@if ($Restaurant->website)						
							<a target="_blank" href="{{ $Restaurant->website }}">{{ $Restaurant->restaurant }}</a>
@else
							{{ $Restaurant->restaurant }}
@endif	
						</div>
@endforeach				
						<div></div>
					</div>
				</div>
			</div>
			
			<div class="spacer20"></div>
			<hr>
			<div class="spacer20"></div>
			
			<div class="experience noresize">
				<div class="leftcolumn experiencecolumn">
					<div class="spacer20"></div>
					<div class="experiencetitle">
						<img src="images/icon_experience_artists.png" />
						<span>{{ languages('Boutiques & Offices etc...', 'Boutiques, bureaux, etc.') }}</span>
					</div>
					<div class="experienceinfo">
						<div class="spacer10"></div>
@foreach($Boutiques as $Boutique)
						<div>
@if ($Boutique->website)						
							<a target="_blank" href="{{ $Boutique->website }}">{{ $Boutique->boutique }}</a>
@else
							{{ $Boutique->boutique }}
@endif	
						</div>
@endforeach			
						<div></div>
					</div>
				</div>
				<div class="rightcolumn experiencecolumn">
					<div class="spacer20"></div>
					<div class="experiencetitle">
						<img src="images/icon_experience_restaurants.png" />
						<span>{{ languages('Professionals', 'Professionnels') }}</span>
					</div>
					<div class="experienceinfo">
						<div class="spacer10"></div>
@foreach($Professionals as $Professional)
						<div>
@if ($Professional->website)						
							<a target="_blank" href="{{ $Professional->website }}">{{ $Professional->professional }}</a>
@else
							{{ $Professional->professional }}
@endif	
						</div>
@endforeach					
						<div></div>
					</div>
				</div>
			</div>
			
			<div class="spacer20"></div><hr><div class="spacer20"></div>

			<h3 class="upper">{{ languages('Testimonials', 'Témoignages') }}</h3>
			<h3><a id="testimonial" href="javascript:void(0);">{{ languages('Write Your Own Testimonials', 'Écrivez vos propres Témoignages') }}</a></h3>
			
			<div class="spacer20"></div>
			
@foreach ($Testimonials as $Testimonial)
				<div class="testimonial-column">
					<div class="spacer20"></div>
					<h3>{{ $Testimonial->title }}</h3>
					<div class="spacer10"></div>
					<span class="testimonial-span">{{ $Testimonial->testimonial }}</span>
				</div>	
				<div class="spacer10"></div>			
@endforeach
			
			<div class="spacer10"></div>
			<div class="spacer20"></div><hr><div class="spacer20"></div>
			
			<script src="js/testimonial.js" type="text/javascript"></script>
			<input type="hidden" name="item" value=".experience" />
			<script src="js/columns.js" type="text/javascript"></script>
@endsection
