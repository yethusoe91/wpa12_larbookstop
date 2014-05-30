<?php 

class AppHelper{
	public static function Categories_all()
	{
		$categories = Category::lists('name', 'id');
		// foreach ($categories as $category) {
		// 	$loop[]= $category ;
		// }
		return $categories;	
	}

	
}