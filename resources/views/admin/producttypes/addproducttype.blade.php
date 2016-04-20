@extends('layout/admin')

@section('main')

			<h3>ADD {{ $Product->product }} Product Type</h3>
			
			<div class="spacer20"></div>
			
			{!! Form::open(['id'=>'ajaxform', 'method'=>'POST', 'route'=>'admin.products.producttypes.store', 'class'=>'form80']) !!}	

				{!! Form::hidden('product_id', $Product->id) !!}
			
				<div class="spacer10"></div>
			
				<div class="formrow">
					{!! Form::label('type', 'TYPE:') !!}
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
					<button type="submit" class="btn btn-primary">ADD TYPE</button>					
				</div>
					
				<div class="spacer10"></div>
				
			{!! Form::close() !!}
			
			<script>
				$('input[type=text]').attr('required', true);
				$('textarea').attr('required', true);
			</script>			

@endsection