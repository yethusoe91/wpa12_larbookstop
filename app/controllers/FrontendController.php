<?php 
class FrontendController extends BaseController{
	public function index(){

		// $languages= Config::get('languages');
		$books = Book::orderBy('id', 'DESC')->get();
		$this->layout  = View::make('frontend.home' , compact('books','languages'));
	}
	
	public function detail($id){

		$categories = Category::orderBy('id', 'ASC')->paginate(10);

		$book = Book::find($id);
		$this->layout  = View::make('frontend.detail', compact('categories','book'));
	}

	public function category($id)
	{
		// $test = Category::with('id', 'id.books');

		// dd($test);

		// List Books By Category
		$books = Category::find($id)->books;
		
		// Call Category by id to get Category Name 
		$category = Category::find($id);
		
		$this->layout  =  View::make('frontend.category', compact('books', 'category'));
		$this->layout->title = $category->name;
	}

	public function ChaLang()
	{	
		// to get parameter
		$para = Request::segment(2);
		Session::put('locale', $para);
		return Redirect::back(); 
	}

}