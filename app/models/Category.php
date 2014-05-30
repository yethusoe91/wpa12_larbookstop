<?php 
class Category extends Eloquent{

	protected $table = 'categories';
	
	public function books()
	{
		return $this->hasMany('Book');
	}

}
