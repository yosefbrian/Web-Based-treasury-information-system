<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Request as reques;
use App\roler;
use App\User;
use App\Profil;

class RoleController extends Controller
{

	public function registeri()
	{
		return view('auth.registeri');	
	}

	public function role()
	{
		return view('auth.role');	
	}
	
	protected function create(Request $request)
    {
    	$sandi = reques::get('password');
		$mantap = new User();
    	$mantap->name = reques::get('name');
    	$mantap->email = reques::get('email');
    	$mantap->password = bcrypt($sandi);
    	$mantap->save();

        return view('auth.role')->with('mantap', $mantap);
    }

    public function assign($id, Request $request)
    {
    	$peran = new roler();
    	$peran->role_id = reques::get('role_id');
    	$peran->user_id = $id;
    	$peran->save();

        $tampan = new Profil();
        $tampan->profil_id = $id;
        $tampan->save();

    	return redirect('/');
    }
}
