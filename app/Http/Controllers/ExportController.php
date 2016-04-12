<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\employees as employees;
use Carbon\Carbon;
use Illuminate\Session;
use Excel;

class ExportController extends Controller
{
    //
public function export(){

set_time_limit ( 300000 ); 

    Excel::create('ListPegawai', function($excel) {

      $excel->sheet('ListPegawai', function($sheet) {
        $users = employees::orderBy('id')->get();
      $sheet->loadView('export', ['users' => $users->toArray()]);
      });
    })->download('xls');
  }



public function import(){


    set_time_limit ( 300000 );

    $results = Excel::load('upload/ListPegawai.xls')->get();

    foreach ($results as $row) {
    
    // $hashed = bcrypt($row->nama);

    employees::updateOrCreate(
        [
        'Nip' => $row->Nip],
        [        
        
        'KdKantor' => $row->KdKantor,
        'NmPegawai' => $row->NmPegawai,
        'UraianJabatan' => $row->UraianJabatan,
        'NPWP' => $row->NPWP,
        'NmJenisKelamin' => $row->NmJenisKelamin,
        'NmStatusPegawai' => $row->NmStatusPegawai,
        'UraianPangkat' => $row->UraianPangkat,
        'NmJenisJabatan' => $row->NmJenisJabatan,
        'NmUnitOrganisasi' => $row->NmUnitOrganisasi,
        'NmJabatanGrade' => $row->NmJabatanGrade,
        'Esl2' => $row->Esl2,
        'Esl3' => $row->Esl3,
        'Esl4' => $row->Esl4,
        'Esl5' => $row->Esl5,
        'NmBank' => $row->NmBank,
        'NoRek' => $row->NoRek,
        'NmRek' => $row->NmRek,

        ]);
    }
}
   

}
