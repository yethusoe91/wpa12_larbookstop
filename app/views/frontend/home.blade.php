@extends ('layouts.master')
@section('content')
<div class="container">
	<h2 class="text-success">Bestsellers</h2>
	<div class="row">			
		<div class="col-md-12">
			@foreach($books as $book)
			<!--Offer start-->
			<div class="col-md-3">
				<div class="col-md-12">
					<div class="offer offer-danger">
						
						<div class="offer-content">
							<h3 class="book-title">
								{{ $book->bookname }} 
							</h3>
							<p>
								<a href="{{ URL::to('detail')}}/{{ $book->id }}" ><img src="{{URL::to('/')}}/uploads/books/{{ $book->image}}"  class="text-center img-thumbnail" ></a><br>
								<small>By {{ $book->author }} 
								</small><br>
								<small class="text-danger">{{ $book->price }} </small><br>
								<button class="btn btn-sm btn-success col-md-12">Buy it Now</button>
							</p>
						</div>
					</div>
				</div>    
			</div>
			<!--Offer End-->   
			@endforeach
		</div>				  
	</div>
</div>
@stop