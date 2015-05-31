<?php namespace App\Services;

use App\User;
use Validator;
use Illuminate\Contracts\Auth\Registrar as RegistrarContract;

class Registrar implements RegistrarContract {

	/**
	 * Get a validator for an incoming registration request.
	 *
	 * @param  array  $data
	 * @return \Illuminate\Contracts\Validation\Validator
	 */
	public function validator(array $data)
	{
		return Validator::make($data, [
			'first_name' => 'required|min:3|max:50',
            'last_name' => 'required|min:3|max:50',
			'email' => 'required|email|max:255|unique:users',
			'password' => 'required|confirmed|min:6',
		]);
	}

	/**
	 * Create a new user instance after a valid registration.
	 *
	 * @param  array  $data
	 * @return User
	 */
	public function create(array $data)
	{
        
        $result = User::create([
			'email' => $data['email'],
			'password' => bcrypt($data['password']),
		]);
        
        $this->add_profile($result, $data);
        
        return $result;
	}
    
    /**
     * Crea el perfil para el usuario que se acaba de registrar
     * @param object $user
     * @param array $data
     */
    private function add_profile( $user, $data )
    {
        $profile = new \App\Profile;
        
        $profile->first_name = $data['first_name'];
        $profile->last_name = $data['last_name'];
        $profile->display_name = $data['first_name'] .' '.$data['last_name'];
        $profile->user_id = $user->id;
        $profile->save();
    }

}
