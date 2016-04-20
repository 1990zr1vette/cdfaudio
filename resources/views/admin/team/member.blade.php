@extends('layout/admin')

@section('main')

			{!! Form::model($Member, ['id'=>'EditorialForm', 'files' => true, 'method'=>'PATCH', 'route'=>['admin.team.update', $Member->id], 'class'=>'form80']) !!}			

				<div class="formrow">
					{!! Form::label('first_name', 'FIRST NAME:') !!}
					{!! Form::text('first_name') !!}
				</div>
				
				<div class="formrow">
					{!! Form::label('last_name', 'LAST NAME:') !!}
					{!! Form::text('last_name') !!}
				</div>
				
				<div class="formrow">
					{!! Form::label('position', 'POSITION:') !!}
					{!! Form::text('position') !!}
				</div>

				<div class="formrow">
					{!! Form::label('position_fr', 'POSITION (FR):') !!}
					{!! Form::text('position_fr') !!}
				</div>	

				<div class="formtextarearow">
					{!! Form::label('description', 'DESCRIPTION:') !!}
					{!! Form::textarea('description') !!}
				</div>

				<div class="formtextarearow">
					{!! Form::label('description_fr', 'DESCRIPTION (FR):') !!}
					{!! Form::textarea('description_fr') !!}
				</div>

				<div style="width:100%; text-align:center;">
					<img src="images/{{ $Member->image }}" />
				</div>
				
				<div class="formimagerow">
					{!! Form::label('image', 'LOGO:') !!}
					{!! Form::file('image') !!}
					<button type="button" id="imagebutton" class="btn btn-primary">Choose Image</button>
					<span id="imagename" style="display:inline-block;"></span>
				</div>
				
				<div class="button">
					<button type="submit" class="btn btn-primary">UPDATE</button>					
				</div>				
				
				<div class="spacer20"></div>
				
			{!! Form::close() !!}			

			<div class="spacer40"></div>
			
			<script src="js/imagebutton.js" type="text/javascript"></script>
			<script> 
				$('input[type=text]').attr('required',true);
				$('textarea').attr('required',true);
			</script>

@endsection