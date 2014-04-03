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

Route::get('/' , 'FrontendController@index');

Route::get('detail/{id}' , 'FrontendController@detail');

// For Register 
Route::get('register', 'UserController@register');

Route::post('register', array(
	'before'	=> 'csrf' ,
	'uses'	=> 'UserController@register'
));

Route::any('login', 'UserController@login');

Route::group(array('before'=>'auth','prefix' => 'admin'),function(){ 
		
	/* Dashboard */
	Route::get('/' , 'DashboardController@getcustomer');

	/* Logout */
	Route::get('logout', function(){
		Auth::logout();
		return Redirect::to('/admin');
	});

	/* Customer */
	Route::get('allcustomer', 'CustomerController@index');

	Route::any('editcustomer/{id}', array('as' => 'customer.edit', 'uses' => 'CustomerController@edit'));

	Route::any('deletecustomer/{id}', array('as' => 'customer.delete', 'uses' => 'CustomerController@delete'));

	Route::get('customer/detail/{id}', array( 'as' => 'customer.detail','uses' => 'CustomerController@detail'));

	/* Book */

	Route::get('allbook', 'BookController@show');

	Route::any('addbook', 'BookController@add');

	Route::any('editbook/{id}', array('as' => 'book.edit', 'uses' => 'BookController@edit'));

	Route::any('uploadimage' , 'ImageController@post_upload');

});

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


