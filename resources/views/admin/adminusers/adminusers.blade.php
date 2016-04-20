@extends('layout/admin')

@section('main')

			<div class="button">
				<a href="admin/adminusers/create">
					<button type="submit" class="btn btn-primary">ADD ADMIN USER</button>
				</a>
			</div>
			
@foreach($AdminUsers as $AdminUser)
			<div class="productrow row60">
				
				<span class="">{{ $AdminUser->fullName() }}</span>
				
				<span class="button">
					<a href="admin/adminusers/{{ $AdminUser->id }}/edit">
						<button class="btn btn-primary">EDIT</button>
					</a>
				</span>
				
			</div>
@endforeach

			<div class="spacer20"></div>

@endsection