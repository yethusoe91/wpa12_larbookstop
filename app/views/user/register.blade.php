@extends ('layouts.master')
@section('content')
<div class="container">
<div class="row">
	<div class="col-md-8 col-md-offset-2">
		{{ Form::open(array('url' => 'register')) }}
		<h2>Please Sign Up <small>It's free and always will be.</small></h2>
		<hr class="colorgraph">
		<div class="row">
			
			{{ Form::text('name', null , array('class' => 'form-control', 'placeholder' => 'Your Name')) }} 
			
			{{ Form::text('email', null , array('class' => 'form-control', 'placeholder' => 'Your Email')) }} 
			
			{{ Form::password('password' , array('class' => 'form-control' , 'placeholder'	=> 'Password'))  }} 
					
			{{ Form::password('password-confirmation' , array('class' => 'form-control', 'placeholder'=> 'Comfirm Password'))  }} 
			
			{{ Form::submit('Register' , array('class' => 'btn btn-primary btn-block btn-lg' ))}}
				
			{{ Form::close() }}
		</div>
	</div>
</div>
</div>
@stop