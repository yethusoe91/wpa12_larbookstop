<?php 
class FrontendController extends BaseController{
	public function index(){
		$books = Book::all();
		return View::make('frontend.home' , compact('books'));
	}
	public function detail($id){
		$book = Book::find($id);
		return View::make('frontend.detail')->with('book', $book);
	}

	
}