<?php

class ProfileController extends BaseController {
	
	 /**
     * Displays the user's profile
     *
     * @return  Illuminate\Http\Response
     */
    public function showProfile($username)
    {
		// Evalua que el segmento si corresponda al usuario
		if ($username == Auth::user()->username) {
			$profile = Profile::where('user_id', '=', Auth::user()->id)->get();
			return View::make('users.profile')->with('profile', $profile);
		}else{
			// Si no muestra error 404
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
		// Evalua que el segmento si corresponda al usuario
		if ($username == Auth::user()->username) {
			$profile = Profile::where('user_id', '=', Auth::user()->id)->get();
			return View::make('users.profile_edit')->with('profile', $profile);
		}else{
			// Si no muestra error 404
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
		// Obtener todos los datos de la petición
		$data = Input::all();
		
		// Validación personalizada
		Validator::extend('nombres', function($campo, $value, $params)
		{
			// Valida que el valor para un nombre de persona, ciudad, cosa, etc,
			// sea caracter, incluya espacios, tildes en las vocales y no incluya numeros
			// o caracteres especiales como @, +, etc
			return preg_match("/^[A-z][a-zA-Z\'\.\ \á\é\í\ó\ú]+$/", $value);
		});
		
		// Crea la matriz de mensajes personalizados
		$mensajes = array(
			'nombres' => 'El campo no admiten numeros o caracteres especiales'
		);
		
		// Crear el conjunto de validaciones.
		$reglas = array(
			'first_name' => 'nombres | min:3 | required',
			'last_name' => 'nombres | min:3 | required',
			'display_name' => 'nombres | min:3 | required',
			'birthday' => 'date | date_format:Y-m-d',
			'bio' => 'regex:/^[A-Za-z0-9\-! ,\'\"\/@\.:\(\)]+$/ | max:160',
			'profession' => 'nombres',
			'organization' => 'nombres',
			'address' => 'regex:/^[A-Za-z0-9\W]+$/',
			'city' => 'nombres',
			'country' => 'nombres',
			'phone' => 'numeric | min:7',
			'mobile' => 'numeric',
			'website' => 'url'
		);
		
		
		// Crear instancia del validador.
		$validador = Validator::make($data, $reglas, $mensajes);
		
		if ($validador->fails()) {
			return Redirect::to('/'.$username.'/edit')->withErrors($validador)->withInput();
		}
		
		// Busca los datos del perfil usuario por su id
		$profile = Profile::find(Input::get('_id'));
		
		// Asigna los valores y los guarda
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
