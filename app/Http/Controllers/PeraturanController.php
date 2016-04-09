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
        
        return view('books.index')->with('lpj_list', $lpj_list);
    }


    public function store(Request $request) {
        // validation rules
      $this->validate($request,
                [
                'nip' => 'required', 
                'nama' => 'required|min:4', 
                'jenis_kelamin' => 'required|min:4',
                ]); 
        

        lpj::create(
             
            $request->all()
            );
         
    
        return redirect('/getData');
    }
}
