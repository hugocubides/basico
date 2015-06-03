<?php namespace App\Http\Controllers;

use App\Http\Requests\StoreProfileRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Profile as Profile;
use Auth;


class ProfileController extends Controller {
    
    /**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}


	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $profile = Auth::user()->profile;        
        return view('user.profile', compact('profile'));
	}

	/**
	 * Store a user profile in storage.
	 *
	 * @return Response
	 */
	public function store(StoreProfileRequest $request)
	{
        $id = Auth::user()->id;
        $profile = Profile::find($id);
        $input = $request->all();
        $profile->update($input );
        $profile->save();
		return redirect('user/profile');
	}

	/**
	 * Show the form for editing the specified resource.
	 * 
	 * @return Response
	 */
	public function edit()
	{
		$profile = Auth::user()->profile;        
        return view('user.profile_edit', compact('profile'));
	}

}
