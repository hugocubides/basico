<?php

class DashboardController extends BaseController {
	
	 /**
     * Displays dashboard
     *
     * @return  Illuminate\Http\Response
     */
    public function showDashboard()
    {
		//App::setLocale("en");
        return View::make('dashboard');
    }

}
