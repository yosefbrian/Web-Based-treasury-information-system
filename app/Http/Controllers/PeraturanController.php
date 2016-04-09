<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Session;
use App\lpj as lpj;

class PeraturanController extends Controller
{
     public function getData()
    {
          $lpj_list = lpj::paginate(5);
        
        return view('peraturan.peraturan')->with('lpj_list', $lpj_list);
    }


    public function store(Request $request) {
        // validation rules
     $lpjlist = new lpj();
		$lpjlist->judul = $request->get('judul');
		$lpjlist->deskripsi = $request->get('deskripsi');
		$lpjlist->save();
         
    
        return redirect('/peraturan');
    }
}
