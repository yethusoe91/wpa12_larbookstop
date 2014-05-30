<nav class="navbar-default navbar-static-side" role="navigation">
	<div class="sidebar-collapse">
		<ul class="nav" id="side-menu">
			<li class="sidebar-search">
				<div class="input-group custom-search-form">
					<input type="text" class="form-control" placeholder="Search...">
					<span class="input-group-btn">
						<button class="btn btn-default" type="button">
							<i class="fa fa-search"></i>
						</button>
					</span>
				</div>
				<!-- /input-group -->
			</li>
			<li><a href="{{ URL::route('indexDashboard') }}"><i class="glyphicon glyphicon-home"></i> <span>Dashboard</span></a></li>
 			<li>
				<a href="#"><span class="glyphicon glyphicon-th-list"></span> Books 									      <span class="caret"></span>
				</a>
				<ul class="nav nav-second-level">
					<li><a href="{{ URL::route('book.all') }}">Books</a></li>
					<li><a href="{{ URL::route('book.add') }}">Add Book</a></li>
					<li><a href="{{ URL::route('category.show') }}">Category</a></li>   
				</ul>    
			</li>

			<li>
				<a href="{{ URL::to("/dashboard") }}"><span class="glyphicon glyphicon-user"></span> Customer<span class="caret"></span>
				</a>
				<ul class="nav nav-second-level">
					<li>
						<a href="{{ URL::to("/dashboard") }}">All Customer </a>

					</li>
					<li>
						<a href="#">Online Customer</a>
					</li>
				</ul>
				<!-- /.nav-second-level -->
			</li>
		</ul>
		<!-- /#side-menu -->
	</div>
	<!-- /.sidebar-collapse -->
</nav>