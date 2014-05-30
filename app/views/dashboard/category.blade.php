@extends('layouts.admin_master')

@section('content')
	<div class="row" style="margin-top:20px;">
		<div class="col-md-2">
			@include('dashboard.nav')
		</div>
		<div class="col-lg-9"  style="z-index:100;">
				{{ Form::open(array('url' => URL::current() ,  'method' => 'POST')) }}
				
				<div class="form-group">
					{{ Form::text('category-name', '' , array('class' => 'form-control', 'placeholder' => 'Category Name')) }}
				</div>              

				<div class="form-group">
					{{ Form::submit('Submit' , array('class' => 'btn btn-primary' ))}}
				</div>   
				
				{{ Form::close() }}
			
				<ul class="list-group col-md-12">

					@foreach($categories as $category)

					
					<li class="list-group-item">{{ $category->id }} : {{ $category->name }}</li>

					@endforeach

				</ul>
		</div>
		
	</div>
@stop




