<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;


use App\slider;

class SliderController extends Controller
{


public function stor(Request $request){


// $fileyeah = $request->get('fileToUpload');

$fileyeah = basename($_FILES["fileToUpload"]["name"]);



         $uploadOk = 1;

    $target_dir = "upload/slider/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
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
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    }
    else {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            // echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
          // $this->import();
          // \Session::flash('flash_message', 'Data telah berhasil diimport');
          }
            else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
     
}



     	$yeah = new slider();
		$yeah->judul = $request->get('caption');
		$yeah->filename = basename($_FILES["fileToUpload"]["name"]);
		$yeah->save();
		// \Session::flash('flash_message_tambahpemberitahuan','');

    return Redirect('/');
    }



}
