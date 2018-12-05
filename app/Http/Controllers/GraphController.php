<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use Carbon\Carbon;

class GraphController extends Controller
{

	public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function weekly(){
     
    	return view('frontEnd.pages.weekly');
    }

    public function monthly(){
    	return view('frontEnd.pages.monthly');
    }

    public function yearly(){
    	return view('frontEnd.pages.yearly');
    }
}
