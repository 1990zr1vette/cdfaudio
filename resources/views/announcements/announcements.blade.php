@extends('layout/default')

@section('main')
			<div id="banner">
				<img src="images/cdf-banners-journal_announcements.jpg" />
				<div class="banner_overlay"></div>
				<h1 class="upper" id="bannertitle">{{ languages(ANNOUNCEMENTS, ANNOUNCEMENTS_FR) }}</h1>
			</div>	
			<script src="js/banner.js" type="text/javascript"></script>			
			<div class="spacer20"></div>
@foreach($Announcements as $Announcement)			
			<div class="announcement">
				<div class="spacer20"></div>
				<img class="announcementimage" src="images/icon_announcements_orange.png" />
				<div class="announcementinfo">
					<h3 class="upper left lower">
						{{ languages($Announcement->announcement, $Announcement->announcement_fr) }}
					</h3>
					<div class="spacer20"></div>
					<h4 class="left">
						{{ publishedOn($Announcement->created_at) }}
					</h4>
				</div>
				<div class="spacer20"></div>
			</div>
			<div class="spacer20"></div>
			<hr class="hr96">
			<div class="spacer20"></div>
@endforeach	
			<script>$('hr').last().remove();$('.spacer20').last().remove();</script>
@endsection