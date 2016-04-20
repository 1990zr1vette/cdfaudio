@extends('layout/admin')

@section('main')
			
			{!! Form::model($ProductType, ['id'=>'ajaxform', 'method'=>'PATCH', 'route'=>['admin.products.producttypes.update', $ProductType->product_id, $ProductType->id], 'class'=>'form80']) !!}

				<div class="spacer10"></div>
				
				<div class="formrow">
					{!! Form::label('product', 'TYPE:') !!}
					{!! Form::text('type') !!}
				</div>
				
				<div class="formrow">
					{!! Form::label('type_fr', 'TYPE (FR):') !!}
					{!! Form::text('type_fr') !!}
				</div>	
				
				<div class="formrow">
					{!! Form::label('keywords', 'KEYWORDS:') !!}
					{!! Form::text('keywords') !!}
				</div>
				
				<div class="formrow">
					{!! Form::label('keywords_fr', 'KEYWORDS (FR):') !!}
					{!! Form::text('keywords_fr') !!}
				</div>

				<div class="formrow">
					{!! Form::label('description', 'DESCRIPTION:') !!}
					{!! Form::text('description') !!}
				</div>

				<div class="formrow">
					{!! Form::label('description_fr', 'DESCRIPTION (FR):') !!}
					{!! Form::text('description_fr') !!}
				</div>		
				
				<div class="button">
					<input type="hidden" name="active" value="{{ $ProductType->active }}" />
					<button type="button" class="activebutton activebutton{{ $ProductType->active }} btn btn-primary"></button>
				</div>
				
				<div class="button">
					<button type="submit" class="btn btn-primary">UPDATE</button>					
				</div>
				
				<div class="spacer10"></div>
				
			{!! Form::close() !!}
	
			<script src="js/active-button.js" type="text/javascript"></script>
	
			<script> 
				$('input').attr('required',true);
				$('textarea').attr('required',true);
			</script> 	

@endsection