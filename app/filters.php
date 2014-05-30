<?php

/*
|--------------------------------------------------------------------------
| Application & Route Filters
|--------------------------------------------------------------------------
|
| Below you will find the "before" and "after" events for the application
| which may be used to do any work before or after a request into your
| application. Here you may also register your custom route filters.
|
*/

App::before(function($request)
{
	// change language
	if (Session::has('locale'))
	{
	           $language= Session::get('locale', 'en');        
		App::setLocale($language);	
	}
	
	// Override Admin Layouts
	Config::set('syntara::views.dashboard-index', 'layouts.admin_master');

});


App::after(function($request, $response)
{
	//
});

/*
|--------------------------------------------------------------------------
| Authentication Filters
|--------------------------------------------------------------------------
|
| The following filters are used to verify that the user of the current
| session is logged into this application. The "basic" filter easily
| integrates HTTP Basic authentication for quick, simple checking.
|
*/

Route::filter('auth', function()
{
	if (Auth::guest()) return Redirect::guest('login-user');
});


Route::filter('auth.basic', function()
{
	return Auth::basic();
});

/*
|--------------------------------------------------------------------------
| Guest Filter
|--------------------------------------------------------------------------
|
| The "guest" filter is the counterpart of the authentication filters as
| it simply checks that the current user is not logged in. A redirect
| response will be issued if they are, which you may freely change.
|
*/

Route::filter('guest', function()
{
	if (Auth::check()) return Redirect::to('/');
});

/*
|--------------------------------------------------------------------------
| CSRF Protection Filter
|--------------------------------------------------------------------------
|
| The CSRF filter is responsible for protecting your application against
| cross-site request forgery attacks. If this special token in a user
| session does not match the one given in this request, we'll bail.
|
*/

Route::filter('csrf', function()
{
	if (Session::token() != Input::get('_token'))
	{
		throw new Illuminate\Session\TokenMismatchException;
	}
});


Route::filter('basicAuth', function()
{
	if(!Sentry::check())
	{
		// save the attempted url
		Session::put('attemptedUrl', URL::current());

		return Redirect::route('getLogin');
	}

	View::share('currentUser', Sentry::getUser());
});

// Add Category for man navigation
$categories = Category::orderBy('id', 'ASC')->paginate(10);

View::share('categories', $categories);

View::share('languages', Config::get('languages'));

/* It is working, but got new solution by assing to AppBefore*/
// Route::filter('language', function(){
           
// 	if (Session::has('locale'))
// 	{
// 	           $language= Session::get('locale' , 'en');        
// 		App::setLocale($language);	
// 	}
// });

// Route::filter('test_filter', function($route) {
//     $param = $route->getParameter('hi'); // use the key you defined
//     return "The value is $param";
// });
