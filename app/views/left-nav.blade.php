@if(Sentry::check())
@if($currentUser->hasAccess('superuser'))
	<li class="dropdown" >
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="glyphicon glyphicon-list"></i> <span>Books</span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ URL::route('book.all') }}">Books</a></li>
                        <li><a href="{{ URL::route('book.add') }}">Add Book</a></li>
                        <li><a href="{{ URL::route('category.show') }}">Category</a></li>                        
                    </ul>
                </li>
@endif
@endif