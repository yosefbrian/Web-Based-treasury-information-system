<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AdminController extends Controller
{
    public function admin(){

    	return view('admin.admin');
    }

     public function editprofil(){

    	return view('admin.editprofil');
    }


}
