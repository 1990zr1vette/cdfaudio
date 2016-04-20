@extends('layout/admin')

@section('main')

			{!! Form::model($InventoryItem, ['id'=>'ajaxform', 'files' => true, 'method'=>'PATCH', 'route'=>['admin.brands.products.inventoryitems.update', $InventoryItem->brand_id, $InventoryItem->product_id, $InventoryItem->id], 'class'=>'form80']) !!}
			
				{!! Form::hidden('brand_id') !!}
				{!! Form::hidden('product_id') !!}
				{!! Form::hidden('product_type_id') !!}
				
				<div class="spacer20"></div>
	
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

				<img src="images/{{ $InventoryItem->image }}" />

				<div class="spacer20"></div>
				
				<div class="formimagerow">
					{!! Form::label('image', 'LOGO:') !!}
					{!! Form::file('image') !!}
					<button type="button" id="imagebutton" class="btn btn-primary">Change Image</button>
					<span id="imagename" style="display:inline-block;"></span>
				</div>
				
				<div class="button">
					<input type="hidden" name="active" value="{{ $InventoryItem->active }}" />
					<button type="button" class="activebutton activebutton{{ $InventoryItem->active }} btn btn-primary"></button>
				</div>
				
				<div class="button">
					<button class="btn btn-primary">UPDATE</button>
				</div>
				
				<div class="spacer20"></div>
				
			{!! Form::close() !!}
			
			<div class="spacer40"></div>
			
			<script src="js/imagebutton.js" type="text/javascript"></script>
			<script src="js/active-button.js" type="text/javascript"></script>	
			<script> 
				$('input[type=text]').attr('required',true);
				$('textarea').attr('required',true);
			</script> 			
			
@endsection