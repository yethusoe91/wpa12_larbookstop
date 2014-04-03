<?php

class BookController extends BaseController {

	// Show All Book
	public function show()
	{
		$books = Book::all();
		$books = Book::paginate(5);
		return View::make('dashboard.booklist', compact('books'));
	}

	// Add Book
	public function add()
	{
		if(Request::server('REQUEST_METHOD') == 'POST') {		

			// Rule For Add Book
			$rules = array(
				'bookname'	=> 'required|unique:books,bookname|min:3',
				'description'	=> 'required',
				'author'		=> 'required',
				'publisher'	=> 'required',
				'price'		=> 'required',
				'file'		=> 'required'
				);

			// Take All Data Except _Taken from form 
			$bookdata = Input::all(); 

			// Validate $userdata and $rule
			$validation = Validator::make($bookdata, $rules);

			if($validation->fails()) {
				return Redirect::back()
				->withErrors($validation)
				->withInput($bookdata);
			}else {

				$file = Input::file('file');
				$destinationPath = 'uploads/books';
				
				// Get uploaded file name

				$filename = $file->getClientOriginalName();

				$upload = Input::file('file')->move($destinationPath, $filename);
				
				$book = New Book;
				$book->bookname = Input::get('bookname');
				$book->description = Input::get('description');
				$book->author = Input::get('author');
				$book->image= $filename ;
				$book->price= Input::get('price');
				$book->publisher = Input::get('publisher');
				$success = $book->save();

				if($success){
					return Redirect::to('admin/allbook')
					->with('message' , 'successfully Add New Book!');
				}

			}

		}

		return View::make('dashboard.addbook');
	}	

	// Edit Book
	public function edit($id)
	{
		$books = Book::find($id);

		if(Request::server('REQUEST_METHOD') == 'POST') {		
			// Rule For Edit Book
			$rules = array(
				'bookname'	=> 'required',
				'description'	=> 'required',
				'author'	=> 'required',
				'price'		=> 'required',
				'publisher'	=> 'required',
				);
			// Take All Data Except _Taken from form 
			$bookdata = Input::all(); 

			// Validate $userdata and $rule
			$validation = Validator::make($bookdata, $rules);

			if($validation->fails()) {
				return Redirect::back()
				->withErrors($validation)
				->withInput($bookdata);
			}else {

				$books->bookname = Input::get('bookname');
				$books->description = Input::get('description');
				$books->author = Input::get('author');
				$books->price = Input::get('price');
				$books->publisher = Input::get('publisher');
				$success = $books->save();

				if($success){
					return Redirect::to('admin/allbook')
					->with('message' , 'successfully Add New Book!');
				}
			}
		}
		return View::make('dashboard.editbook')->with('books', $books);
	}	

};