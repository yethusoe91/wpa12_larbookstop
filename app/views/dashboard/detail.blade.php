@extends ('layouts.admin_master')
@section('content')
<div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<h3 class="page-header">All Customer</h3>
		</div>
		<!-- /.col-lg-12 -->
	</div>
	<!-- Content Start -->
	<div class="row">
		<div class="col-md-12">
			<table class="table table-bordered">
				<tbody>
					<tr>
						<td>ID</td>
						<td>{{ $customer->id }}</td>
					</tr>
					<tr>
						<td>Name</td>
						<td>{{ $customer->username }}</td>
					</tr>
					<tr>
						<td>Email Address</td>
						<td>{{ $customer->email }}</td>
					</tr>										
			</tbody>
		</table>	
	</div>	
</div>    
</div>

@stop
