@extends('layouts.admin_master')

@section('content')
	<div class="row" style="margin-top:20px;">
		<div class="col-md-2">
			@include('dashboard.nav')
		</div>
		<div class="col-lg-10"  style="z-index:100;">
					{{ Form::open(array('url' => URL::current() ,  'method' => 'POST','files' => 'true')) }}
					<div class="form-group">
						@foreach($errors->get('bookname') as $error )
						<div class="alert alert-danger">
							{{ $error }}
						</div>
						@endforeach
						{{ Form::text('bookname', Input::old('bookname') , array('class' => 'form-control', 'placeholder' => 'Book Name')) }}
					</div>
					<div class="form-group">
						@foreach($errors->get('category') as $error )
						<div class="alert alert-danger">
							{{ $error }}
						</div>
						@endforeach
						
						{{ Form::select('category', $categories , null , array('class' => 'form-control')); }}

					</div>              
					<div class="form-group">
						@foreach($errors->get('description') as $error )
						<div class="alert alert-danger">
							{{ $error }}
						</div>        
						@endforeach
						{{ Form::textarea('description', null , array('class' => 'form-control', 'placeholder' => 'Description','id' =>'ckeditor')) }} 
					</div>              
					<div class="form-group">
						@foreach($errors->get('author') as $error )
						<div class="alert alert-danger">
							{{ $error }}
						</div>
						@endforeach
						{{ Form::text('author', null , array('class' => 'form-control', 'placeholder' => 'Author')) }} 
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
						{{ Form::text('publisher', null , array('class' => 'form-control', 'placeholder' => 'Publisher')) }} 
					</div>
					<div class="row">
						<div class="form-group col-md-2">
							<label class="switch-light switch-candy" style="margin:0;" onclick="">
								{{ Form::checkbox('publish', 'later') }}
								<span>
									<span>publish</span>
									<span>Later</span>
								</span>
								<a></a>
								
							</label>
						</div>
					</div>
					<div class="form-group">
						{{ Form::file('file' , null , array('class' => 'form-control'))}}
					</div>
					<div class="form-group">
						{{ Form::submit('Submit' , array('class' => 'btn btn-primary btn-block btn-lg' ))}}
					</div>   
					{{ Form::close() }}
		</div>
	</div>
@stop




