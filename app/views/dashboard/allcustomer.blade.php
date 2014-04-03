@extends ('layouts.admin_master')
@section('content')
<div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<h3 class="page-header">All Customer</h3>
		</div>

		<!-- /.col-lg-12 -->
	</div>
	@if(Session::has('message'))
	<div class="alert alert-danger">
		{{ Session::get('message')}}
	</div>
	@endif
	<!-- Content Start -->
	<div class="row">
		<div class="col-md-12">
			<table class="table table-bordered tablesorter"  id="myTable" >
				<thead>
					<tr>
						<th>No</th>
						<th>Name</th>
						<th>Email Address</th>
						<th>Join Date</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					@foreach ($customers as $customer)					
					<tr>
						<td>{{ $customer->id}}</td>
						<td>{{ $customer->username}}</td>
						<td>{{ $customer->email}}</td>
						<td>{{ $customer->updated_at}}</td>
						<td class="text-center">

							{{ link_to_route('customer.detail' , 'Detail', array('id' => $customer->id ), array('class' => 'btn btn-success glyphicon glyphicon-align-right')); }}

							{{ link_to_route('customer.edit' , 'Edit', array('id' => $customer->id ), array('class' => 'btn btn-info glyphicon glyphicon-edit')); }}

							{{ Form::open(array('method' => 'DELETE', 'route' => array('customer.delete', $customer->id),'style' => 'display:inline;')) }}							
							{{ Form::submit('Delete', array('class' => 'btn btn-danger glyphicon glyphicon-edit')) }}
							
							{{ Form::close() }}

						</td>
					</tr>
					@endforeach
				</tbody>
			</table>				
		</div>

		{{ $customers->links(); }}

	</div>    
</div>

@stop













