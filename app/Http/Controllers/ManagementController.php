<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use Carbon\Carbon;

class ManagementController extends Controller
{

	public function __construct()
    {
        $this->middleware('auth:management');
    }
    
    public function mweekly(){
     
    	return view('frontEnd.management.mweekly');
    }

    public function mmonthly(){
    	return view('frontEnd.management.mmonthly');
    }

    public function myearly(){
    	return view('frontEnd.management.myearly');
    }
}
