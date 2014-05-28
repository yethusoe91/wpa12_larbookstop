<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>
		{{ trans('all.site-name') }} - {{ App::getLocale();  }}  {{isset($title) ? '- '.$title : '' }}
	</title>
	{{ HTML::style('css/bootstrap.css') }}
	{{ HTML::style('css/animate.css')}}
	{{ HTML::style('css/style.css')}}
	{{ HTML::script('js/jquery.js') }}
	{{ HTML::script('js/bootstrap.js') }}
	{{ HTML::script('js/wow.min.js') }}
	<script>
	 	new WOW().init();
	</script>
</head>

<body>	
	@if(Session::has('message'))
	<div class="alert alert-danger">
		{{ Session::get('message')}}
	</div>
	@endif
	<div class="header">
	<div class="row">
		<div class="col-md-12 ">
			<nav class=" navbar-default navbar-xs" style="background: rgb(214, 211, 211);" role="navigation">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					<div class="collapse navbar-collapse  pull-right" style="margin-right:16px;">
						<ul class="nav navbar-nav">
							<li><a href=""><i class="glyphicon glyphicon-home"></i></a></li>
							<li><a href="/layout/cart.php"><i class="glyphicon glyphicon-shopping-cart"></i></a></li>
							<li><a href="/layout/profile.php"><i class="glyphicon glyphicon-user"></i></a></li>
							<li><a href="{{ URL::to('dashboard') }}"><i class="glyphicon glyphicon-log-in"></i></a></li>
							<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Languages <b class="caret"></b></a>
								<ul class="dropdown-menu">
									@foreach ($languages as $key => $value)
										<li>{{ link_to_route('change-lang', $value, $key) }}</li>
									@endforeach
								</ul>
							</li>

						</ul>
					</div>
				</div>
			</nav>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-5">
				<h1 class="text-danger logo"><a class="text-success" href="{{ URL::to('/')}}">
					{{ trans('all.site-name') }}</a></h1>
				</div>
				<div class="col-md-6">

				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 ">
				<nav class="navbar navbar-xs main-nav" role="navigation">
					<div class="container">
						<ul class="nav navbar-nav">
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Books By Category <b class="caret"></b></a>
								<ul class="dropdown-menu">

								@foreach($categories as $category)
									
									<li><a href="{{ URL::route('cagetory.single', $category->id )}}">{{ $category->name }}</a></li>
									

								@endforeach
								</ul>
							</li>
						</ul>
						<ul class="nav navbar-nav">					
							<li><a href="/view/category.php">New books</a></li>
							<li><a href="/view/music.php">Bestsellers</a></li>
							<li><a href="/view/software.php">Used Books</a></li>
						</ul>	
						<!-- <div class="input-group custom-search-form col-md-5 pull-right" style="margin-right:16px;">
							<input type="text" class="form-control">
							<span class="input-group-btn">
								<button class="btn btn-default" type="button">
									<span class="glyphicon glyphicon-search"></span>
								</button>
							</span>
						</div> --><!-- /input-group -->
					</div>

				</nav>
			</div>
		</div>
		</div>
		@yield('content')
		<div class="row footer-container">
			<div class="container">
				<div class="text-center">
				<span class="glyphicon glyphicon-copyright-mark"></span>WPA12, 
				<small>Power By Laravel / Syntara , . etc </small></div>
			</div>
		</div>
		<!-- Script For Tab -->
		<script>
			$('#myTab a').click(function (e) {
				e.preventDefault()
				$(this).tab('show')
			})
		</script>
		
		<!-- Script for Image Lightbox-->
		<script type="text/javascript">
			$(document).ready(function() {
				var $lightbox = $('#lightbox');

				$('[data-target="#lightbox"]').on('click', function(event) {
					var $img = $(this).find('img'), 
					src = $img.attr('src'),
					alt = $img.attr('alt'),
					css = {
						'maxWidth': $(window).width() - 100,
						'maxHeight': $(window).height() - 100
					};

					$lightbox.find('.close').addClass('hidden');
					$lightbox.find('img').attr('src', src);
					$lightbox.find('img').attr('alt', alt);
					$lightbox.find('img').css(css);
				});

				$lightbox.on('shown.bs.modal', function (e) {
					var $img = $lightbox.find('img');

					$lightbox.find('.modal-dialog').css({'width': $img.width()});
					$lightbox.find('.close').removeClass('hidden');
				});
			});
		</script>
	</body>
	</html>