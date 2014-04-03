@extends ('layouts.admin_master')
@section('content')
<div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<h3 class="page-header">Edit Customer</h3>
		</div>
		<!-- /.col-lg-12 -->
	</div>
	<!-- Content Start -->
	<div class="row">
		<div class="col-md-12">
		
				{{ Form::open(array('url' => URL::current() ,  'method' => 'POST')) }}
				
				@foreach($errors->get('username') as $error )
				<div class="alert alert-danger">
					{{ $error }}
				</div>
				@endforeach
				<div class="form-group">
				{{ Form::text('username', $customer->username , array('class' => 'form-control', 'placeholder' => 'Your Name')) }} 
				</div>
				<div class="form-group">
				@foreach($errors->get('email') as $error )
				<div class="alert alert-danger">
					{{ $error }}
				</div>
				@endforeach

				{{ Form::text('email', $customer->email , array('class' => 'form-control', 'placeholder' => 'Your Email')) }} 
				</div>
				{{ Form::submit('Submit' , array('class' => 'btn btn-primary btn-block btn-lg' ))}}
				
				{{ Form::close() }}
		</div>	
	</div>    
</div>

@stop
