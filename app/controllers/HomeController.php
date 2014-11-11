<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function show_login()
	{
		return View::make('user/login');
	}

	public function show_sign_up()
	{
		return View::make('sign_up');
	}

	public function show_sign_up_action()
	{
		return View::make('sign_up_action');
	}

	public function show_user_profile()
	{
		return View::make('user/profile');
	}	

	public function show_land_usage_clearance_action()
	{
		return View::make('land_usage_clearance_action');
	}

	public function show_building_permit_action()
	{
		return View::make('building_permit_action');
	}


}
