<?php 

return array(
	'detail' => array(
		array(
			'title' => 'Home',
			'link' => URL::to('/'),
			'icon' => 'glyphicon-home'
		),
		array(
			'title' => 'Category',
			'link' => URL::to('/'),
			'icon' => 'glyphicon-align-justify'
		),
		array(
			'title' => 'bookname',
			'link' => URL::current(),
			'icon' => 'glyphicon-plus-sign'
		)
	),
);