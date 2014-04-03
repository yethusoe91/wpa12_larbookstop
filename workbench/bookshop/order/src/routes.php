<?php 

Route::get('/bookshop' , function(){
	return "BookShop !!!!";
});

Route::get('/bookshopcontrol', 'TestController@test');

 ?>