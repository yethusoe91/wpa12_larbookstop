<?php 

Route::get('/advauth', function(){
	return View::make('test');
});


Route::get('/advcontrol', 'HelloController@show');

Route::get('/getconfig', function(){

	$email = Config::get('advauth::Authconfig.email');
	echo $email;
});

 ?>