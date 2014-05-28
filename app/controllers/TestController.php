<?php 

Class TestController extends BaseController{
	public function test()
	{
		
		// $books = Book::where('category_id', '=', $id)->get();
		
		// foreach ($books as $book) {
		// 	var_dump($book->bookname);
		// }

		// $books = Category::find(2)->books;

		// foreach ($books as $book) {
		// 	var_dump($book->bookname);
		// }


		Cart::add('192ao12', 'Product 1', 1, 9.99);
		
		Cart::add('1239ad0', 'Product 2', 2, 5.95, array('size' => 'large'));

		$cart = Cart::content();

		$this->layout =  View::make('cart', compact('cart'));
		
	}

}
