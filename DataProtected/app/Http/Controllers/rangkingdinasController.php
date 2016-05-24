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

    	$tahun = $request->get('Tahun_bulan');
      $bulan = $request->get('Bulan_bulan');

    	

    	$lama = 0;

    



          $profil = Profil::paginate(10);
      	
        $spdcenter = spdcenter::all();


          $jumlah = array();
       
          $nama = array();
          $nip = array();

          $i = 0;
          
          

          foreach ($spdcenter as $spd) {

          $bulan_berangkat = substr($spd->tanggal_berangkat, 3, 2);

          

          $berangkat = strtotime($spd->tanggal_berangkat);
          $pulang = strtotime($spd->tanggal_pulang);

          $lama = ($pulang-$berangkat)/86400;
          // $jml += $lama;        

          if(isset($jumlah[$i])){
            $jumlah[$i] += $lama;
          }
          else{
           $jumlah[$i]=$lama;
           $nama[$i] = $spd->nama;
          $nip[$i] = $spd->nip;
              }

     

            $i++;

          }



array_multisort($jumlah, SORT_DESC, $nama, $nip);




          return view('statistik.rangkingdinas')->with('profil', $profil)->with('nama',$nama)->with('nip', $nip)->with('jumlah',$jumlah);
    	

}


 public function rangkingtahun(Request $request) {



        $tahun = $request->get('Tahun');


        $lama = 0;


          $profil = Profil::paginate(10);
          // $spdcenter = spdcenter::where(DB::raw('YEAR(created_at)'), '=', date($tahun))->get();
          $spdcenter = spdcenter::all();
        


          $jumlah = array();
       
          $nama = array();
          $nip = array();
          
           $i = 0;
          

          foreach ($spdcenter as $spd) {

            $tahun_berangkat = substr($spd->tanggal_berangkat, 6, 4);

        if($tahun_berangkat==$tahun){

              
          $berangkat = strtotime($spd->tanggal_berangkat);
          $pulang = strtotime($spd->tanggal_pulang);

          $lama = ($pulang-$berangkat)/86400;
          // $jml += $lama;        

          if(isset($jumlah[$i])){
            $jumlah[$i] += $lama;
          }
          else{
           $jumlah[$i]=$lama;
           $nama[$i] = $spd->nama;
          $nip[$i] = $spd->nip;
          }

        }

            $i++;

        }


     

          return view('statistik.rangkingdinastahun')->with('profil', $profil)->with('nama',$nama)->with('nip', $nip)->with('jumlah',$jumlah);

 }



  public function bulan(Request $request) {

      $tahun = $request->get('Tahun_bulan');
      $bulan = $request->get('Bulan_bulan');

      

      $lama = 0;

    



          $profil = Profil::paginate(10);
        
        $spdcenter = spdcenter::all();


          $jumlah = array();
       
          $nama = array();
          $nip = array();

          $i = 0;
          
          

          foreach ($spdcenter as $spd) {

          $bulan_berangkat = substr($spd->tanggal_berangkat, 3, 2);
          $tahun_berangkat = substr($spd->tanggal_berangkat, 6, 4);

          if($bulan_berangkat==$bulan && $tahun_berangkat==$tahun){

          $berangkat = strtotime($spd->tanggal_berangkat);
          $pulang = strtotime($spd->tanggal_pulang);

          $lama = ($pulang-$berangkat)/86400;
          // $jml += $lama;        

          if(isset($jumlah[$i])){
            $jumlah[$i] += $lama;
          }
          else{
           $jumlah[$i]=$lama;
           $nama[$i] = $spd->nama;
          $nip[$i] = $spd->nip;
              }

            }

            $i++;

          }



array_multisort($jumlah, SORT_DESC, $nama, $nip);




          return view('statistik.rangkingdinasbulan')->with('profil', $profil)->with('nama',$nama)->with('nip', $nip)->with('jumlah',$jumlah);
      

  }



}
