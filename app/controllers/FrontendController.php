<?php 
class FrontendController extends BaseController{

	public function index(){

		// $languages= Config::get('languages');
		$books = Book::orderBy('id', 'DESC')->get();
		$this->layout  = View::make('frontend.home' , compact('books','languages'));
	}
	
	public function detail($id){

		// Get Product by id
		$book = Book::find($id);

		// Get Category id from current book
		$category_id = $book->category_id;

		// Get Category name
		$category_name = Category::find($category_id);

		// Get related book by category_id and take 4 books
		$related_products = Category::find($category_id)->books->take(5);

		// return $related_products and $book to "app/views/frontend/detail.php"
		$this->layout  = View::make('frontend.detail', compact('related_products','book','category_name'));

		$this->layout->title = $book->bookname;

	}

	public function category($id)
	{
		// List Books By Category
		$books = Category::find($id)->books;		

		// Call Category by id to get Category Name 
		$category = Category::find($id);
		
		$this->layout  =  View::make('frontend.category', compact('books', 'category','books_count'));

		// Return Category title
		$this->layout->title = $category->name;
	}

	public function ChaLang()
	{	
		// to get parameter
		$para = Request::segment(2);

		// create Session by name "Locale"
		Session::put('locale', $para);

		return Redirect::back(); 
		
	}

}