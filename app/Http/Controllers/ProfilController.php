<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Auth;

use App\Profil;

class ProfilController extends Controller
{
	
	 public function getData()
    {

    	$user = Auth::user()->id;
          $profil = Profil::where('id', $user)->orderBy('created_at','desc')->paginate(5);
        
        return view('admin.profile')->with('profil', $profil);
    }

	

}
