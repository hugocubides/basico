<?php

class DashboardController extends BaseController {
	
	 /**
     * Displays dashboard
     *
     * @return  Illuminate\Http\Response
     */
    public function showDashboard()
    {
        return View::make('dashboard');
    }

}
