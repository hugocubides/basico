<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProfileRequest;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Profile as Profile;
use App\User as User;
use Auth;

class ProfileController extends Controller
{
    
    /**
     * Crea una nueva instancia del controlador
     */
    public function __construct()
	{
		// Unicamente permite el acceso a usuarios registrados
        $this->middleware('auth');
	}
    
    /**
	 * Muestra al usuario su perfil.
	 *
	 * @return Response
	 */
	public function index()
	{
        $profile = Auth::user()->profile;        
        
        return view('user.profile', compact('profile'));
	}

	/**
	 * Guarda los datos del formulario en la tabla user_profile y users.
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
        
        $user = User::find($id);
        $user->name = $request->name;
        $user->save();
        
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
