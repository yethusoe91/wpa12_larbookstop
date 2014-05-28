@extends ('layouts.master')
@section('content')
<!-- Body Start Here --> 
<div class="row breadcrumb-container">
       <div class="container">
       	<ol class="breadcrumb">
       	           <li><a href="/">Home</a></li>
       	           <li><a href="/view/category.php">Category</a></li>
       	           <li class="active">software</li>
              	</ol>
       </div>
</div>
<div class="container">
       <div class="row">
              <div class="col-md-12">
                     <div class="row">
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
                     <hr/>
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
              </div> <!-- end of col-->
              <div class="row">
                     <div class="col-md-12">
                            <h1>Related Books</h1>
                     </div>
              </div>
       </div>
</div>
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
@stop