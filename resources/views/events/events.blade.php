@extends('layout/default')

@section('main')
			<div id="banner">
				<img src="images/cdf-banners-journal_events.jpg" />
				<div class="banner_overlay"></div>
				<h1 class="upper" id="bannertitle">{{ languages(EVENTS, EVENTS_FR) }}</h1>
			</div>
			<script src="js/banner.js" type="text/javascript"></script>
			<div class="spacer20"></div>
@foreach($Events as $Event)			
			<div class="event">
				<div class="spacer20"></div>
				<h3 class="upper">{{ languages($Event->title, $Event->title_fr) }}</h3>
				<h3>{{ date('F j, Y', strtotime($Event->created_at)) }}</h3>
				<div class="spacer20"></div>
				
				<div class="leftcolumn">
					<img src="images/{{ $Event->image }}" />
				</div>
				
				<div class="rightcolumn">{{ languages($Event->event, $Event->event_fr) }}</div>
			</div>
			<div class="spacer20"></div>
			<hr class="hr96">
			<div class="spacer20"></div>
@endforeach
			<input type="hidden" name="item" value=".event" />
			<script src="js/columns.js" type="text/javascript"></script>
@endsection