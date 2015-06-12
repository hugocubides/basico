<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;

class PagesController extends Controller
{
    
    /**
     * Muestra la vista de bienvenida al usuario
     * @return View
     */
    public function index()
	{
        if (Auth::check()) {
            return redirect('/dashboard');
        }
        
		return view('welcome');
	}
}
