@extends('layout/admin')

@section('main')

			<h3>ADD CULTURE</h3>
			
			<div class="spacer20"></div>
			
			{!! Form::open(['id'=>'addcultureform', 'method'=>'POST', 'files' => true, 'route'=>'admin.culture.store', 'class'=>'form80']) !!}
				<div class="spacer20"></div>
				
				<div class="formrow">
					{!! Form::label('title', 'TITLE:') !!}
					{!! Form::text('title') !!}
				</div>
				
				<div class="formrow">
					{!! Form::label('title_fr', 'TITLE (FR):') !!}
					{!! Form::text('title_fr') !!}
				</div>

				<div class="formtextarearow">
					{!! Form::label('description', 'DESCRIPTION:') !!}
					{!! Form::textarea('description') !!}
				</div>

				<div class="formtextarearow">
					{!! Form::label('description_fr', 'DESCRIPTION (FR):') !!}
					{!! Form::textarea('description_fr') !!}
				</div>

				<div class="formimagerow">
					{!! Form::label('image', 'LOGO:') !!}
					{!! Form::file('image') !!}
					<button type="button" id="imagebutton" class="btn btn-primary">Choose Image</button>
					<span id="imagename" style="display:inline-block;"></span>
				</div>
				
				<div class="button">
					<button type="submit" class="btn btn-primary">ADD CULTURE ITEM</button>					
				</div>
				
				<div class="spacer20"></div>
					
			{!! Form::close() !!}
	
			<div class="spacer20"></div>
	
			<script src="js/imagebutton.js" type="text/javascript"></script>
			<script> 
				$('input[text=text]').attr('required',true);
				$('textarea').attr('required',true);
			</script> 	

@endsection