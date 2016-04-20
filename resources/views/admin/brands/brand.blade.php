@extends('layout/admin')

@section('main')

			{!! Form::model($Brand, ['id'=>'BrandForm', 'files' => true, 'method'=>'PATCH', 'route'=>['admin.brands.update', $Brand->id], 'class'=>'form80']) !!}			

				<div class="spacer10"></div>
				
				<div class="formrow">
					{!! Form::label('brand', 'Brand:') !!}
					{!! Form::text('brand') !!}
				</div>
				
				<div class="spacer10"></div>
				
				<div class="formtextarearow">
					{!! Form::label('about', 'ABOUT:') !!}
					{!! Form::textarea('about') !!}
				</div>
				
				<div class="spacer10"></div>
				
				<div class="formtextarearow">
					{!! Form::label('about_fr', 'ABOUT:') !!}
					{!! Form::textarea('about_fr') !!}
				</div>
				
				<div class="spacer10"></div>
				
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
				
				<div class="spacer10"></div>
				
				<div class="formimagerow">
					{!! Form::label('image', 'LOGO:') !!}
					{!! Form::file('image') !!}
					<button type="button" id="imagebutton" class="btn btn-primary">Choose Image</button>
					<span id="imagename" style="display:inline-block;"></span>
				</div>
				
				<div class="spacer20"></div>
				
				<div class="button">
					<input type="hidden" name="active" value="{{ $Brand->active }}" />
					<button type="button" class="activebutton activebutton{{ $Brand->active }} btn btn-primary"></button>
				</div>
				
				<div class="button">
					<button type="submit" class="btn btn-primary">UPDATE</button>					
				</div>				
				
				<div class="spacer20"></div>
				
			{!! Form::close() !!}			

			<script src="js/imagebutton.js" type="text/javascript"></script>
			<script src="js/active-button.js" type="text/javascript"></script>			
			<script> 
				$('input[type=text]').attr('required',true);
				$('textarea').attr('required',true);
			</script>

@endsection