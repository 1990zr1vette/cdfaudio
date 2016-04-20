@extends('layout/admin')

@section('main')

			<div class="button">
				<a href="admin/announcements/create">
					<button type="submit" class="btn btn-primary">ADD ANNOUNCEMENT</button>
				</a>
			</div>
			
@foreach($Announcements as $Announcement)
			<div class="productrow row96">
				<span class="">{{ $Announcement->announcement }}</span>
				
				<span class="button button10">
					<a href="admin/announcements/{{ $Announcement->id }}/edit">
						<button class="btn btn-primary">EDIT</button>
					</a>
				</span>
				
				<span class="button button10">
					<input type="hidden" name="current" value="{{ $Announcement->current }}" />
					<button type="button" for="{{ $Announcement->id }}" class="currentbutton currentbutton{{ $Announcement->current }} btn btn-primary"></button>
				</span>				
			</div>
@endforeach
			
			<form id="AnnouncementForm" action="admin/announcements/setcurrent" method="POST" >
				{!! Form::token() !!}
				<input type="hidden" name="id" value="" />
				<input type="hidden" name="current" value="1" />
			</form>
			
			<input type="hidden" id="formid" value="#AnnouncementForm" />
			<script src="js/multiple-current-buttons.js" type="text/javascript"></script>
			
@endsection