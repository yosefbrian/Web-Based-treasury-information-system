<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\spdcenter;

use App\bp1;

use App\bp2a;

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

     public function make2($id) {
        $bp2a = spdcenter::findOrFail($id);
        return view('bp.newbp2',  compact('bp2a'));
    }

    public function make2b($id) {
        $bp2b = spdcenter::findOrFail($id);
        return view('bp.newbp2b',  compact('bp2b'));
    }

    public function show() {
          $bp1 = bp1::paginate(10);
        
       	  return view('bp.showbp1')->with('bp1', $bp1);
    }

    public function show2() {
          $bp2 = bp2a::paginate(10);
        
          return view('bp.showbp2')->with('bp2', $bp2);
    }

    public function create1(Request $request) {
        
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

public function create2(Request $request) {
        
        $bp2a = new bp2a();
        $bp2a->no_spd = $request->get('no_spd');
         $bp2a->no_pp = $request->get('no_pp');
        $bp2a->no_spp = $request->get('no_spp');
        $bp2a->spd_id = $request->get('spd_id');
        $bp2a->tgl_spp = $request->get('tanggal_spp');
      $bp2a->tiket_berangkat = $request->get('tiket_berangkat');
      $bp2a->tiket_kembali = $request->get('tiket_kembali');
      $bp2a->dpr = $request->get('dpr');
      $bp2a->penginapan = $request->get('penginapan');
      $bp2a->penginapan_tanpa_bukti = $request->get('penginapan_tanpa_bukti');
      $bp2a->uh = $request->get('uh');
      $bp2a->uhr = $request->get('uhr');
      $bp2a->kekurangan = $request->get('kekurangan');

      $bp2a->perjalanan_dinas = $request->get('perjalanan_dinas');
      $bp2a->angkutan_pegawai = $request->get('angkutan_pegawai');
      $bp2a->angkutan_keluarga = $request->get('angkutan_keluarga');
      $bp2a->angkutan_prt = $request->get('angkutan_prt');
      $bp2a->pengepakan = $request->get('angkutan_prt');
      $bp2a->angkutan_barang = $request->get('angkutan_barang');
      $bp2a->uang_harian_tiba = $request->get('uang_harian_tiba');
      $bp2a->uang_harian_bertolak = $request->get('uang_harian_bertolak');
      $bp2a->uang_harian_pembantu = $request->get('uang_harian_pembantu');
      $bp2a->total = $request->get('total');
        $bp2a->save();
         
    
        return redirect('admin/bp2');
    }





public function delete($id) {
        bp1::find($id)->delete();
        // \Session::flash('flash_message', 'Data pegawai telah dihapus');
        return Redirect('admin/bp1/show');
    }

public function delete2($id) {
        bp2a::find($id)->delete();
        // \Session::flash('flash_message', 'Data pegawai telah dihapus');
        return Redirect('admin/bp2a/show');
    }




    public function editdata($id) {
        $bp1 = bp1::findOrFail($id);
        return view('bp.editbp1',  compact('bp1'));
    }

    public function editdata2($id) {
        $bp2a = bp2a::findOrFail($id);
        return view('bp.editbp2',  compact('bp2a'));
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




  //       ));        
        // \Session::flash('flash_message', 'Data pegawai telah diperbarui');
        return redirect('/admin/bp1');
    }
    

    public function update2($id, Request $request) 
    {
         $no_spd = reques::get('no_spd');
        $spd_id = reques::get('spd_id');
        $no_pp = reques::get('no_pp');
        $no_spp = reques::get('no_spp');
        $tanggal_spp =  reques::get('tanggal_spp');
        $tiket_berangkat   = reques::get('tiket_berangkat');
        $tiket_kembali = reques::get('tiket_kembali');
        $nama_dpr = reques::get('dpr');
        $penginapan =reques::get('penginapan');
        $penginapan_tanpa_bukti =reques::get('penginapan_tanpa_bukti');
        $uh =reques::get('uh');
        $uhr =reques::get('uhr');
        $kekurangan =reques::get('kekurangan');
        $total1 =reques::get('total1');
        // $filename = reques::get('fileToUpload')->getClientOriginalName();



    $bp2a = bp2a::findOrFail($id);

     $bp2a->no_spd = $no_spd;
    $bp2a->spd_id = $spd_id;
    $bp2a->no_pp = $no_pp;
    $bp2a->no_spp = $no_spp;
    $bp2a->tgl_spp = $tanggal_spp;
    $bp2a->tiket_berangkat = $tiket_berangkat;
    $bp2a->tiket_kembali = $tiket_kembali;
    $bp2a->dpr = $nama_dpr;
    $bp2a->penginapan = $penginapan;
    $bp2a->penginapan_tanpa_bukti = $penginapan_tanpa_bukti;
    $bp2a->uh = $uh;
    $bp2a->uhr = $uhr;
    $bp2a->kekurangan = $kekurangan;
    $bp2a->total1 = $total1;

    $bp2a->save();




  //       ));        
        // \Session::flash('flash_message', 'Data pegawai telah diperbarui');
        return redirect('/admin/bp2');
    }



}
