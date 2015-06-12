<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    
    /**
     * Crea una nueva instancia del controlador
     */
    public function __construct()
	{
		//$this->middleware('guest');
	}
    
    /**
     * Muestra al usuario el dashboard
     * @return View
     */
    public function index()
	{
		return view('dashboard');
	}
}
