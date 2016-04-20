@extends('layout/admin')

@section('main')

			{!! Form::model($Announcement, ['id'=>'AnnouncementForm', 'files' => true, 'method'=>'PATCH', 'route'=>['admin.announcements.update', $Announcement->id], 'class'=>'form96']) !!}			

				<div class="spacer10"></div>
				
				<div class="formrow">
					{!! Form::label('announcement', 'ANNOUNCEMENT:') !!}
					{!! Form::text('announcement') !!}
				</div>
				
				<div class="spacer10"></div>
				
				<div class="formrow">
					{!! Form::label('announcement_fr', 'ANNOUNCEMENT (FR):') !!}
					{!! Form::text('announcement_fr') !!}
				</div>
				
				<div class="spacer10"></div>
				
				<div class="button">
					<input type="hidden" name="current" value="{{ $Announcement->current }}" />
					<input type="hidden" name="active" value="{{ $Announcement->active }}" />
					<button type="button" class="activebutton activebutton{{ $Announcement->active }} btn btn-primary"></button>
				</div>
				
				<div class="spacer10"></div>
				
				<div class="button">
					<button type="submit" class="btn btn-primary">UPDATE</button>					
				</div>				
				
				<div class="spacer10"></div>
				
			{!! Form::close() !!}			

			<script src="js/active-button.js" type="text/javascript"></script>
			<script> 
				$('input[type=text]').attr('required',true);
				$('textarea').attr('required',true);
			</script>

@endsection