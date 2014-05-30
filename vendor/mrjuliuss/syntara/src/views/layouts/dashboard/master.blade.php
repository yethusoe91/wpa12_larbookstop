<html>
	<head>
		<link rel="stylesheet" href="{{ asset('packages/mrjuliuss/syntara/assets/css/bootstrap.min.css') }}" />    
		<link rel="stylesheet" href="{{ asset('css/toggle-switch.css') }}" />    
		 @if(Config::get('syntara::config.direction') === 'rtl')
			<link rel="stylesheet" href="{{ asset('packages/mrjuliuss/syntara/assets/css/bootstrap-rtl.min.css') }}" media="all">
			<link rel="stylesheet" href="{{ asset('packages/mrjuliuss/syntara/assets/css/base-rtl.css') }}" media="all">
		@endif
		<link rel="stylesheet" href="{{ asset('packages/mrjuliuss/syntara/assets/css/toggle-switch.css') }}" />

		<link rel="stylesheet" href="{{ asset('packages/mrjuliuss/syntara/assets/css/base.css') }}" media="all">
		 @if(Config::get('syntara::config.direction') === 'rtl')
			<link rel="stylesheet" href="{{ asset('packages/mrjuliuss/syntara/assets/css/base-rtl.css') }}" media="all">
		@endif

		@if (!empty($favicon))
		<link rel="icon" {{ !empty($faviconType) ? 'type="$faviconType"' : '' }} href="{{ $favicon }}" />
		@endif

		<script src="{{ asset('packages/mrjuliuss/syntara/assets/js/dashboard/jquery.min.js') }}"></script>
		<script src="{{ asset('packages/mrjuliuss/syntara/assets/js/dashboard/bootstrap.min.js') }}"></script>
		<script src="{{ asset('packages/mrjuliuss/syntara/assets/js/dashboard/base.js') }}"></script>

		<title>{{ (!empty($siteName)) ? $siteName : "LarBookShop"}} - {{isset($title) ? $title : '' }}</title>
	</head>
	<body>
		@include(Config::get('syntara::views.header'))
				{{ isset($breadcrumb) ? Breadcrumbs::create($breadcrumb) : ''; }}
		<div id="content">
			@yield('content')
		</div>
	</body>
</html>