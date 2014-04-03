@extends ('layouts.admin_master')
@section('content')
<div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<h3 class="page-header">Edit Book</h3>
		</div>
		<!-- /.col-lg-12 -->
	</div>
	<!-- Content Start -->
	<div class="row">
		<div class="col-md-12">

			{{ Form::open(array('url' => URL::current() ,  'method' => 'POST')) }}

			<div class="form-group">
				@foreach($errors->get('bookname') as $error )
				<div class="alert alert-danger">
					{{ $error }}
				</div>
				@endforeach

			{{ Form::text('bookname', $books->bookname , array('class' => 'form-control', 'placeholder' => 'bookname')) }} 
			</div>
			<div class="form-group">
				@foreach($errors->get('description') as $error )
				<div class="alert alert-danger">
					{{ $error }}
				</div>
				@endforeach

				{{ Form::textarea('description', $books->description , array('class' => 'form-control', 'placeholder' => 'description','id' => 'ckeditor')) }} 
			</div>
			<div class="form-group">
				@foreach($errors->get('author') as $error )
				<div class="alert alert-danger">
					{{ $error }}
				</div>
				@endforeach

				{{ Form::text('author', $books->author , array('class' => 'form-control', 'placeholder' => 'Author')) }} 
			</div>
			<div class="form-group">
                                                        @foreach($errors->get('price') as $error )
                                                        <div class="alert alert-danger">
                                                                      {{ $error }}
                                                        </div>
                                                        @endforeach
                                                        {{ Form::text('price', null , array('class' => 'form-control', 'placeholder' => 'price')) }} 
                                          </div>     
			<div class="form-group">
				@foreach($errors->get('publisher') as $error )
				<div class="alert alert-danger">
					{{ $error }}
				</div>
				@endforeach

				{{ Form::text('publisher', $books->publisher , array('class' => 'form-control', 'placeholder' => 'Publisher')) }} 
			</div>
			 		       
			<div class="form-group">
				{{ Form::submit('Submit' , array('class' => 'btn btn-primary btn-block btn-lg' ))}}
			</div>
			{{ Form::close() }}
		</div>	
	</div>    
</div>

@stop
