<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\spdcenter;

use App\Profil;

use DB;


class rangkingdinasController extends Controller
{
    public function show(Request $request) {

    	
    	

    	$lama = 0;

    	// $pengiriman = array();
     //    $no_pd = array();
    	// $no_st = array();
    	// $nip = array();
    	// $nama = array();
    	// $berangkat = array();
    	// $tujuan = array();
    	// $tanggal = array();
     //  	$bulan = array();
     //  	$tahun = array();
     //  	$tanggal_pulang = array();
     //  	$bulan_pulang = array();
     //  	$tahun_pulang = array();
    	// $kegiatan = array();
    	// $keterangan = array();
    	// $nama_ppk = array();
     //  	$tanggal_pengiriman = array();
     //  	$bulan_pengiriman = array();
     //  	$tahun_pengiriman = array();

      	// foreach ($profil as $pro) {

          $profil = Profil::paginate(10);
      		$spdcenter = spdcenter::where(DB::raw('MONTH(created_at)'), '=', date('5'))->get();
      	


          $jumlah = array();
       
          $nama = array();
          $nip = array();
          
          

          foreach ($spdcenter as $spd) {

              
          $berangkat = strtotime($spd->tanggal_berangkat);
          $pulang = strtotime($spd->tanggal_pulang);

          $lama = ($pulang-$berangkat)/86400;
          // $jml += $lama;        

          if(isset($jumlah[$spd->nip])){
            $jumlah[$spd->nip] += $lama;
          }
          else{
           $jumlah[$spd->nip]=$lama;
           $nama[$spd->nip] = $spd->nama;
          $nip[$spd->nip] = $spd->nip;
          }


          
          



          }


    	// foreach ($spdcenter as $spd) {


    		// $pengiriman[$spd->id] = $spd->pengiriman;
      //  		$no_pd[$spd->id] = $spd->no_pd;
    		// $no_st[$spd->id] = $spd->no_st;
    		// $nip[$spd->id] = $spd->nip;
    		// $nama[$spd->id] = $spd->nama;
    		// $berangkat[$spd->id] = $spd->berangkat;
    		// $tujuan[$spd->id] = $spd->tujuan;
    		// $tanggal_berangkat[$spd->id] = $spd->tanggal_berangkat;
      // 		$tanggal_pulang[$spd->id] = $spd->tanggal_pulang;
    		// $kegiatan[$spd->id] = $spd->kegiatan;
    		// $keterangan[$spd->id] = $spd->keterangan;
    		// $nama_ppk[$spd->id] = $spd->nama_ppk;
      // 		$tanggal_pengiriman[$spd->id] = $spd->tanggal_pengiriman;
      	




    	// 	$berangkat = strtotime($spd->tanggal_berangkat);
    	// 	$pulang = strtotime($spd->tanggal_pulang);


    	// 	$lama[$spd->id] = ($pulang - $berangkat)/86400;
    		
    	// }

    	// rsort($lama);


    	//  return view('statistik.rangkingdinas')->with('lama', $lama)->with('spdcenter', $spdcenter);


      		// return [$nama, $nip, $jumlah];

          return view('statistik.rangkingdinas')->with('profil', $profil)->with('nama',$nama)->with('nip', $nip)->with('jumlah',$jumlah);
    	

}
}
