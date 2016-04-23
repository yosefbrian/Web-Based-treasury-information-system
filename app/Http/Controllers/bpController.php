<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\spdcenter;

class bpController extends Controller
{
    
	public function getData()
    {

          $spd = spdcenter::paginate(10);
        
       	  return view('bp.bp')->with('spd', $spd);
    }




}
