<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Auth;

use App\Profil;

use Request as reques;

class ProfilController extends Controller
{
	
	 public function getData()
    {

    	$user = Auth::user()->id;

          $profil = Profil::where('profil_id', $user)->orderBy('created_at','desc')->paginate(5);
        
        return view('admin.profile')->with('profil', $profil);
    }


    public function edit($id) {
        $book = Profil::findOrFail($id);
        return view('admin.editprofil',  compact('book'));
    }


    public function update($id, Request $request) 
    {
    		
        

        $nama = reques::get('nama');
        $nip = reques::get('nip');
        $jabatan =  reques::get('jabatan');
        $npwp   = reques::get('npwp');
        $jenis_kelamin = reques::get('jenis_kelamin');
        $nm_status_pegawai = reques::get('nm_status_pegawai');
        $pangkat =reques::get('pangkat');
        $jenis_jabatan =reques::get('jenis_jabatan');
        $unit_organisasi = reques::get('unit_organisasi');
        $jabatan_grade = reques::get('jabatan_grade');
        $nama_bank = reques::get('nama_bank');
        $no_rekening = reques::get('no_rekening');
        $nama_rekening = reques::get('nama_rekening');
		// $filename = reques::get('fileToUpload')->getClientOriginalName();

		$filename = basename($_FILES["fileToUpload"]["name"]);

		$book = Profil::findOrFail($id);

		$book->nama = $nama;
		$book->nip = $nip;
		$book->jabatan = $jabatan;
		$book->npwp = $npwp;
		$book->jenis_kelamin = $jenis_kelamin;
		$book->nm_status_pegawai = $nm_status_pegawai;
		$book->pangkat = $pangkat;
		$book->jenis_jabatan = $jenis_jabatan;
		$book->unit_organisasi = $unit_organisasi;
		$book->jabatan_grade = $jabatan_grade;
		$book->nama_bank = $nama_bank;
		$book->no_rekening = $no_rekening;
		$book->nama_rekening = $nama_rekening;
		$book->filename = $filename;
		$book->save();



		// $book->update(array(
  //           'nama'    =>  $nama,
  //           'nip' =>  $nip,
  //           'jabatan'  => $jabatan,
  //           'npwp' => $npwp
  //           'jenis_kelamin' => $jenis_kelamin,
  //           'nm_status_pegawai' => $nm_status_pegawai,
  //           'pangkat' => $pangkat,
  //           'jenis_jabatan' => $jenis_jabatan,
  //           'unit_organisasi'  => $unit_organisasi,
  //           'jabatan_grade'  => $jabatan_grade,
  //           'nama_bank'  => $nama_bank,
  //           'no_rekening'  => $no_rekening,
  //           'nama_rekening'  => $nama_rekening,
  //           'filename'  => $filename


  //       ));        
        // \Session::flash('flash_message', 'Data pegawai telah diperbarui');
        return redirect('/profil');
    }
    
    
	

}
