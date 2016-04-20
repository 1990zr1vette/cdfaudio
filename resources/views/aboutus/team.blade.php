@extends('layout/default')

@section('main')
			<div style="height:500px; width:100%; overflow:hidden;">
				<img src="images/cdf-banners-about_team.jpg" />
				<div style="height:500px; width:100%;" class="banner_overlay"></div>
			</div>		
			
			<fieldset id="teamconnect">
				<legend style="text-transform:uppercase;" align="center">{{ languages('OUR TEAM', 'Notre équipe') }}</legend>
				<div class="spacer20"></div>
				<p class="topp">
@if (Session::get('lang') == 'EN')				
					We are skilled professionals dedicated to our fields of interest;
					<br />
					music and film enthusiasts who would like to share 
					<br />
					our passion with you.
@else					
					Nous sommes passionnés de musique et de film. Les relations  
					<br />
					que nous entretenons avec nos clients nous 
					<br />
					tiennent très à cœur.
@endif					
				</p>
				<div class="spacer20"></div>
				<p class="bottomp">
					<a target="_blank" style="color:#fff;" href="https://www.facebook.com/coupdefoudre.montreal">
						<img src="images/social_facebook.png" />
						<span>
							{{ languages('CONNECT ON FACEBOOK', 'Suivez-nous sur facebook') }}
						</span>
					</a>
				</p>				
			</fieldset>
			
			<div id="info" class="spacer20"></div>
			
@foreach($Members as $Member)
			<div class="memberColumn">
				<div class="member">
					<img class="memberimg" src="images/{{ $Member->image }}" />
					<div class="membername">{{ $Member->first_name }}</div>
					<div class="memberdetails">
						<div class="memberfullname"><h3>{{ $Member->first_name }} {{ $Member->last_name }}</h3></div>
						<div class="memberposition"><h4>{{ languages($Member->position, $Member->position_fr) }}</h4></div>
						<div class="memberdescription">{{ languages($Member->description, $Member->description_fr) }}</div>
					</div>
					<span class="overlay"></span>
				</div>
			</div>
@endforeach

@foreach($Members as $Member)
			<div class="memberColumn">
				<div class="member">
					<img class="memberimg" src="images/{{ $Member->image }}" />
					<div class="membername">{{ $Member->first_name }}</div>
					<div class="memberdetails">
						<div class="memberfullname"><h3>{{ $Member->first_name }} {{ $Member->last_name }}</h3></div>
						<div class="memberposition"><h4>{{ languages($Member->position, $Member->position_fr) }}</h4></div>
						<div class="memberdescription">{{ languages($Member->description, $Member->description_fr) }}</div>
					</div>
					<span class="overlay"></span>
				</div>
			</div>
@endforeach

@foreach($Members as $Member)
			<div class="memberColumn">
				<div class="member">
					<img class="memberimg" src="images/{{ $Member->image }}" />
					<div class="membername">{{ $Member->first_name }}</div>
					<div class="memberdetails">
						<div class="memberfullname"><h3>{{ $Member->first_name }} {{ $Member->last_name }}</h3></div>
						<div class="memberposition"><h4>{{ languages($Member->position, $Member->position_fr) }}</h4></div>
						<div class="memberdescription">{{ languages($Member->description, $Member->description_fr) }}</div>
					</div>
					<span class="overlay"></span>
				</div>
			</div>
@endforeach

@foreach($Members as $Member)
			<div class="memberColumn">
				<div class="member">
					<img class="memberimg" src="images/{{ $Member->image }}" />
					<div class="membername">{{ $Member->first_name }}</div>
					<div class="memberdetails">
						<div class="memberfullname"><h3>{{ $Member->first_name }} {{ $Member->last_name }}</h3></div>
						<div class="memberposition"><h4>{{ languages($Member->position, $Member->position_fr) }}</h4></div>
						<div class="memberdescription">{{ languages($Member->description, $Member->description_fr) }}</div>
					</div>
					<span class="overlay"></span>
				</div>
			</div>
@endforeach

			<div class="spacer20"></div>
			
			<script src="js/team.js" type="text/javascript"></script>	
@endsection		