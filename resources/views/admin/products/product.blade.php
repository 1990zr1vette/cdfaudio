@extends('layout/admin')

@section('main')
			
			<div class="button">
				<a href="admin/products"><button type="button" class="btn btn-primary">BACK TO PRODUCTS</button></a>
			</div>	

			<div class="spacer20"></div>
			
			{!! Form::model($Product, ['id'=>'ajaxform', 'method'=>'PATCH', 'route'=>['admin.products.update', $Product['id']], 'class'=>'form80']) !!}	

				<div class="spacer10"></div>
			
				<div class="formrow">
					{!! Form::label('product', 'PRODUCT:') !!}
					{!! Form::text('product') !!}
				</div>
				
				<div class="formrow">
					{!! Form::label('product_fr', 'PRODUCT (FR):') !!}
					{!! Form::text('product_fr') !!}
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
					<input type="hidden" name="active" value="{{ $Product->active }}" />
					<button type="button" class="activebutton activebutton{{ $Product->active }} btn btn-primary"></button>
				</div>
				
				<div class="button">
					<button type="submit" class="btn btn-primary">UPDATE</button>
				</div>
				
				<div class="spacer10"></div>
					
			{!! Form::close() !!}
		
			<script src="js/active-button.js" type="text/javascript"></script>
			
@endsection