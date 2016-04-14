<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Profil;

use App\Http\Requests;

class SPDController extends Controller
{
    public function getData()
    {

    	// $user = Auth::user()->id;

          $profil = Profil::paginate(10);
        
        return view('spd.spd')->with('profil', $profil);
    }


    public function edit($id) {
        $profil = Profil::findOrFail($id);
        return view('spd.spdcenter',  compact('profil'));
    }


}
