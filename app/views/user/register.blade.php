@extends ('layouts.master')
@section('content')
<div class="container">
<div class="row">
	<div class="col-md-8 col-md-offset-2">
		{{ Form::open(array('url' => 'register-user')) }}
		<h2>Please Sign Up <small>It's free and always will be.</small></h2>
		<hr class="colorgraph">
		<div class="row">
		  	<div class="form-group">
			{{ Form::text('email', null , array('class' => 'form-control', 'placeholder' => 'Your Email')) }} 
			</div>	
		  	<div class="form-group">		
			{{ Form::password('password' , array('class' => 'form-control' , 'placeholder'	=> 'Password'))  }} 
			</div>	
		  	<div class="form-group">		
			{{ Form::password('password-confirmation' , array('class' => 'form-control', 'placeholder'=> 'Comfirm Password'))  }} 
			</div>	
		  	<div class="form-group">
			{{ Form::submit('Register' , array('class' => 'btn btn-primary btn-block btn-lg' ))}}
			</div>
			{{ Form::close() }}
		</div>
	</div>
</div>
</div>
@stop