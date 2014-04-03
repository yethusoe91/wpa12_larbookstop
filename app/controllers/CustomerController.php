<?php 
class CustomerController extends BaseController{
	
	public function index()
	{
		$customers = Customer::all();
		$customers = Customer::paginate(5);
		return View::make('dashboard.allcustomer', compact('customers'));
	}

	public function edit($id)
	{
		$customer = Customer::find($id);
		if(Request::server('REQUEST_METHOD') == 'POST') {						
			// Rule For Register
			$rules = array(
				'username'	=> 'required',
				'email'		=> 'required'
			);

			// Take All Data Except _Taken from form 
			$userdata = Input::all(); 

			// Validate $userdata and $rule
			$validation = Validator::make($userdata, $rules);

			if($validation->fails()) {
				return Redirect::back()
					->withErrors($validation)
					->withInput($userdata);
			}else {

				$customer->username = Input::get('username');
				$customer->email = Input::get('email');
				$success = $customer->save();

					if($success){
					return Redirect::to('admin/allcustomer')
					->with('message' , 'successfully Edit Customer!');
				}
			}
		}
		
		return View::make('dashboard.editcustomer')
		->with('customer', $customer);
	}
	
	public function detail($id){
		$customer = Customer::find($id);
		return View::make('dashboard.detail')->with('customer', $customer);
	}

	public function delete($id)
	{
		$customer = Customer::find($id);
		$customer->delete();
		return Redirect::to('admin/allcustomer')->with('message',' Successfully Deleted!!');
	}
}