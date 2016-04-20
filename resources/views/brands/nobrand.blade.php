@extends('layout/default')

@section('main')

			<div id="brandslider">
				<img src="images/brandslider/volume_levels_1.jpg" />
				<img src="images/brandslider/volume_levels_2.jpg" />
				<img src="images/brandslider/volume_levels_3.jpg" />
				<div class="banner_overlay"></div>
			</div>
			
			<h1 id="brandheading">{{ languages('Brand does not exist', 'Marque n\'existe pas') }}</h1>
			<script src="js/brandslider.js" type="text/javascript"></script>
			
			<div class="spacer20"></div>
			
			<div class="errormessage">
				{{ languages('Brand does not exist', 'Marque n\'existe pas') }}
			</div>
			
			<div class="spacer20"></div>
			
			<input type="hidden" id="lang" value="{{ Session::get('lang') }}" />
			<script src="js/itemmore.js" type="text/javascript"></script>
			
@endsection