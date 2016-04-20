@extends('layout/admin')

@section('main')

			<h3>ADD ADMIN USER</h3>
			
			<div class="spacer20"></div>
			
			{!! Form::open(['id'=>'ajaxform', 'files' => true, 'method'=>'POST', 'route'=>'admin.adminusers.store', 'class'=>'form80']) !!}	
		
				<div class="spacer10"></div>
		
				<div class="formrow">
					{!! Form::label('userName', 'USER NAME:') !!}
					{!! Form::text('userName') !!}
				</div>
				
				<div class="formrow">
					{!! Form::label('password', 'PASSWORD:') !!}
					{!! Form::password('password') !!}
				</div>
				
				<div class="formrow">
					{!! Form::label('confirmpassword', 'CONFIRM:') !!}
					{!! Form::password('confirmpassword') !!}
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
					<button type="submit" class="btn btn-primary">ADD ADMIN USER</button>					
				</div>
				
				<div class="spacer20"></div>
					
			{!! Form::close() !!}
	
			<div class="spacer20"></div>
	
			<script src="js/imagebutton.js" type="text/javascript"></script>	
			<script> 
				$('input').attr('required',true);
				$('textarea').attr('required',true);
				
				$('button[type=submit]').click(function(){					
					if ($('input[name=password]').val() != $('input[name=confirmpassword]').val())
					{
						alert('Passwords do not match');
						return false;
					}
				});
			</script> 	

@endsection