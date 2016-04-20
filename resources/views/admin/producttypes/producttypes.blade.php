@extends('layout/admin')

@section('main')
			
			<div class="button">
				<a href="admin/products/{{ $Product->id }}/producttypes/create">
					<button type="submit" class="btn btn-primary">ADD TYPE</button>
				</a>
			</div>
			
			<fieldset>
				<legend align="center">{{ $Product->product }}</legend>
				
@foreach($ProductTypes as $ProductType)
				<div class="fieldsetrow">
					<span class="title">{{ $ProductType->type }}</span>
					
					<span class="button">
						<a href="admin/products/{{ $Product['id'] }}/producttypes/{{ $ProductType->id }}/edit">
							<button class="btn btn-primary">EDIT</button>
						</a>
					</span>
				</div>
				
				<div class="spacer10"></div>
@endforeach
			
			</fieldset>

@endsection