<?php

class ProfileController extends BaseController {
	
	 /**
     * Displays the user's profile
     *
     * @return  Illuminate\Http\Response
     */
    public function showProfile($username)
    {
		if ($username == Auth::user()->username) {
			$profile = Profile::where('user_id', '=', Auth::user()->id)->get();
			return View::make('users.profile')->with('profile', $profile);
		}else{
			return View::make('404');
		}			

    }
}
