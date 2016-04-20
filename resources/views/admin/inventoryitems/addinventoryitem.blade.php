@extends('layout/admin')

@section('main')

			<h3>{{ $Brand->brand }} {{ $Product->product }} ADD ITEM</h3>

			<div class="spacer20"></div>
			
			{!! Form::open(['id'=>'ajaxform', 'method'=>'POST', 'files' => true, 'route'=>'admin.brands.products.inventoryitems.store', 'class'=>'form80']) !!}	
				<input type="hidden" name="brand_id" value="{{ $Brand->id }}" />
				<input type="hidden" name="product_id" value="{{ $Product->id }}" />
				
				<div class="formrow select">
					<select name="product_type_id" required>
						<option value="">Choose {{ $Product->product }} Type</option>
@foreach($ProductTypes as $ProductType)
						<option value="{{ $ProductType->id }}">{{ $ProductType->type }}</option>
@endforeach
					</select>
				</div>
				
				<div class="formrow">
					{!! Form::label('model', 'MODEL:') !!}
					{!! Form::text('model') !!}
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
					<button type="submit" class="btn btn-primary">ADD ITEM</button>					
				</div>
				
				<div class="spacer20"></div>
				
			{!! Form::close() !!}
			
			<script src="js/imagebutton.js" type="text/javascript"></script>	
			
			<script> 
				$('input').attr('required',true);
				$('select').attr('required',true);
				$('textarea').attr('required',true);
			</script> 			
			
@endsection