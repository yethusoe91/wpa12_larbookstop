<?php

class CategoryController extends BaseController {

	public function show(){
		if(Request::isMethod('post')){
			// Rule For Add Book
			$rules = array(
				'category-name'	=> 'required',
				);	
			
			$category_data = Input::all();
			
			$validation = Validator::make($category_data, $rules);

			if($validation->fails()) {
				return Redirect::back()
				->withErrors($validation)
				->withInput($category_data);
			}else {
				
				$category = New Category;
				$category->name = Input::get('category-name');
				$success = $category->save();

				if($success){
					return Redirect::route('category.show')
					->with('message' , 'successfully Add New Book!');
				}

			}
		}

		$this->layout =  View::make('dashboard.category');
		$this->layout->breadcrumb = Config::get('syntara::breadcrumbs.add_category');
	}

	
}