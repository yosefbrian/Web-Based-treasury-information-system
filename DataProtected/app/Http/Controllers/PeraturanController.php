<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Session;
use App\lpj as lpj;
use App\peraturan_pd as pd;
use App\peraturan_bp as bp;
use App\peraturan_tukin as tukin;
use App\peraturan_pbj as pbj;


class PeraturanController extends Controller
{
    public function getDatapd()
    {
        $pd_list = pd::orderBy('created_at','desc')->paginate(5);

        return view('peraturan.peraturanpd')->with('pd_list', $pd_list);
    }


    public function storepd(Request $request) {
        // validation rules
    $uploadOk = 1;

    $target_dir = "upload/peraturan/pd/";
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
      // \Session::flash('flash_message_gagalupload','');
        // echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    }
    else {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            // echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
          // $this->import();
          // \Session::flash('flash_message_', 'Data telah berhasil diimport');
          }
            else {
              \Session::flash('flash_message_berhasilupload','');
                // echo "Sorry, there was an error uploading your file.";
            }
        }
     $pdlist = new pd();
        $pdlist->judul = $request->get('judul');
        $pdlist->deskripsi = $request->get('deskripsi');
    $pdlist->filename = basename($_FILES["fileToUpload"]["name"]);
        $pdlist->save();

    \Session::flash('flash_message_tambah','');
        return redirect('/peraturanpd');
    }


    public function deletepd($id) {
        pd::find($id)->delete();
        // \Session::flash('flash_message', 'Data pegawai telah dihapus');
            \Session::flash('flash_message_hapus','');
        return Redirect('/peraturanpd');
    }




    public function getDatabp()
    {
        $bp_list = bp::orderBy('created_at','desc')->paginate(5);

        return view('peraturan.peraturanbp')->with('bp_list', $bp_list);
    }


    public function storebp(Request $request) {
        // validation rules
    $uploadOk = 1;

    $target_dir = "upload/peraturan/bp/";
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
                // echo "Sorry, there was an error uploading your file.";
            }
        }
     $bplist = new bp();
        $bplist->judul = $request->get('judul');
        $bplist->deskripsi = $request->get('deskripsi');
    $bplist->filename = basename($_FILES["fileToUpload"]["name"]);
        $bplist->save();

    \Session::flash('flash_message_tambah','');
        return redirect('/peraturanbp');
    }


    public function deletebp($id) {
        bp::find($id)->delete();
        // \Session::flash('flash_message', 'Data pegawai telah dihapus');
          \Session::flash('flash_message_hapus','');
        return Redirect('/peraturanbp');
    }






public function getDatatukin()
    {
        $tukin_list = tukin::orderBy('created_at','desc')->paginate(5);

        return view('peraturan.peraturantukin')->with('tukin_list', $tukin_list);
    }


    public function storetukin(Request $request) {
        // validation rules
    $uploadOk = 1;

    $target_dir = "upload/peraturan/tukin/";
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
        // echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    }
    else {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            // echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
          // $this->import();
          // \Session::flash('flash_message', 'Data telah berhasil diimport');
          }
            else {
                // echo "Sorry, there was an error uploading your file.";
            }
        }
     $tukinlist = new tukin();
        $tukinlist->judul = $request->get('judul');
        $tukinlist->deskripsi = $request->get('deskripsi');
    $tukinlist->filename = basename($_FILES["fileToUpload"]["name"]);
        $tukinlist->save();

    \Session::flash('flash_message_tambah','');
        return redirect('/peraturantukin');
    }


    public function deletetukin($id) {
        tukin::find($id)->delete();
        // \Session::flash('flash_message', 'Data pegawai telah dihapus');
                  \Session::flash('flash_message_hapus','');
        return Redirect('/peraturantukin');
    }






public function getDatapbj()
{
        $pbj_list = pbj::orderBy('created_at','desc')->paginate(5);

        return view('peraturan.peraturanpbj')->with('pbj_list', $pbj_list);
}


    public function storepbj(Request $request) {
        // validation rules
    $uploadOk = 1;

    $target_dir = "upload/peraturan/pbj/";
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
        // echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    }
    else {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            // echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
          // $this->import();
          // \Session::flash('flash_message', 'Data telah berhasil diimport');
          }
            else {
                // echo "Sorry, there was an error uploading your file.";
            }
        }
     $pbjlist = new pbj();
        $pbjlist->judul = $request->get('judul');
        $pbjlist->deskripsi = $request->get('deskripsi');
    $pbjlist->filename = basename($_FILES["fileToUpload"]["name"]);
        $pbjlist->save();

        \Session::flash('flash_message_tambah','');
        return redirect('/peraturanpbj');
    }


    public function deletepbj($id) {
        pbj::find($id)->delete();
        // \Session::flash('flash_message', 'Data pegawai telah dihapus');
        \Session::flash('flash_message_hapus','');
        return Redirect('/peraturanpbj');
    }






    public function getData()
    {
        $lpj_list = lpj::orderBy('created_at','desc')->paginate(5);

        return view('peraturan.peraturan')->with('lpj_list', $lpj_list);
    }


    public function store(Request $request) {
        // validation rules
    $uploadOk = 1;

    $target_dir = "upload/lpj/";
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
        // echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    }
    else {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            // echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
          // $this->import();
          // \Session::flash('flash_message', 'Data telah berhasil diimport');
          }
            else {
                // echo "Sorry, there was an error uploading your file.";
            }
        }
     $lpjlist = new lpj();
		$lpjlist->judul = $request->get('judul');
		$lpjlist->deskripsi = $request->get('deskripsi');
    $lpjlist->filename = basename($_FILES["fileToUpload"]["name"]);
		$lpjlist->save();

    \Session::flash('flash_message_tambah','');
        return redirect('/peraturan');
    }


    public function delete($id) {
        lpj::find($id)->delete();
        // \Session::flash('flash_message', 'Data pegawai telah dihapus');
        \Session::flash('flash_message_hapus','');
        return Redirect('/peraturan');
    }





}
