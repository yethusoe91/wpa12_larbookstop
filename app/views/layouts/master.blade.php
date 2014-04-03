<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>
		LarBookShop
	</title>
	{{ HTML::style('css/bootstrap.css') }}
	{{ HTML::style('css/contents.css')}}
	{{ HTML::style('css/style.css')}}

	<script src="http://localhost/advanceclass/larbookshop/public/js/jquery.js"></script>
	<script src="http://localhost/advanceclass/larbookshop/public/js/bootstrap.js"></script>

</head>
<body>	
	@if(Session::has('message'))
	<div class="alert alert-danger">
		{{ Session::get('message')}}
	</div>
	@endif
	<div class="row">
		<div class="col-md-12 ">
			<nav class=" navbar-default navbar-xs" role="navigation">
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
							<li><a href="/layout/login.php"><i class="glyphicon glyphicon-log-in"></i></a></li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-5">
				<h1 class="text-danger logo"><a class="text-success" href="{{ URL::to('/')}}">WPA 12 BookShop</a></h1>
			</div>
			<div class="col-md-6">
				
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12 ">
			<nav class="navbar " role="navigation">
				<div class="container">
					<ul class="nav navbar-nav">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Books By Category <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="/view/software.php">Software</a></li>
								<li><a href="/view/cook.php">Cook</a></li>
								<li><a href="/view/horror.php">Horror</a></li>
								<li><a href="/view/humor.php">Humor</a></li>
								<li><a href="/view/music.php">Musics</a></li>
							</ul>
						</li>
					</ul>
					<ul class="nav navbar-nav">					
						<li><a href="/view/category.php">New books</a></li>
						<li><a href="/view/music.php">Bestsellers</a></li>
						<li><a href="/view/software.php">Used Books</a></li>
					</ul>	
					<div class="input-group custom-search-form col-md-5 pull-right" style="margin-right:16px;">
						<input type="text" class="form-control">
						<span class="input-group-btn">
							<button class="btn btn-default" type="button">
								<span class="glyphicon glyphicon-search"></span>
							</button>
						</span>
					</div><!-- /input-group -->
				</div>

			</nav>
		</div>
	</div>
	@yield('content')
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