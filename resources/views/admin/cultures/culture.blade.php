@extends('layout/admin')

@section('main')
			
			<div class="spacer20"></div>
			
			{!! Form::model($Culture, ['method'=>'PATCH', 'files' => true, 'route'=>['admin.culture.update', $Culture->id], 'class'=>'form80']) !!}	
		
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

				<div style="width:100%; text-align:center;">
					<img src="images/{{ $Culture->image }}" />
				</div>
				
				<div class="spacer10"></div>
				
				<div class="formimagerow">
					{!! Form::label('image', 'LOGO:') !!}
					{!! Form::file('image') !!}
					<button type="button" id="imagebutton" class="btn btn-primary">Change Image</button>
					<span id="imagename" style="display:inline-block;"></span>
				</div>
				
				<div class="button">
					<input type="hidden" name="active" value="{{ $Culture->active }}" />
					<button type="button" class="activebutton activebutton{{ $Culture->active }} btn btn-primary"></button>
				</div>				
				
				<div class="button">
					<button type="submit" class="btn btn-primary">UPDATE CULTURE ITEM</button>					
				</div>
				
				<div class="spacer20"></div>
					
			{!! Form::close() !!}
	
			<div class="spacer20"></div>
	
			<script src="js/imagebutton.js" type="text/javascript"></script>
			<script src="js/active-button.js" type="text/javascript"></script>
			<script> 
				$('input[text=text]').attr('required',true);
				$('textarea').attr('required',true);
			</script>  	

@endsection