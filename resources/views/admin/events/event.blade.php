@extends('layout/admin')

@section('main')

			{!! Form::model($Event, ['id'=>'EventForm', 'files' => true, 'method'=>'PATCH', 'route'=>['admin.events.update', $Event->id], 'class'=>'form80']) !!}			

				<div class="spacer10"></div>
				
				<div class="formrow">
					{!! Form::label('title', 'TITLE:') !!}
					{!! Form::text('title') !!}
				</div>
				
				<div class="spacer10"></div>
				
				<div class="formrow">
					{!! Form::label('title_fr', 'TITLE (FR):') !!}
					{!! Form::text('title_fr') !!}
				</div>
				
				<div class="spacer10"></div>
				
				<div class="formrow">
					{!! Form::label('title', 'DATES:') !!}
					{!! Form::text('dates') !!}
				</div>
				
				<div class="spacer10"></div>
				
				<div class="formrow">
					{!! Form::label('dates_fr', 'DATES (FR):') !!}
					{!! Form::text('dates_fr') !!}
				</div>
				
				<div class="spacer10"></div>
				
				<div class="formtextarearow">
					{!! Form::label('event', 'EVENT:') !!}
					{!! Form::textarea('event') !!}
				</div>
				
				<div class="spacer10"></div>
				
				<div class="formtextarearow">
					{!! Form::label('event', 'EVENT (FR):') !!}
					{!! Form::textarea('event_fr') !!}
				</div>

				<div style="text-align:center;">
					<img src="images/{{ $Event->image }}" >
				</div>
				
				<div class="spacer10"></div>
				
				<div class="formimagerow">
					{!! Form::label('image', 'IMAGE:') !!}
					{!! Form::file('image') !!}
					<button type="button" id="imagebutton" class="btn btn-primary">Change Image</button>
					<span id="imagename" style="display:inline-block;"></span>
				</div>
				
				<div class="button">
					<input type="hidden" name="active" value="{{ $Event->active }}" />
					<button type="button" class="activebutton activebutton{{ $Event->active }} btn btn-primary"></button>
				</div>

				<div class="button">
					<input type="hidden" name="current" value="{{ $Event->current }}" />
					<button type="button" class="currentbutton currentbutton{{ $Event->current }} btn btn-primary"></button>
				</div>
				
				<div class="button">
					<button type="submit" class="btn btn-primary">UPDATE</button>					
				</div>				
				
				<div class="spacer20"></div>
				
			{!! Form::close() !!}			

			<div class="spacer20"></div>
			
			<script src="js/active-button.js" type="text/javascript"></script>
			<script src="js/current-button.js" type="text/javascript"></script>
			<script src="js/imagebutton.js" type="text/javascript"></script>
			<script> 
				$('input[type=text]').attr('required',true);
				$('textarea').attr('required',true);
			</script>

@endsection