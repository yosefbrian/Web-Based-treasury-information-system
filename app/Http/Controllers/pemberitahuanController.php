<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\pemberitahuan as tahu;

class pemberitahuanController extends Controller
{

	public function create()
    {
        return view('BikinPemberitahuan');
    }

    public function store(Request $request){

         $uploadOk = 1;

    $target_dir = "upload/pemberitahuan/";
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
     $yeah = new tahu();
		$yeah->judul = $request->get('judul1');
		$yeah->deskripsi = $request->get('deskripsi1');
    $yeah->filename = basename($_FILES["fileToUpload"]["name"]);
		$yeah->save();
		\Session::flash('flash_message_tambahpemberitahuan','');
    return Redirect('/');
    }

public function delete($id) {
        tahu::find($id)->delete();
        // \Session::flash('flash_message', 'Data pegawai telah dihapus');
				\Session::flash('flash_message_hapuspemberitahuan','');
        return Redirect('/');
    }


}
