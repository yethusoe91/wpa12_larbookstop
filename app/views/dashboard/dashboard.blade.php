@extends ('layouts.admin_master')
@section('content')
<div id="page-wrapper">
           	<div class="row">
               	<div class="col-lg-12">
                    		<h3 class="page-header">Dashboard</h3>
              	</div>
            	</div>
            	<div class="row">
            		<div class="col-lg-12">
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
            	<div class="row move-buttom-20">
            	    <div class="col-lg-12">
            	    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="glyphicon glyphicon-th-list"></i> Last Customer
            			<table class="table">
  				<thead>
  					<th>No</th>
  					<th>Name</th>
  					<th>Email</th>
  					<th>Join Date</th>
  				</thead>
  				<tr>
  					<td>1</td>
  					<td>2</td>
  					<td>3</td>
  					<td>4</td>
  				</tr>
			</table>
            		</div>
	</div>
            	</div>
            	</div>
</div>
@stop
