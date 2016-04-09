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

public function uploadSPD(){

            $uploadOk = 1;

            $target_dir = "upload/peraturan/";
            $target_file = $target_dir . "SPD.zip";
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
            if($imageFileType != "zip") {
                echo "Sorry, only zip files are allowed.";
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
                  // $this->import();
                  \Session::flash('flash_message', 'Data telah berhasil diimport');
                  } 
                    else {
                        echo "Sorry, there was an error uploading your file.";
                    }
                }
        return redirect('/peraturan');
}

public function uploadBP(){

            $uploadOk = 1;

            $target_dir = "upload/peraturan/";
            $target_file = $target_dir . "BP.zip";
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
            if($imageFileType != "zip") {
                echo "Sorry, only zip files are allowed.";
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
                  // $this->import();
                  \Session::flash('flash_message', 'Data telah berhasil diimport');
                  } 
                    else {
                        echo "Sorry, there was an error uploading your file.";
                    }
                }
        return redirect('/peraturan');
}

public function uploadTUKIN(){

            $uploadOk = 1;

            $target_dir = "upload/peraturan/";
            $target_file = $target_dir . "TUKIN.zip";
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
            if($imageFileType != "zip") {
                echo "Sorry, only zip files are allowed.";
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
                  // $this->import();
                  \Session::flash('flash_message', 'Data telah berhasil diimport');
                  } 
                    else {
                        echo "Sorry, there was an error uploading your file.";
                    }
                }
        return redirect('/peraturan');
}

public function uploadPBJ(){

            $uploadOk = 1;

            $target_dir = "upload/peraturan/";
            $target_file = $target_dir . "PBJ.zip";
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
            if($imageFileType != "zip") {
                echo "Sorry, only zip files are allowed.";
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
                  // $this->import();
                  \Session::flash('flash_message', 'Data telah berhasil diimport');
                  } 
                    else {
                        echo "Sorry, there was an error uploading your file.";
                    }
                }
        return redirect('/peraturan');
}
   

}
