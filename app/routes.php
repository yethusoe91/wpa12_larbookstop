<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


/* Frontend*/
Route::get('/' , array('before' => 'language' , 'uses' => 'FrontendController@index'));

Route::get('detail/{id}' , array('before' => 'language', 'uses' => 'FrontendController@detail'));

Route::get('category/{id}' , array('as' => 'cagetory.single' , 'uses' => 'FrontendController@category'));

// For Customer Login 
Route::get('register', 'UserController@register');

Route::post('register', array(
	'before'	=> 'csrf' ,
	'uses'	=> 'UserController@register'
	));

Route::group(array('before' => 'basicAuth|test' ,'prefix' => Config::get('syntara::config.uri')),function(){ 

	Route::get('/', array(
		'as'	=> 'dashboard',
		'uses' => 'DashboardController@index')
	);

	/* Book */
	Route::get('allbook', array(
		'as'	=> 'book.all',
		'uses' => 'BookController@show')
	);

	Route::any('addbook', array( 
		'as' =>  'book.add',
		'uses' =>  'BookController@add')
	);

	Route::any('editbook/{id}', array('as' => 'book.edit', 'uses' => 'BookController@edit'));

	Route::any('deletebook/{id}', array('as' => 'book.delete', 'uses' => 'BookController@delete'));

	Route::any('uploadimage' , 'ImageController@post_upload');

	Route::any('add-category' , array('as' => 'category.show' , 'uses' => 'CategoryController@show'));

});

// Change Lang
Route::get('/change-lang/{lang}', array('as' => 'change-lang', 'uses' => 'FrontendController@ChaLang'));

//Just for testing
Route::get('test/', 'TestController@test');

// Add New Navs , extends Syntara
View::composer('syntara::layouts.dashboard.master', function($view)
{
	$view->nest('navPages', 'left-nav');
});


// Override View
// Config::set('syntara.views.dashboard.admin', 'dashboard.master');

// Route::any('upload', function(){
// 	if(Request::server('REQUEST_METHOD') == 'POST'){

// 		// Get file from FrontEnd Input 
// 		$file = Input::file('file');

// 		// make destinationPath for uploaded file
// 		$destinationPath = 'uploads/books';

// 		// Get uploaded file name
// 		$filename = $file->getClientOriginalName();

// 		//$extension =$file->getClientOriginalExtension(); //if you need extension of the file

// 		$mime = Input::file('file')->getMimeType();

// 		$path = Input::file('file')->getSize();

// 		dd($path);

// 		// dd($mine);

// 		if($mime == 'image/png'){


// 			// Copy File To destinationPath
// 			$upload_success = Input::file('file')->move($destinationPath, $filename);


// 			if('upload_success'){
// 			return "Upload Ok!";
// 			}else{
// 				return "Error!";
// 			}

// 		}else{
// 			return "Your file type is wrong!!";
// 		}	
// 	}
// 	return View::make('dashboard.upload');
// } );

// Route::any('dashboard', array('before' => 'auth', function()
// {
// 	return "Hello";
// }));

// Route::get('logout', function(){
// 	Auth::logout();
// 	return Redirect::to('dashboard');
// });


// Route::get('addbook', function(){
// 	$userdata = array(
// 		'bookname' => 'matinshwe2',
// 		'description' => 'matinshwe3@gmail.com',
// 		'author'	    => 'matinshwe4',
// 		'publisher' => 'InnWa Bookshospdsf'
// 		);
// 	DB::table('books')->insert($userdata);
// 	return "Succefully Create Book";
// });


