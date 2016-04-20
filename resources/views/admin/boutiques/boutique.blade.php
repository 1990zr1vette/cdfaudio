@extends('layout/admin')

@section('main')
			
			<div class="spacer20"></div>
			
			{!! Form::model($Boutique, ['method'=>'PATCH', 'route'=>['admin.boutiques.update', $Boutique->id], 'class'=>'form80']) !!}	
		
				<div class="formrow">
					{!! Form::label('boutique', 'BOUTIQUE:') !!}
					{!! Form::text('boutique') !!}
				</div>
				
				<div class="formrow">
					{!! Form::label('website', 'WEBSITE:') !!}
					{!! Form::text('website') !!}
				</div>				
												
				<div class="button">
					<button type="submit" class="btn btn-primary">UPDATE BOUTIQUE</button>					
				</div>
				
				<div class="spacer20"></div>
					
			{!! Form::close() !!}
	
			<div class="spacer20"></div>
	
			<script> 
				$('input[name=artist]').attr('required',true);
			</script> 	

@endsection