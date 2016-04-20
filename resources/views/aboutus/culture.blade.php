@extends('layout/default')

@section('main')
			<div id="banner">
				<img src="images/cdf-banners-about_culture.jpg" />
				<div class="banner_overlay"></div>
				<h1 class="upper" id="bannertitle">Culture & Quality</h1>
			</div>
			
			<script src="js/banner.js" type="text/javascript"></script>			
			
			<div class="spacer20"></div>

@foreach($Cultures as $Culture)			
			<div class="culture noresize">
				<div class="leftcolumn">
					<img src="images/{{ $Culture->image }}" />
				</div>
				<div class="rightcolumn">
					<h3 style="text-transform:uppercase; text-align:left;">
						{{ languages($Culture->title, $Culture->title_fr) }}
					</h3>
					<div class="spacer10"></div>
					<div style="white-space:pre-wrap;">{{ languages($Culture->description, $Culture->description_fr) }}</div>
				</div>	
			</div>
			
			<div class="spacer20"></div>
			<hr>
			<div class="spacer20"></div>
@endforeach
			
			<input type="hidden" name="item" value=".culture" />
			<script src="js/columns.js" type="text/javascript"></script>
@endsection