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
    
	 /**
     * Update the user's profile
     *
     * @return  Illuminate\Http\Response
     */
    public function editProfile($username)
    {
		if ($username == Auth::user()->username) {
			$profile = Profile::where('user_id', '=', Auth::user()->id)->get();
			return View::make('users.profile_edit')->with('profile', $profile);
		}else{
			return View::make('404');
		}			

    }
    
    /**
     * Update the user's profile
     *
     * @return  Illuminate\Http\Response
     */
    public function updateProfile($username)
    {	
		$profile = Profile::find(Input::get('_id'));
		
		$profile->first_name = Input::get('first_name');
		$profile->last_name = Input::get('last_name');
		$profile->display_name = Input::get('display_name');
		$profile->birthday = Input::get('birthday');
		$profile->bio = Input::get('bio');
		$profile->profession = Input::get('profession');
		$profile->organization = Input::get('organization');
		$profile->address = Input::get('address');
		$profile->city = Input::get('city');
		$profile->country = Input::get('country');
		$profile->phone = Input::get('phone');
		$profile->mobile = Input::get('mobile');
		$profile->website = Input::get('website');
		$profile->save();
		
        return Redirect::to($username);

    }
}
