<?php 

class DashboardController extends BaseController{

	public function index()
	{
		$this->layout =  View::make('dashboard.dashboard');

	}

}