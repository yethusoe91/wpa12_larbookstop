@extends ('layouts.master')
@section('content')
<div class="container">
	<div class="row">
		<h3 class="category-title" ><span class="glyphicon glyphicon-bell" ></span><span data-wow-duration="1s" data-wow-delay="1s" class="wow " >Feature Books</span></h3>			
		<div class="col-md-12">
			@foreach($books as $book)
			<!--Offer start-->
			<div class="col-md-3">	
					<div class="book-info-container offer">
						<div class="title">
							{{ $book->bookname }} 
							<div class="row">
								<em>by</em> <small>{{ $book->author }} </small>
							</div>
						</div>
						<div class="image wow bounceIn" >
							<a href="{{ URL::to('detail')}}/{{ $book->id }}"><img src="{{URL::to('/')}}/uploads/books/{{ $book->image}}" /></a>
						</div>
						<div class="price">
							{{ $book->price }} $
						</div>
						<a href="#" class="add-to-cart text-muted"><i class="glyphicon glyphicon-shopping-cart text-danger pdg-lft-10"></i>{{ trans('all.buy-now')}}</a>
					</div>

					<!-- <div class="offer offer-danger">
						<div class="offer-content">
							<h3 class="book-title">
								{{ $book->bookname }} 
							</h3>
							<p>
								<a href="{{ URL::to('detail')}}/{{ $book->id }}" ><img src="{{URL::to('/')}}/uploads/books/{{ $book->image}}"  class="img-thumbnail img-responsive" ></a><br>					
							</p>
							<small>By {{ $book->author }}</small>

							<small class="text-danger">{{ $book->price }} </small><br>

							<button class="btn btn-sm btn-success col-md-12">Buy it Now</button>
						</div>
					</div> -->
				</div><!-- End of col-->    
			<!--Offer End-->   
			@endforeach
		</div>				  
	</div>
</div>
@stop