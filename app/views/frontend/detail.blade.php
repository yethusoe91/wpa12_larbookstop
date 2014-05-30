@extends ('layouts.master')
@section('content')
<!-- Body Start Here --> 
<div class="container">
<ol class="breadcrumb">
  	<li><a href="{{ URL::to('/'); }}">Home</a></li>
  	<li><a href="{{ URL::to('/'); }}/category/{{ $category_name->id }}">{{ $category_name->name }}</a></li>
	<li>{{$book->bookname }}</li>
</ol>
<div class="row">
	<div class="col-md-12">
		<div class="col-md-4">
			<div class="container">
				<a href="#" class="thumbnail" data-toggle="modal" data-target="#lightbox"> 
					<img class="text-center" src="{{ URL::to('/'); }}/uploads/books/{{ $book->image }}">
				</a>
			</div>
		</div>
		<div class="col-md-8">
			<h2>{{ $book->bookname }}</h2>
			by <span class="text-danger">{{ $book->author }} </span><br/>
			<hr>
			<h4>$ {{ $book->price }}</h4>
			<button type="button" class="btn btn-success"><i class="glyphicon glyphicon-shopping-cart pdg-lft-10"></i>{{ trans('all.buy-now')}}</button>
		</div>
	</div>
</div>
<br/>

<div class="row">
	<div class="col-md-12">
		<ul class="nav nav-tabs" id="myTab">
			<li class="active"><a href="#moreinfo">Description</a></li>
			<li><a href="#Revuews">Moreinfo</a></li>
		</ul>

		<div class="tab-content">
			<div class="tab-pane active" id="moreinfo">
				<p class="text-primary custom-padding">{{ $book->description }}</p>
			</div>
			<div class="tab-pane" id="Revuews">
				<h3>More Info</h3>
			</div>
		</div>
	</div>
</div>
<br/>
<div class="row table-bordered">
	<div class="col-md-12">
	<h3><small><em>Related products </em><span class="glyphicon glyphicon-ok"></span></small></h3>
	
	@if( $related_products->count() != '1' )

	@foreach ($related_products as $related_book)
	
		@if( $book->id != $related_book->id)
			<div class="col-md-3  wow swing">
				<a href="{{ URL::to('detail')}}/{{ $related_book->id }}" >
				<img src="{{ URL::to('/'); }}/uploads/books/{{ $related_book->image }}" class="img-thumbnail" style="margin-left:25px;">
				<br/>
				<h5 class="text-danger text-center"> {{ $related_book->bookname }} </h5>
				</a>
			</div> 
		@endif
	
	@endforeach

	@else 
		<span 	style="display:inline-block;margin-bottom:20px;"><span class="glyphicon glyphicon-warning-sign text-warning"></span><small> <em>Sorry, there is no related books with</em> </small><span class="label label-warning">{{ $book->bookname }}</span></span>
	@endif

	</div>
</div><!-- endf of related product -->

<div id="lightbox" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<button type="button" class="close hidden" data-dismiss="modal" aria-hidden="true">×</button>
		<div class="modal-content">
			<div class="modal-body">
				<img src="" alt="" />
			</div>
		</div>
	</div>
</div>
</div>
@stop
