@extends('layouts.admin_master')

@section('content')
	<div class="row">
		<div class="col-md-2">
			@include('dashboard.nav')
		</div>
		<div class="col-lg-10"  style="z-index:100;">
		<br />
<table class="table table-striped table-bordered table-condensed">
	<thead>
		<tr role="row">
			<th  style="text-align: center;" >
				<input type="checkbox">
			</th>
			<th>Book Title</th>
			<th>Author</th>
			<th>publisher</th>
			<th></th>
		</tr>
	</thead>
	<tbody>        
		@foreach ($books as $book)                                   
		<tr>
			<td  style="text-align: center;">
				<input type="checkbox">
			</td>
			<td>{{$book->bookname}}</td>
			<td>{{$book->author }}</td>
			<td>{{$book->publisher }}</td>
			<td class="text-center">


				{{ link_to_route('book.edit' , 'Edit', array('id' => $book->id ), array('class' => 'btn btn-success glyphicon glyphicon-align-right')); }}

				{{ Form::open(array('method' => 'DELETE', 'route' => array('book.delete', $book->id),'style' => 'display:inline;')) }}							

				{{ Form::submit('Delete', array('class' => 'btn btn-danger glyphicon glyphicon-edit')) }}

				{{ Form::close() }}
			</td>
		</tr>
		@endforeach
	</tbody>
</table> 
{{ $books->links(); }}

@stop
