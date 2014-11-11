<?php
class UserController
	extends BaseController {
		public $restful = true;

		public function login() {
			$userData = array (
				'email' => Input::get('email'),
				'password' => Input::get('password')
				);

			if (Auth::check()) {
				return Redirect::to(user/profile);
			}

			if (Auth::attempt($userData)) {
				$user = User::find(Auth::user()->id);

				if ($user->active=='0') {
					Auth::logout();
					Session::flush();

					return Redirect::to('user/login');
				}

				Session::put('current_user', Input::get('email'));
				Session::put('user_id', $user->id);
				$user->save();
			} else {
				return Redirect::to('user/login');
			}

		}	//end function login


}	//end class UserController
?>