<?php

class DashboardController extends BaseController {
	public function getcustomer(){
		$customers = Customer::all();
		$customers = Customer::paginate(5);
		return View::make('dashboard.allcustomer', compact('customers'));
	}
}

