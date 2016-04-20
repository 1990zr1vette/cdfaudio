@extends('layout/admin')

@section('main')


			<div class="button">
				<a href="admin/products/create">
					<button type="submit" class="btn btn-primary">ADD PRODUCT</button>
				</a>
			</div>
			
@foreach($Products as $Product)
			<div class="productrow row60">
				
				<span class="title">{{ $Product->product }}</span>
				
				<span class="button">
					<a href="admin/products/{{ $Product->id }}/producttypes">
						<button class="btn btn-primary">PRODUCT TYPES</button>
					</a>
				</span>
				
				<span class="button">
					<a href="admin/products/{{ $Product->id }}/edit">
						<button class="btn btn-primary">EDIT</button>
					</a>
				</span>
				
			</div>
@endforeach
			

@endsection