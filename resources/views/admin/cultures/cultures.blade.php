@extends('layout/admin')

@section('main')
			<div class="button">
				<a href="admin/culture/create">
					<button type="submit" class="btn btn-primary">ADD CULTURE ITEM</button>
				</a>
			</div>
@foreach($Culture as $Culture)
			<div class="productrow row60">
				<span class="">{{ $Culture->title }}</span>
				<span class="button">
					<a href="admin/culture/{{ $Culture->id }}/edit">
						<button class="btn btn-primary">EDIT</button>
					</a>
				</span>
			</div>
@endforeach
			<div class="spacer40"></div>
@endsection