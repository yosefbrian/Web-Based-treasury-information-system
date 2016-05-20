<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\employees as employees;
use Carbon\Carbon;
use Illuminate\Session;
use Excel;
use App\User;
use App\Profil;
use App\roler;

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

    $results = Excel::load('upload/DataPegawai.xls')->get();

    foreach ($results as $row) {
    
    User::updateOrCreate(
        [ 'email' => $row->Nip
        ],
        [     
        'name' => $row->NmPegawai,
        'password' => bcrypt($row->Nip)
        ]);




    
    // $tampan = new Profil();
    // $tampan->profil_id = User::where('email', $row->Nip)->value('id');
    // $tampan->nama = $row->NmPegawai;
    // $tampan->nip = $row->Nip;
    // // $tampan->jabatan = $row->UraianJabatan;
    // // $tampan->npwp = $row->NPWP;
    // // $tampan->jenis_kelamin = $row->NmJenisKelamin;
    // // $tampan->nm_status_pegawai = $row->NmStatusPegawai;
    // // $tampan->pangkat = $row->UraianPangkat;
    // // $tampan->jenis_jabatan = $row->NmJenisJabatan;
    // // $tampan->unit_organisasi = $row->NmUnitOrganisasi;
    // // $tampan->jabatan_grade = $row->NmJabatanGrade;
    // // $tampan->nama_bank = $row->NmBank;
    // // $tampan->no_rekening = $row->NoRek;
    // // $tampan->nama_rekening = $row->NmRek;
    // $tampan->save();


    // $role = new roler();
    // $role->role_id = 4;
    // $role->user_id = User::where('email', $row->Nip)->value('id');
    // $role->save();


    // $tampan = new Profil();
    // $tampan->profil_id = User::where('email', $row->Nip)->value('id');
    // $tampan->nama = $row->NmPegawai;
    // $tampan->save();


    // employees::updateOrCreate(
    //     [
    //     'Nip' => $row->Nip],
    //     [        
        
    

    //     ]);
    }
}

public function upload(){

            $target_dir = "upload/";
            $target_file = $target_dir . "DataPegawai.xls";
            $uploadOk = 1;
            $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
            // Check if image file is a actual image or fake image
            if(isset($_POST["submit"])) {
                $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);

                    $uploadOk = 1;              
                
            }
            // Check if file already exists
            if (file_exists($target_file)) {
                    
                $uploadOk = 1;
            }
            // Check file size
            // Allow certain file formats
            if($imageFileType != "xls") {
                echo "Sorry, only xls files are allowed.";
                $uploadOk = 0;
            }
            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
                echo "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
            } 
            else {
                    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                    // echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
                  $this->import();
                  \Session::flash('flash_message', 'Data telah berhasil diimport');
                  } 
                    else {
                        echo "Sorry, there was an error uploading your file.";
                    }
                }
        return redirect('/');
}
   

}
