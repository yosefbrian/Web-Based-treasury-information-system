<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\spdcenter;

use App\Profil;

use App\Http\Requests;

use Request as reques;

use Auth;

class SPDController extends Controller
{
    public function getData()
    {

    	// $user = Auth::user()->id;

          $profil = Profil::paginate(10);
        
        return view('spd.spd')->with('profil', $profil);
    }


    public function edit($id) {
        $profil = Profil::findOrFail($id);
        return view('spd.spdcenter',  compact('profil'));
    }


    public function create(Request $request) {
         $spd = new spdcenter();
        $spd->pengiriman = $request->get('pengiriman');
        $spd->no_pd = $request->get('no_pd');
    	$spd->no_st = $request->get('no_st');
    	$spd->nip = $request->get('nip');
    	$spd->nama = $request->get('nama');
    	$spd->berangkat = $request->get('berangkat');
    	$spd->tujuan = $request->get('tujuan');
    	$spd->tanggal = $request->get('tanggal');
    	$spd->kegiatan = $request->get('kegiatan');
    	$spd->keterangan = $request->get('keterangan');
    	$spd->nama_ppk = $request->get('nama_ppk');
        $spd->save();
         
    
        return redirect('admin/spd');
    }


    public function spdlist()
    {

    	// $user = Auth::user()->id;

        $spd = spdcenter::paginate(10);
        
        return view('spd.listspd')->with('spd', $spd);
    }


    public function delete($id) {
        spdcenter::find($id)->delete();
        // \Session::flash('flash_message', 'Data pegawai telah dihapus');
        return Redirect('admin/listspd');
    }


    public function ubah($id) {
        $spd = spdcenter::findOrFail($id);
        return view('spd.spdupdate',  compact('spd'));
    }


    public function update($id, Request $request) 
    {
    		
        $pengiriman = reques::get('pengiriman');
        $no_pd = reques::get('no_pd');
    	$no_st = reques::get('no_st');
    	$nip = reques::get('nip');
    	$nama = reques::get('nama');
    	$berangkat = reques::get('berangkat');
    	$tujuan = reques::get('tujuan');
    	$tanggal = reques::get('tanggal');
    	$kegiatan = reques::get('kegiatan');
    	$keterangan = reques::get('keterangan');
    	$nama_ppk = reques::get('nama_ppk');


       
		// $filename = reques::get('fileToUpload')->getClientOriginalName();


		$book = spdcenter::findOrFail($id);

		$book->pengiriman = $pengiriman;
		$book->no_pd = $no_pd;
		$book->no_st = $no_st;
		$book->nip = $nip;
		$book->nama = $nama;
		$book->berangkat = $berangkat;
		$book->tujuan = $tujuan;
		$book->tanggal = $tanggal;
		$book->kegiatan = $kegiatan;
		$book->keterangan = $keterangan;
		$book->nama_ppk = $nama_ppk;
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
        return redirect('admin/listspd');
    }





    public function spduser()
    {

    	$user = Auth::user()->id;

          $profil = Profil::where('profil_id', $user)->firstOrFail();

          $nip = $profil->nip;

			$spd = spdcenter::where('nip', $nip)->paginate(10);          
        
        return view('spd.spduser')->with('spd', $spd);
    }







}