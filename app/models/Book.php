<?php 
class Book extends Eloquent{

	protected $table = 'books';
	
	public function category()
	{
		return $this->belongsTo('Category');
	}
}
