<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\spdcenter;

use App\bp1;

use Request as reques;


class bpController extends Controller
{
    
	public function getData()
    {

          $spd = spdcenter::paginate(10);
        
       	  return view('bp.bp')->with('spd', $spd);
    }


      public function make($id) {
        $bp1 = spdcenter::findOrFail($id);
        return view('bp.newbp1',  compact('bp1'));
    }


    public function show() {
          $bp1 = bp1::paginate(10);
        
       	  return view('bp.showbp1')->with('bp1', $bp1);
    }


    public function create1(Request $request) {
        

  //   	$no_pp = reques::get('no_pp');
  //       $no_pd = reques::get('no_pd');
  //       $nama =  reques::get('nama');
  //       $nip   = reques::get('nip');
  //       $pencairan = reques::get('pencairan');
  //       $nama_pkk = reques::get('nama_pkk');
  //       $keterangan =reques::get('keterangan');


  //       $book = bp1::findOrFail($id);

		// $book->no_pp = $no_pp;
		// $book->no_pd = $no_pd;
		// $book->nama = $nama;
		// $book->nip = $nip;
		// $book->pencairan = $pencairan;
		// $book->nama_pkk = $nama_pkk;
		// $book->keterangan = $keterangan;
		// $book->save();


        
        $bp1 = new bp1();
        $bp1->no_pp = $request->get('no_pp');
        $bp1->no_pd = $request->get('no_pd');
    	$bp1->nama = $request->get('nama');
    	$bp1->nip = $request->get('nip');
    	$bp1->pencairan = $request->get('pencairan');
    	$bp1->nama_ppk = $request->get('nama_ppk');
    	$bp1->keterangan = $request->get('keterangan');
        $bp1->save();
         
    
        return redirect('admin/bp1');
    }


public function delete($id) {
        bp1::find($id)->delete();
        // \Session::flash('flash_message', 'Data pegawai telah dihapus');
        return Redirect('admin/bp1/show');
    }




    public function editdata($id) {
        $bp1 = bp1::findOrFail($id);
        return view('bp.editbp1',  compact('bp1'));
    }


 public function update($id, Request $request) 
    {
    		

        $no_pp = reques::get('no_pp');
        $no_pd = reques::get('no_pd');
        $nama =  reques::get('nama');
        $nip   = reques::get('nip');
        $pencairan = reques::get('pencairan');
        $nama_ppk = reques::get('nama_ppk');
        $keterangan =reques::get('keterangan');
        // $filename = reques::get('fileToUpload')->getClientOriginalName();



		$bp1 = bp1::findOrFail($id);

		$bp1->no_pp = $no_pp;
		$bp1->no_pd = $no_pd;
		$bp1->nama = $nama;
		$bp1->nip = $nip;
		$bp1->pencairan = $pencairan;
		$bp1->nama_ppk = $nama_ppk;
		$bp1->keterangan = $keterangan;
		$bp1->save();



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
        return redirect('/admin/bp1');
    }
    



}
