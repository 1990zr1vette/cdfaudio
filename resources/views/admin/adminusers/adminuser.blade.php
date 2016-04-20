@extends('layout/admin')

@section('main')

			{!! Form::model($AdminUser, ['id'=>'AdminUserForm', 'files' => true, 'method'=>'PATCH', 'route'=>['admin.adminusers.update', $AdminUser->id], 'class'=>'form80']) !!}			

				<div class="spacer10"></div>
		
				<div class="formrow">
					{!! Form::label('userName', 'USER NAME:') !!}
					{!! Form::text('userName') !!}
				</div>
				
				<div class="formrow">
					{!! Form::label('firstName', 'FIRST NAME:') !!}
					{!! Form::text('firstName') !!}
				</div>
				
				<div class="formrow">
					{!! Form::label('lastName', 'LAST NAME:') !!}
					{!! Form::text('lastName') !!}
				</div>
								
				<div class="button">
					<button type="submit" class="btn btn-primary">UPDATE ADMIN USER</button>					
				</div>
				
				<div class="spacer20"></div>
				
			{!! Form::close() !!}			

			<script>
				$('input[type=text]').attr('required',true);
				$('textarea').attr('required',true);
			</script>

@endsection