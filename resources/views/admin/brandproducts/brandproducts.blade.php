@extends('layout/admin')

@section('main')

			<h2>BRAND: {{ $Brand->brand }}</h2>

			<div class="button">
				<a href="admin/brands/{{ $Brand->id }}/products/create">
					<button type="submit" class="btn btn-primary">ADD PRODUCT</button>
				</a>
			</div>
			
@foreach($BrandProducts as $BrandProduct)
			<div class="productrow row60">
				<span class="">{{ $BrandProduct->Product->product }}</span>
				
				<span class="button">
					<a href="admin/brands/{{ $Brand->id }}/products/{{ $BrandProduct->Product->id }}/inventoryitems">
						<button class="btn btn-primary">INVENTORY ITEMS</button>
					</a>
				</span>
				
				<span class="button">
					<a href="">
						<button class="btn btn-primary">EDIT</button>
					</a>
				</span>
			</div>
@endforeach 			

@endsection