@extends('layout/admin')

@section('main')

			<h3>ADD BRAND</h3>
			
			<div class="spacer20"></div>
			
			{!! Form::open(['id'=>'ajaxform', 'files' => true, 'method'=>'POST', 'route'=>'admin.brands.store', 'class'=>'form80']) !!}	
		
				<div class="spacer10"></div>
		
				<div class="formrow">
					{!! Form::label('brand', 'BRAND:') !!}
					{!! Form::text('brand') !!}
				</div>
				
				<div class="formrow">
					{!! Form::label('keywords', 'KEYWORDS:') !!}
					{!! Form::text('keywords') !!}
				</div>
				
				<div class="spacer10"></div>
				
				<div class="formrow">
					{!! Form::label('keywords_fr', 'KEYWORDS (FR):') !!}
					{!! Form::text('keywords_fr') !!}
				</div>
				
				<div class="spacer10"></div>				

				<div class="formrow">
					{!! Form::label('description', 'DESCRIPTION:') !!}
					{!! Form::text('description') !!}
				</div>

				<div class="spacer10"></div>
				
				<div class="formrow">
					{!! Form::label('description_fr', 'DESCRIPTION (FR):') !!}
					{!! Form::text('description_fr') !!}
				</div>				
				
				<div class="spacer10"></div>
				
				<div class="formrow">
					{!! Form::label('website', 'WEBSITE:') !!}
					{!! Form::text('website') !!}
				</div>					

				<div class="spacer20"></div>
				
				<div class="formtextarearow">
					{!! Form::label('about', 'ABOUT:') !!}
					{!! Form::textarea('about') !!}
				</div>

				<div class="formtextarearow">
					{!! Form::label('about_fr', 'ABOUT (FR):') !!}
					{!! Form::textarea('about_fr') !!}
				</div>
				
				<div class="formimagerow">
					{!! Form::label('image', 'LOGO:') !!}
					{!! Form::file('image') !!}
					<button type="button" id="imagebutton" class="btn btn-primary">Choose Image</button>
					<span id="imagename" style="display:inline-block;"></span>
				</div>
								
				<div class="button">
					<button type="submit" class="btn btn-primary">ADD BRAND</button>					
				</div>
				
				<div class="spacer20"></div>
					
			{!! Form::close() !!}
	
			<div class="spacer20"></div>
	
			<script src="js/imagebutton.js" type="text/javascript"></script>	
			<script> 
				$('input').attr('required',true);
				$('textarea').attr('required',true);
			</script> 	

@endsection