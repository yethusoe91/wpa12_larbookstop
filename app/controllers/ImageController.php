<?php

class ImageController extends BaseController {
	
	public function post_upload(){

		$input = Input::all();
		
		$rules = array(
			'file' => 'image|max:3000',
			);

		$validation = Validator::make($input, $rules);

		if ($validation->fails())
		{
			return Response::make($validation->errors->first(), 400);
		}else{
			// Get file from FrontEnd Input 
			$file = Input::file('file');
			
			// make destinationPath for uploaded file
			$destinationPath = 'uploads';

			// Get uploaded file name
			$filename = $file->getClientOriginalName();	

			$upload_success = Input::file('file')->move($destinationPath, $filename);

			if( $upload_success ) {
				return Response::json('success', 200);
			} else {
				return Response::json('error', 400);
			}
		}
	}
}