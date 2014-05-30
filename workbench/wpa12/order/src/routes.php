<?php 

Route::get('/order' , function(){ return "ORder"; } );

Route::get('/config' , function(){
	return Config::get('order::order.order');
});

Route::get('/facade', function(){
	echo Order::greeting();
});

 ?>