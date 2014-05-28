@extends('layouts.admin_master')

@section('content')
<br/>
	<div class="row">
		<div class="col-md-2">
			@include('dashboard.nav')
		</div>
		<div class="col-lg-9" style="z-index:100;">
			<div class="col-lg-3">
				<a href="{{ URL::to('/admin') }}"><button type="button" class="col-lg-12 btn btn-default btn-lg">
					<span class="glyphicon glyphicon-list"></span> View Order
				</button></a>
			</div>
			<div class="col-lg-3">
				<a href="{{ URL::to('/admin/allcustomer') }}"><button type="button" class="col-lg-12 btn btn-default btn-lg">
					<span class="glyphicon glyphicon-list"></span> View Customer
				</button></a>
			</div>            			
			<div class="col-lg-3">
				<a href="{{ URL::to('/admin/addbook') }}"><button type="button" class="col-lg-12 btn btn-default btn-lg">
					<span class="glyphicon glyphicon-plus"></span>  Add Book
				</button></a>
			</div>
			<div class="col-lg-3">
				<a href="{{ URL::to('/admin/') }}"><button type="button" class="col-lg-12 btn btn-default btn-lg">
					<span class="glyphicon glyphicon-plus"></span> Add Category
				</button></a>
			</div>		
		</div>
	</div>
@stop