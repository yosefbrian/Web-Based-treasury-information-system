<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Khill\Lavacharts\Lavacharts;

use App\bp2a;

class statistikController extends Controller
{
    

 public function pengeluarantahun (){

    $stocksTable = \Lava::DataTable();

    $stocksTable->addStringColumn('Tahun')
              ->addNumberColumn('Total');

   
      $jumlah = array(0,0,0,0,0,0,0,0,0);

      $i=0;
    
      $year = array('2016%','2017%','2018%','2019%','2020%','2021%','2022%','2023%','2024%','2025%');


        for($i=0; $i<=8; $i++){

          $bp2yeah = bp2a::where('created_at', 'LIKE', $year[$i])->get();
          foreach ($bp2yeah as $bp2) {
                  $total = $bp2->total;

                  $jumlah[$i]=$jumlah[$i]+(int)$total;
               }     


          if($jumlah[$i] != 0){

            $jml = $jumlah[$i];


            $thn = substr($year[$i], 0, 4);

            $rowData = array(
                 $thn, $jml);

                 $stocksTable->addRow($rowData);
            }
          }
         
          $Chart = \Lava::BarChart('Pengeluaran')
                  ->setOptions(array(
                    'datatable' => $stocksTable,
                    'title' => 'Pengeluaran'
                  ));
    return view('statistik.pengeluarantahun');
                
  }

    public function pengeluaranbulan (){

    $year = date("Y");
    $stocksTable = \Lava::DataTable();

    $stocksTable->addStringColumn('Total')
              ->addNumberColumn('Bulan');

   
      $jumlah = array(0,0,0,0,0,0,0,0,0,0,0,0);

      $i=0;
    
      $month = array('01','02','03','04','05','06','07','08','09','10','11','12');


        for($i=0; $i<=11; $i++){

          $bp2yeah = bp2a::whereYear('created_at', '=', $year)
                      ->whereMonth('created_at', '=', $month[$i])
                      ->get();
          foreach ($bp2yeah as $bp2) {
                  $total = $bp2->total;

                  $jumlah[$i]=$jumlah[$i]+(int)$total;
               }     


          if($jumlah[$i] != 0){

            $jml = $jumlah[$i];


            $bln = $month[$i];

            switch ($month[$i]) {
              case '01':
                $bln = "Januari";
                break;
              case '02':
                $bln = "Februari";
                break;
              case '03':
                $bln = "Maret";
                break;
              case '04':
                $bln = "April";
                break;
              case '05':
                $bln = "Mei";
                break;
              case '06':
                $bln = "Juni";
                break;
              case '07':
                $bln = "Juli";
                break;
              case '08':
                $bln = "Agustus";
                break;
              case '09':
                $bln = "September";
                break;
              case '10':
                $bln = "Oktober";
                break;
              case '11':
                $bln = "November";
                break;
              case '12':
                $bln = "Desember";
                break;
              default:
                $bln = "Bulan";
            }

            $rowData = array(
                 $bln, $jml);

                 $stocksTable->addRow($rowData);
            }
          }
         
          $Chart = \Lava::BarChart('Pengeluaran')
                  ->setOptions(array(
                    'datatable' => $stocksTable,
                    'title' => 'Pengeluaran'
                  ));
    return view('statistik.pengeluaranbulan');
                
  }

  public function pengeluaranbulancari(Request $request) {
        $tahun = $request->get('Tahun');

        $stocksTable = \Lava::DataTable();

        $stocksTable->addStringColumn('Total')
              ->addNumberColumn('Bulan');

   
      $jumlah = array(0,0,0,0,0,0,0,0,0,0,0,0);

      $i=0;
    
      $month = array('01','02','03','04','05','06','07','08','09','10','11','12');


        for($i=0; $i<=11; $i++){

          $bp2yeah = bp2a::whereYear('created_at', '=', $tahun)
                      ->whereMonth('created_at', '=', $month[$i])
                      ->get();
          foreach ($bp2yeah as $bp2) {
                  $total = $bp2->total;

                  $jumlah[$i]=$jumlah[$i]+(int)$total;
               }     


          if($jumlah[$i] != 0){

            $jml = $jumlah[$i];


            $bln = $month[$i];

            switch ($month[$i]) {
              case '01':
                $bln = "Januari";
                break;
              case '02':
                $bln = "Februari";
                break;
              case '03':
                $bln = "Maret";
                break;
              case '04':
                $bln = "April";
                break;
              case '05':
                $bln = "Mei";
                break;
              case '06':
                $bln = "Juni";
                break;
              case '07':
                $bln = "Juli";
                break;
              case '08':
                $bln = "Agustus";
                break;
              case '09':
                $bln = "September";
                break;
              case '10':
                $bln = "Oktober";
                break;
              case '11':
                $bln = "November";
                break;
              case '12':
                $bln = "Desember";
                break;
              default:
                $bln = "Bulan";
            }

            $rowData = array(
                 $bln, $jml);

                 $stocksTable->addRow($rowData);
            }
          }
         
          $Chart = \Lava::BarChart('Pengeluaran')
                  ->setOptions(array(
                    'datatable' => $stocksTable,
                    'title' => 'Pengeluaran'
                  ));
    return view('statistik.pengeluaranbulan');

    }




//  public function pengeluaran (){



//   $stocksTable = \Lava::DataTable();

//  $stocksTable->addNumberColumn('Projected')
//             ->addNumberColumn('Official');




// // Random Data For Example

// for ($a = 1; $a < 30; $a++)
// {
//     $rowData = array(
//       rand(800,1000), rand(800,1000)
//     );

//     $stocksTable->addRow($rowData);
// }

//   $Chart = \Lava::BarChart('Stocks')
//                 ->setOptions(array(
//                     'datatable' => $stocksTable,
//                     'title' => 'Stock Market Trends'
//                   ));

// return view('statistik.pengeluaran');
//  }
public function transportasitahun (){

    $stocksTable = \Lava::DataTable();

    $stocksTable->addStringColumn('Tahun')
              ->addNumberColumn('Tiket Berangkat')
              ->addNumberColumn('Tiket Kembali')
              ->addNumberColumn('Total Transportasi');

      $jumlahberangkat = array(0,0,0,0,0,0,0,0,0,0);
      $jumlahkembali = array(0,0,0,0,0,0,0,0,0,0);
      $jumlah = array(0,0,0,0,0,0,0,0,0,0);

      $i=0;
    
      $year = array('2016%','2017%','2018%','2019%','2020%','2021%','2022%','2023%','2024%','2025%');


        for($i=0; $i<=9; $i++){

          $bp2yeah = bp2a::where('created_at', 'LIKE', $year[$i])->get();
          foreach ($bp2yeah as $bp2) {
                  $berangkat = $bp2->tiket_berangkat;
                  $jumlahberangkat[$i]=$jumlahberangkat[$i]+(int)$berangkat;

                  $kembali = $bp2->tiket_kembali;
                  $jumlahkembali[$i]=$jumlahkembali[$i]+(int)$kembali;

                  $jumlah[$i]=$jumlahberangkat[$i]+$jumlahkembali[$i];
               }     


          if($jumlah[$i] != 0){

            $jml = $jumlah[$i];
            $jmlberangkat = $jumlahberangkat[$i];
            $jmlkembali = $jumlahkembali[$i];
            $thn = substr($year[$i], 0, 4);

            $rowData = array(
                 $thn, $jmlberangkat, $jmlkembali, $jml);

                 $stocksTable->addRow($rowData);
            }
          }
         
          $Chart = \Lava::BarChart('Pengeluaran')
                  ->setOptions(array(
                    'datatable' => $stocksTable,
                    'title' => 'Pengeluaran Transportasi'
                  ));
          return view('statistik.transportasitahun');
                  
                
  }

    public function transportasibulan (){

    $year = date("Y");
    $stocksTable = \Lava::DataTable();

    $stocksTable->addStringColumn('Tahun')
              ->addNumberColumn('Tiket Berangkat')
              ->addNumberColumn('Tiket Kembali')
              ->addNumberColumn('Total Transportasi');

      $jumlahberangkat = array(0,0,0,0,0,0,0,0,0,0,0,0);
      $jumlahkembali = array(0,0,0,0,0,0,0,0,0,0,0,0);
      $jumlah = array(0,0,0,0,0,0,0,0,0,0,0,0);

      $i=0;
    
      $month = array('01','02','03','04','05','06','07','08','09','10','11','12');


        for($i=0; $i<=11; $i++){

          $bp2yeah = bp2a::whereYear('created_at', '=', $year)
                      ->whereMonth('created_at', '=', $month[$i])
                      ->get();
          foreach ($bp2yeah as $bp2) {
                  $berangkat = $bp2->tiket_berangkat;
                  $jumlahberangkat[$i]=$jumlahberangkat[$i]+(int)$berangkat;

                  $kembali = $bp2->tiket_kembali;
                  $jumlahkembali[$i]=$jumlahkembali[$i]+(int)$kembali;

                  $jumlah[$i]=$jumlahberangkat[$i]+$jumlahkembali[$i];
               }     


          if($jumlah[$i] != 0){

            $jml = $jumlah[$i];
            $jmlberangkat = $jumlahberangkat[$i];
            $jmlkembali = $jumlahkembali[$i]; 
            $bln = $month[$i];

            switch ($month[$i]) {
              case '01':
                $bln = "Januari";
                break;
              case '02':
                $bln = "Februari";
                break;
              case '03':
                $bln = "Maret";
                break;
              case '04':
                $bln = "April";
                break;
              case '05':
                $bln = "Mei";
                break;
              case '06':
                $bln = "Juni";
                break;
              case '07':
                $bln = "Juli";
                break;
              case '08':
                $bln = "Agustus";
                break;
              case '09':
                $bln = "September";
                break;
              case '10':
                $bln = "Oktober";
                break;
              case '11':
                $bln = "November";
                break;
              case '12':
                $bln = "Desember";
                break;
              default:
                $bln = "Bulan";
            }

            $rowData = array(
                 $bln, $jmlberangkat, $jmlkembali, $jml);

                 $stocksTable->addRow($rowData);
            }
          }
         
          $Chart = \Lava::BarChart('Pengeluaran')
                  ->setOptions(array(
                    'datatable' => $stocksTable,
                    'title' => 'Pengeluaran Transportasi'
                  ));
    return view('statistik.transportasibulan');
                
  }

  public function transportasibulancari(Request $request) {
        $tahun = $request->get('Tahun');

        $stocksTable = \Lava::DataTable();

    $stocksTable->addStringColumn('Tahun')
              ->addNumberColumn('Tiket Berangkat')
              ->addNumberColumn('Tiket Kembali')
              ->addNumberColumn('Total Transportasi');

   
      $jumlahberangkat = array(0,0,0,0,0,0,0,0,0,0,0,0);
      $jumlahkembali = array(0,0,0,0,0,0,0,0,0,0,0,0);
      $jumlah = array(0,0,0,0,0,0,0,0,0,0,0,0);

      $i=0;
    
      $month = array('01','02','03','04','05','06','07','08','09','10','11','12');


        for($i=0; $i<=11; $i++){

          $bp2yeah = bp2a::whereYear('created_at', '=', $tahun)
                      ->whereMonth('created_at', '=', $month[$i])
                      ->get();
          foreach ($bp2yeah as $bp2) {
                  $berangkat = $bp2->tiket_berangkat;
                  $jumlahberangkat[$i]=$jumlahberangkat[$i]+(int)$berangkat;

                  $kembali = $bp2->tiket_kembali;
                  $jumlahkembali[$i]=$jumlahkembali[$i]+(int)$kembali;

                  $jumlah[$i]=$jumlahberangkat[$i]+$jumlahkembali[$i];
               }     


          if($jumlah[$i] != 0){

            $jml = $jumlah[$i];
            $jmlberangkat = $jumlahberangkat[$i];
            $jmlkembali = $jumlahkembali[$i]; 
            $bln = $month[$i];

            $bln = $month[$i];

            switch ($month[$i]) {
              case '01':
                $bln = "Januari";
                break;
              case '02':
                $bln = "Februari";
                break;
              case '03':
                $bln = "Maret";
                break;
              case '04':
                $bln = "April";
                break;
              case '05':
                $bln = "Mei";
                break;
              case '06':
                $bln = "Juni";
                break;
              case '07':
                $bln = "Juli";
                break;
              case '08':
                $bln = "Agustus";
                break;
              case '09':
                $bln = "September";
                break;
              case '10':
                $bln = "Oktober";
                break;
              case '11':
                $bln = "November";
                break;
              case '12':
                $bln = "Desember";
                break;
              default:
                $bln = "Bulan";
            }

            $rowData = array(
                 $bln, $jmlberangkat, $jmlkembali, $jml);

                 $stocksTable->addRow($rowData);
            }
          }
         
          $Chart = \Lava::BarChart('Pengeluaran')
                  ->setOptions(array(
                    'datatable' => $stocksTable,
                    'title' => 'Pengeluaran Transportasi'
                  ));
    return view('statistik.transportasibulancari');

    }


      public function dprtahun (){

    $stocksTable = \Lava::DataTable();

    $stocksTable->addStringColumn('Tahun')
              ->addNumberColumn('DPR');

   
      $jumlah = array(0,0,0,0,0,0,0,0,0,0);

      $i=0;
    
      $year = array('2016%','2017%','2018%','2019%','2020%','2021%','2022%','2023%','2024%','2025%');


        for($i=0; $i<=9; $i++){

          $bp2yeah = bp2a::where('created_at', 'LIKE', $year[$i])->get();
          foreach ($bp2yeah as $bp2) {
                  $dpr = $bp2->dpr;

                  $jumlah[$i]=$jumlah[$i]+(int)$dpr;
               }     


          if($jumlah[$i] != 0){

            $jml = $jumlah[$i];


            $thn = substr($year[$i], 0, 4);

            $rowData = array(
                 $thn, $jml);

                 $stocksTable->addRow($rowData);
            }
          }
         
          $Chart = \Lava::BarChart('Pengeluaran')
                  ->setOptions(array(
                    'datatable' => $stocksTable,
                    'title' => 'Pengeluaran DPR'
                  ));
    return view('statistik.dprtahun');
                
  }

    public function dprbulan (){

    $year = date("Y");
    $stocksTable = \Lava::DataTable();

    $stocksTable->addStringColumn('Bulan')
              ->addNumberColumn('DPR');

   
      $jumlah = array(0,0,0,0,0,0,0,0,0,0,0,0);

      $i=0;
    
      $month = array('01','02','03','04','05','06','07','08','09','10','11','12');


        for($i=0; $i<=11; $i++){

          $bp2yeah = bp2a::whereYear('created_at', '=', $year)
                      ->whereMonth('created_at', '=', $month[$i])
                      ->get();
          foreach ($bp2yeah as $bp2) {
                  $dpr = $bp2->dpr;

                  $jumlah[$i]=$jumlah[$i]+(int)$dpr;
               }     


          if($jumlah[$i] != 0){

            $jml = $jumlah[$i];


            $bln = $month[$i];

            switch ($month[$i]) {
              case '01':
                $bln = "Januari";
                break;
              case '02':
                $bln = "Februari";
                break;
              case '03':
                $bln = "Maret";
                break;
              case '04':
                $bln = "April";
                break;
              case '05':
                $bln = "Mei";
                break;
              case '06':
                $bln = "Juni";
                break;
              case '07':
                $bln = "Juli";
                break;
              case '08':
                $bln = "Agustus";
                break;
              case '09':
                $bln = "September";
                break;
              case '10':
                $bln = "Oktober";
                break;
              case '11':
                $bln = "November";
                break;
              case '12':
                $bln = "Desember";
                break;
              default:
                $bln = "Bulan";
            }

            $rowData = array(
                 $bln, $jml);

                 $stocksTable->addRow($rowData);
            }
          }
         
          $Chart = \Lava::BarChart('Pengeluaran')
                  ->setOptions(array(
                    'datatable' => $stocksTable,
                    'title' => 'Pengeluaran DPR'
                  ));
    return view('statistik.dprbulan');
                
  }

  public function dprbulancari(Request $request) {
        $tahun = $request->get('Tahun');

        $stocksTable = \Lava::DataTable();

    $stocksTable->addStringColumn('Bulan')
              ->addNumberColumn('DPR');
   
      $jumlah = array(0,0,0,0,0,0,0,0,0,0,0,0);

      $i=0;
    
      $month = array('01','02','03','04','05','06','07','08','09','10','11','12');


        for($i=0; $i<=11; $i++){

          $bp2yeah = bp2a::whereYear('created_at', '=', $tahun)
                      ->whereMonth('created_at', '=', $month[$i])
                      ->get();
          foreach ($bp2yeah as $bp2) {
                  $dpr = $bp2->dpr;

                  $jumlah[$i]=$jumlah[$i]+(int)$dpr;
               }     


          if($jumlah[$i] != 0){

            $jml = $jumlah[$i];


            $bln = $month[$i];

            switch ($month[$i]) {
              case '01':
                $bln = "Januari";
                break;
              case '02':
                $bln = "Februari";
                break;
              case '03':
                $bln = "Maret";
                break;
              case '04':
                $bln = "April";
                break;
              case '05':
                $bln = "Mei";
                break;
              case '06':
                $bln = "Juni";
                break;
              case '07':
                $bln = "Juli";
                break;
              case '08':
                $bln = "Agustus";
                break;
              case '09':
                $bln = "September";
                break;
              case '10':
                $bln = "Oktober";
                break;
              case '11':
                $bln = "November";
                break;
              case '12':
                $bln = "Desember";
                break;
              default:
                $bln = "Bulan";
            }

            $rowData = array(
                 $bln, $jml);

                 $stocksTable->addRow($rowData);
            }
          }
         
          $Chart = \Lava::BarChart('Pengeluaran')
                  ->setOptions(array(
                    'datatable' => $stocksTable,
                    'title' => 'Pengeluaran DPR'
                  ));
    return view('statistik.dprbulancari');

    }

    public function akomodasitahun (){

    $stocksTable = \Lava::DataTable();

    $stocksTable->addStringColumn('Tahun')
              ->addNumberColumn('Penginapan')
              ->addNumberColumn('Penginapan Tanpa Bukti')
              ->addNumberColumn('Total Akomodasi');

      $jumlahpenginapan = array(0,0,0,0,0,0,0,0,0,0);
      $jumlahtanpabukti = array(0,0,0,0,0,0,0,0,0,0);
      $jumlah = array(0,0,0,0,0,0,0,0,0,0);

      $i=0;
    
      $year = array('2016%','2017%','2018%','2019%','2020%','2021%','2022%','2023%','2024%','2025%');


        for($i=0; $i<=9; $i++){

          $bp2yeah = bp2a::where('created_at', 'LIKE', $year[$i])->get();
          foreach ($bp2yeah as $bp2) {
                  $penginapan = $bp2->penginapan;
                  $jumlahpenginapan[$i]=$jumlahpenginapan[$i]+(int)$penginapan;

                  $tanpabukti = $bp2->penginapan_tanpa_bukti;
                  $jumlahtanpabukti[$i]=$jumlahtanpabukti[$i]+(int)$tanpabukti;

                  $jumlah[$i]=$jumlahpenginapan[$i]+$jumlahtanpabukti[$i];
               }     


          if($jumlah[$i] != 0){

            $jml = $jumlah[$i];
            $jmlpenginapan = $jumlahpenginapan[$i];
            $jmltanpabukti = $jumlahtanpabukti[$i];
            $thn = substr($year[$i], 0, 4);

            $rowData = array(
                 $thn, $jmlpenginapan, $jmltanpabukti, $jml);

                 $stocksTable->addRow($rowData);
            }
          }
         
          $Chart = \Lava::BarChart('Pengeluaran')
                  ->setOptions(array(
                    'datatable' => $stocksTable,
                    'title' => 'Pengeluaran Akomodasi'
                  ));
          return view('statistik.akomodasitahun');
                  
                
  }

    public function akomodasibulan (){

    $year = date("Y");
    $stocksTable = \Lava::DataTable();

    $stocksTable->addStringColumn('Bulan')
              ->addNumberColumn('Penginapan')
              ->addNumberColumn('Penginapan Tanpa Bukti')
              ->addNumberColumn('Total Akomodasi');

      $jumlahpenginapan = array(0,0,0,0,0,0,0,0,0,0,0,0);
      $jumlahtanpabukti = array(0,0,0,0,0,0,0,0,0,0,0,0);
      $jumlah = array(0,0,0,0,0,0,0,0,0,0,0,0);

      $i=0;
    
      $month = array('01','02','03','04','05','06','07','08','09','10','11','12');


        for($i=0; $i<=11; $i++){

          $bp2yeah = bp2a::whereYear('created_at', '=', $year)
                      ->whereMonth('created_at', '=', $month[$i])
                      ->get();
          foreach ($bp2yeah as $bp2) {
                  $penginapan = $bp2->penginapan;
                  $jumlahpenginapan[$i]=$jumlahpenginapan[$i]+(int)$penginapan;

                  $tanpabukti = $bp2->penginapan_tanpa_bukti;
                  $jumlahtanpabukti[$i]=$jumlahtanpabukti[$i]+(int)$tanpabukti;

                  $jumlah[$i]=$jumlahpenginapan[$i]+$jumlahtanpabukti[$i];
               }     


          if($jumlah[$i] != 0){

            $jml = $jumlah[$i];
            $jmlpenginapan = $jumlahpenginapan[$i];
            $jmltanpabukti = $jumlahtanpabukti[$i];
            $bln = $month[$i];

            switch ($month[$i]) {
              case '01':
                $bln = "Januari";
                break;
              case '02':
                $bln = "Februari";
                break;
              case '03':
                $bln = "Maret";
                break;
              case '04':
                $bln = "April";
                break;
              case '05':
                $bln = "Mei";
                break;
              case '06':
                $bln = "Juni";
                break;
              case '07':
                $bln = "Juli";
                break;
              case '08':
                $bln = "Agustus";
                break;
              case '09':
                $bln = "September";
                break;
              case '10':
                $bln = "Oktober";
                break;
              case '11':
                $bln = "November";
                break;
              case '12':
                $bln = "Desember";
                break;
              default:
                $bln = "Bulan";
            }

            $rowData = array(
                 $bln, $jmlpenginapan, $jmltanpabukti, $jml);

                 $stocksTable->addRow($rowData);
            }
          }
         
          $Chart = \Lava::BarChart('Pengeluaran')
                  ->setOptions(array(
                    'datatable' => $stocksTable,
                    'title' => 'Pengeluaran akomodasi'
                  ));
    return view('statistik.akomodasibulan');
                
  }

  public function akomodasibulancari(Request $request) {
        $tahun = $request->get('Tahun');

        $stocksTable = \Lava::DataTable();

    $stocksTable->addStringColumn('Bulan')
              ->addNumberColumn('Penginapan')
              ->addNumberColumn('Penginapan Tanpa Bukti')
              ->addNumberColumn('Total Akomodasi');

   
      $jumlahpenginapan = array(0,0,0,0,0,0,0,0,0,0,0,0);
      $jumlahtanpabukti = array(0,0,0,0,0,0,0,0,0,0,0,0);
      $jumlah = array(0,0,0,0,0,0,0,0,0,0,0,0);

      $i=0;
    
      $month = array('01','02','03','04','05','06','07','08','09','10','11','12');


        for($i=0; $i<=11; $i++){

          $bp2yeah = bp2a::whereYear('created_at', '=', $tahun)
                      ->whereMonth('created_at', '=', $month[$i])
                      ->get();
          foreach ($bp2yeah as $bp2) {
                  $penginapan = $bp2->penginapan;
                  $jumlahpenginapan[$i]=$jumlahpenginapan[$i]+(int)$penginapan;

                  $tanpabukti = $bp2->penginapan_tanpa_bukti;
                  $jumlahtanpabukti[$i]=$jumlahtanpabukti[$i]+(int)$tanpabukti;

                  $jumlah[$i]=$jumlahpenginapan[$i]+$jumlahtanpabukti[$i];
               }     


          if($jumlah[$i] != 0){

            $jml = $jumlah[$i];
            $jmlpenginapan = $jumlahpenginapan[$i];
            $jmltanpabukti = $jumlahtanpabukti[$i];
            $bln = $month[$i];

            $bln = $month[$i];

            switch ($month[$i]) {
              case '01':
                $bln = "Januari";
                break;
              case '02':
                $bln = "Februari";
                break;
              case '03':
                $bln = "Maret";
                break;
              case '04':
                $bln = "April";
                break;
              case '05':
                $bln = "Mei";
                break;
              case '06':
                $bln = "Juni";
                break;
              case '07':
                $bln = "Juli";
                break;
              case '08':
                $bln = "Agustus";
                break;
              case '09':
                $bln = "September";
                break;
              case '10':
                $bln = "Oktober";
                break;
              case '11':
                $bln = "November";
                break;
              case '12':
                $bln = "Desember";
                break;
              default:
                $bln = "Bulan";
            }

            $rowData = array(
                 $bln, $jmlpenginapan, $jmltanpabukti, $jml);

                 $stocksTable->addRow($rowData);
            }
          }
         
          $Chart = \Lava::BarChart('Pengeluaran')
                  ->setOptions(array(
                    'datatable' => $stocksTable,
                    'title' => 'Pengeluaran Akomodasi'
                  ));
    return view('statistik.akomodasibulancari');

    }

    public function uhtahun (){

    $stocksTable = \Lava::DataTable();

    $stocksTable->addStringColumn('Tahun')
              ->addNumberColumn('UH')
              ->addNumberColumn('UHR')
              ->addNumberColumn('Uang Harian Tiba')
              ->addNumberColumn('Uang Harian Bertolak')
              ->addNumberColumn('Uang Harian Pembantu')
              ->addNumberColumn('Total Uang Harian');

      $jumlahuh = array(0,0,0,0,0,0,0,0,0,0);
      $jumlahuhr = array(0,0,0,0,0,0,0,0,0,0);
      $jumlahtiba = array(0,0,0,0,0,0,0,0,0,0);
      $jumlahbertolak = array(0,0,0,0,0,0,0,0,0,0);
      $jumlahpembantu = array(0,0,0,0,0,0,0,0,0,0);
      $jumlah = array(0,0,0,0,0,0,0,0,0,0);

      $i=0;
    
      $year = array('2016%','2017%','2018%','2019%','2020%','2021%','2022%','2023%','2024%','2025%');


        for($i=0; $i<=9; $i++){

          $bp2yeah = bp2a::where('created_at', 'LIKE', $year[$i])->get();
          foreach ($bp2yeah as $bp2) {
                  $uh = $bp2->uh;
                  $jumlahuh[$i]=$jumlahuh[$i]+(int)$uh;

                  $uhr = $bp2->uhr;
                  $jumlahuhr[$i]=$jumlahuhr[$i]+(int)$uhr;

                  $tiba = $bp2->uang_harian_tiba;
                  $jumlahtiba[$i]=$jumlahtiba[$i]+(int)$tiba;

                  $bertolak = $bp2->uang_harian_bertolak;
                  $jumlahbertolak[$i]=$jumlahbertolak[$i]+(int)$bertolak;

                  $pembantu = $bp2->uang_harian_pembantu;
                  $jumlahpembantu[$i]=$jumlahpembantu[$i]+(int)$pembantu;

                  $jumlah[$i]=$jumlahuh[$i]+$jumlahuhr[$i]+$jumlahtiba[$i]+$jumlahbertolak[$i]+$jumlahpembantu[$i];
               }     


          if($jumlah[$i] != 0){

            $jml = $jumlah[$i];
            $jmluh = $jumlahuh[$i];
            $jmluhr = $jumlahuhr[$i];
            $jmltiba = $jumlahtiba[$i];
            $jmlbertolak = $jumlahbertolak[$i];
            $jmlpembantu = $jumlahpembantu[$i];
            $thn = substr($year[$i], 0, 4);

            $rowData = array(
                 $thn, $jmluh, $jmluhr, $jmltiba, $jmlbertolak, $jmlpembantu, $jml);

                 $stocksTable->addRow($rowData);
            }
          }
         
          $Chart = \Lava::BarChart('Pengeluaran')
                  ->setOptions(array(
                    'datatable' => $stocksTable,
                    'title' => 'Pengeluaran uh'
                  ));
          return view('statistik.uhtahun');
                  
                
  }

    public function uhbulan (){

    $year = date("Y");
    $stocksTable = \Lava::DataTable();

    $stocksTable->addStringColumn('Bulan')
              ->addNumberColumn('UH')
              ->addNumberColumn('UHR')
              ->addNumberColumn('Uang Harian Tiba')
              ->addNumberColumn('Uang Harian Bertolak')
              ->addNumberColumn('Uang Harian Pembantu')
              ->addNumberColumn('Total Uang Harian');

      $jumlahuh = array(0,0,0,0,0,0,0,0,0,0,0,0);
      $jumlahuhr = array(0,0,0,0,0,0,0,0,0,0,0,0);
      $jumlahtiba = array(0,0,0,0,0,0,0,0,0,0,0,0);
      $jumlahbertolak = array(0,0,0,0,0,0,0,0,0,0,0,0);
      $jumlahpembantu = array(0,0,0,0,0,0,0,0,0,0,0,0);
      $jumlah = array(0,0,0,0,0,0,0,0,0,0,0,0);

      $i=0;
    
      $month = array('01','02','03','04','05','06','07','08','09','10','11','12');


        for($i=0; $i<=11; $i++){

          $bp2yeah = bp2a::whereYear('created_at', '=', $year)
                      ->whereMonth('created_at', '=', $month[$i])
                      ->get();
          foreach ($bp2yeah as $bp2) {
                  $uh = $bp2->uh;
                  $jumlahuh[$i]=$jumlahuh[$i]+(int)$uh;

                  $uhr = $bp2->uhr;
                  $jumlahuhr[$i]=$jumlahuhr[$i]+(int)$uhr;

                  $tiba = $bp2->uang_harian_tiba;
                  $jumlahtiba[$i]=$jumlahtiba[$i]+(int)$tiba;

                  $bertolak = $bp2->uang_harian_bertolak;
                  $jumlahbertolak[$i]=$jumlahbertolak[$i]+(int)$bertolak;

                  $pembantu = $bp2->uang_harian_pembantu;
                  $jumlahpembantu[$i]=$jumlahpembantu[$i]+(int)$pembantu;

                  $jumlah[$i]=$jumlahuh[$i]+$jumlahuhr[$i]+$jumlahtiba[$i]+$jumlahbertolak[$i]+$jumlahpembantu[$i];
               }     


          if($jumlah[$i] != 0){

            $jml = $jumlah[$i];
            $jmluh = $jumlahuh[$i];
            $jmluhr = $jumlahuhr[$i];
            $jmltiba = $jumlahtiba[$i];
            $jmlbertolak = $jumlahbertolak[$i];
            $jmlpembantu = $jumlahpembantu[$i];
            $bln = $month[$i];

            switch ($month[$i]) {
              case '01':
                $bln = "Januari";
                break;
              case '02':
                $bln = "Februari";
                break;
              case '03':
                $bln = "Maret";
                break;
              case '04':
                $bln = "April";
                break;
              case '05':
                $bln = "Mei";
                break;
              case '06':
                $bln = "Juni";
                break;
              case '07':
                $bln = "Juli";
                break;
              case '08':
                $bln = "Agustus";
                break;
              case '09':
                $bln = "September";
                break;
              case '10':
                $bln = "Oktober";
                break;
              case '11':
                $bln = "November";
                break;
              case '12':
                $bln = "Desember";
                break;
              default:
                $bln = "Bulan";
            }

            $rowData = array(
                 $bln, $jmluh, $jmluhr, $jmltiba, $jmlbertolak, $jmlpembantu, $jml);

                 $stocksTable->addRow($rowData);
            }
          }
         
          $Chart = \Lava::BarChart('Pengeluaran')
                  ->setOptions(array(
                    'datatable' => $stocksTable,
                    'title' => 'Pengeluaran uh'
                  ));
    return view('statistik.uhbulan');
                
  }

  public function uhbulancari(Request $request) {
        $tahun = $request->get('Tahun');

        $stocksTable = \Lava::DataTable();

    $stocksTable->addStringColumn('Bulan')
              ->addNumberColumn('UH')
              ->addNumberColumn('UHR')
              ->addNumberColumn('Uang Harian Tiba')
              ->addNumberColumn('Uang Harian Bertolak')
              ->addNumberColumn('Uang Harian Pembantu')
              ->addNumberColumn('Total Uang Harian');

   
      $jumlahuh = array(0,0,0,0,0,0,0,0,0,0,0,0);
      $jumlahuhr = array(0,0,0,0,0,0,0,0,0,0,0,0);
      $jumlahtiba = array(0,0,0,0,0,0,0,0,0,0,0,0);
      $jumlahbertolak = array(0,0,0,0,0,0,0,0,0,0,0,0);
      $jumlahpembantu = array(0,0,0,0,0,0,0,0,0,0,0,0);
      $jumlah = array(0,0,0,0,0,0,0,0,0,0,0,0);

      $i=0;
    
      $month = array('01','02','03','04','05','06','07','08','09','10','11','12');


        for($i=0; $i<=11; $i++){

          $bp2yeah = bp2a::whereYear('created_at', '=', $tahun)
                      ->whereMonth('created_at', '=', $month[$i])
                      ->get();
          foreach ($bp2yeah as $bp2) {
                  $uh = $bp2->uh;
                  $jumlahuh[$i]=$jumlahuh[$i]+(int)$uh;

                  $uhr = $bp2->uhr;
                  $jumlahuhr[$i]=$jumlahuhr[$i]+(int)$uhr;

                  $tiba = $bp2->uang_harian_tiba;
                  $jumlahtiba[$i]=$jumlahtiba[$i]+(int)$tiba;

                  $bertolak = $bp2->uang_harian_bertolak;
                  $jumlahbertolak[$i]=$jumlahbertolak[$i]+(int)$bertolak;

                  $pembantu = $bp2->uang_harian_pembantu;
                  $jumlahpembantu[$i]=$jumlahpembantu[$i]+(int)$pembantu;

                  $jumlah[$i]=$jumlahuh[$i]+$jumlahuhr[$i]+$jumlahtiba[$i]+$jumlahbertolak[$i]+$jumlahpembantu[$i];
               }     


          if($jumlah[$i] != 0){

            $jml = $jumlah[$i];
            $jmluh = $jumlahuh[$i];
            $jmluhr = $jumlahuhr[$i];
            $jmltiba = $jumlahtiba[$i];
            $jmlbertolak = $jumlahbertolak[$i];
            $jmlpembantu = $jumlahpembantu[$i];
            $bln = $month[$i];

            $bln = $month[$i];

            switch ($month[$i]) {
              case '01':
                $bln = "Januari";
                break;
              case '02':
                $bln = "Februari";
                break;
              case '03':
                $bln = "Maret";
                break;
              case '04':
                $bln = "April";
                break;
              case '05':
                $bln = "Mei";
                break;
              case '06':
                $bln = "Juni";
                break;
              case '07':
                $bln = "Juli";
                break;
              case '08':
                $bln = "Agustus";
                break;
              case '09':
                $bln = "September";
                break;
              case '10':
                $bln = "Oktober";
                break;
              case '11':
                $bln = "November";
                break;
              case '12':
                $bln = "Desember";
                break;
              default:
                $bln = "Bulan";
            }

            $rowData = array(
                 $bln, $jmluh, $jmluhr, $jmltiba, $jmlbertolak, $jmlpembantu, $jml);

                 $stocksTable->addRow($rowData);
            }
          }
         
          $Chart = \Lava::BarChart('Pengeluaran')
                  ->setOptions(array(
                    'datatable' => $stocksTable,
                    'title' => 'Pengeluaran uh'
                  ));
    return view('statistik.uhbulancari');

    }

  public function angkutantahun (){

    $stocksTable = \Lava::DataTable();

    $stocksTable->addStringColumn('Tahun')
              ->addNumberColumn('Angkutan Pegawai')
              ->addNumberColumn('Angkutan Keluarga')
              ->addNumberColumn('Angkutan PRT')
              ->addNumberColumn('Pengepakan')
              ->addNumberColumn('Angkutan Barang')
              ->addNumberColumn('Total Angkutan');

      $jumlahpegawai = array(0,0,0,0,0,0,0,0,0,0);
      $jumlahkeluarga = array(0,0,0,0,0,0,0,0,0,0);
      $jumlahprt = array(0,0,0,0,0,0,0,0,0,0);
      $jumlahpengepakan = array(0,0,0,0,0,0,0,0,0,0);
      $jumlahbarang = array(0,0,0,0,0,0,0,0,0,0);
      $jumlah = array(0,0,0,0,0,0,0,0,0,0);

      $i=0;
    
      $year = array('2016%','2017%','2018%','2019%','2020%','2021%','2022%','2023%','2024%','2025%');


        for($i=0; $i<=9; $i++){

          $bp2yeah = bp2a::where('created_at', 'LIKE', $year[$i])->get();
          foreach ($bp2yeah as $bp2) {
                  $pegawai = $bp2->angkutan_pegawai;
                  $jumlahpegawai[$i]=$jumlahpegawai[$i]+(int)$pegawai;

                  $keluarga = $bp2->angkutan_keluarga;
                  $jumlahkeluarga[$i]=$jumlahkeluarga[$i]+(int)$keluarga;

                  $prt = $bp2->angkutan_prt;
                  $jumlahprt[$i]=$jumlahprt[$i]+(int)$prt;

                  $pengepakan = $bp2->pengepakan;
                  $jumlahpengepakan[$i]=$jumlahpengepakan[$i]+(int)$pengepakan;

                  $barang = $bp2->angkutan_barang;
                  $jumlahbarang[$i]=$jumlahbarang[$i]+(int)$barang;

                  $jumlah[$i]=$jumlahpegawai[$i]+$jumlahkeluarga[$i]+$jumlahprt[$i]+$jumlahpengepakan[$i]+$jumlahbarang[$i];
               }     


          if($jumlah[$i] != 0){

            $jml = $jumlah[$i];
            $jmlpegawai = $jumlahpegawai[$i];
            $jmlkeluarga = $jumlahkeluarga[$i];
            $jmlprt = $jumlahprt[$i];
            $jmlpengepakan = $jumlahpengepakan[$i];
            $jmlbarang = $jumlahbarang[$i];
            $thn = substr($year[$i], 0, 4);

            $rowData = array(
                 $thn, $jmlpegawai, $jmlkeluarga, $jmlprt, $jmlpengepakan, $jmlbarang, $jml);

                 $stocksTable->addRow($rowData);
            }
          }
         
          $Chart = \Lava::BarChart('Pengeluaran')
                  ->setOptions(array(
                    'datatable' => $stocksTable,
                    'title' => 'Pengeluaran angkutan'
                  ));
          return view('statistik.angkutantahun');
                  
                
  }

    public function angkutanbulan (){

    $year = date("Y");
    $stocksTable = \Lava::DataTable();

    $stocksTable->addStringColumn('Bulan')
              ->addNumberColumn('Angkutan Pegawai')
              ->addNumberColumn('Angkutan Keluarga')
              ->addNumberColumn('Angkutan PRT')
              ->addNumberColumn('Pengepakan')
              ->addNumberColumn('Angkutan Barang')
              ->addNumberColumn('Total Angkutan');

      $jumlahpegawai = array(0,0,0,0,0,0,0,0,0,0,0,0);
      $jumlahkeluarga = array(0,0,0,0,0,0,0,0,0,0,0,0);
      $jumlahprt = array(0,0,0,0,0,0,0,0,0,0,0,0);
      $jumlahpengepakan = array(0,0,0,0,0,0,0,0,0,0,0,0);
      $jumlahbarang = array(0,0,0,0,0,0,0,0,0,0,0,0);
      $jumlah = array(0,0,0,0,0,0,0,0,0,0,0,0);

      $i=0;
    
      $month = array('01','02','03','04','05','06','07','08','09','10','11','12');


        for($i=0; $i<=11; $i++){

          $bp2yeah = bp2a::whereYear('created_at', '=', $year)
                      ->whereMonth('created_at', '=', $month[$i])
                      ->get();
          foreach ($bp2yeah as $bp2) {
                  $pegawai = $bp2->angkutan_pegawai;
                  $jumlahpegawai[$i]=$jumlahpegawai[$i]+(int)$pegawai;

                  $keluarga = $bp2->angkutan_keluarga;
                  $jumlahkeluarga[$i]=$jumlahkeluarga[$i]+(int)$keluarga;

                  $prt = $bp2->angkutan_prt;
                  $jumlahprt[$i]=$jumlahprt[$i]+(int)$prt;

                  $pengepakan = $bp2->pengepakan;
                  $jumlahpengepakan[$i]=$jumlahpengepakan[$i]+(int)$pengepakan;

                  $barang = $bp2->angkutan_barang;
                  $jumlahbarang[$i]=$jumlahbarang[$i]+(int)$barang;

                  $jumlah[$i]=$jumlahpegawai[$i]+$jumlahkeluarga[$i]+$jumlahprt[$i]+$jumlahpengepakan[$i]+$jumlahbarang[$i];
               }     


          if($jumlah[$i] != 0){

            $jml = $jumlah[$i];
            $jmlpegawai = $jumlahpegawai[$i];
            $jmlkeluarga = $jumlahkeluarga[$i];
            $jmlprt = $jumlahprt[$i];
            $jmlpengepakan = $jumlahpengepakan[$i];
            $jmlbarang = $jumlahbarang[$i];
            $bln = $month[$i];

            switch ($month[$i]) {
              case '01':
                $bln = "Januari";
                break;
              case '02':
                $bln = "Februari";
                break;
              case '03':
                $bln = "Maret";
                break;
              case '04':
                $bln = "April";
                break;
              case '05':
                $bln = "Mei";
                break;
              case '06':
                $bln = "Juni";
                break;
              case '07':
                $bln = "Juli";
                break;
              case '08':
                $bln = "Agustus";
                break;
              case '09':
                $bln = "September";
                break;
              case '10':
                $bln = "Oktober";
                break;
              case '11':
                $bln = "November";
                break;
              case '12':
                $bln = "Desember";
                break;
              default:
                $bln = "Bulan";
            }

            $rowData = array(
                 $bln, $jmlpegawai, $jmlkeluarga, $jmlprt, $jmlpengepakan, $jmlbarang, $jml);

                 $stocksTable->addRow($rowData);
            }
          }
         
          $Chart = \Lava::BarChart('Pengeluaran')
                  ->setOptions(array(
                    'datatable' => $stocksTable,
                    'title' => 'Pengeluaran angkutan'
                  ));
    return view('statistik.angkutanbulan');
                
  }

  public function angkutanbulancari(Request $request) {
        $tahun = $request->get('Tahun');

        $stocksTable = \Lava::DataTable();

    $stocksTable->addStringColumn('Bulan')
              ->addNumberColumn('Angkutan Pegawai')
              ->addNumberColumn('Angkutan Keluarga')
              ->addNumberColumn('Angkutan PRT')
              ->addNumberColumn('Pengepakan')
              ->addNumberColumn('Angkutan Barang')
              ->addNumberColumn('Total Angkutan');

   
      $jumlahpegawai = array(0,0,0,0,0,0,0,0,0,0,0,0);
      $jumlahkeluarga = array(0,0,0,0,0,0,0,0,0,0,0,0);
      $jumlahprt = array(0,0,0,0,0,0,0,0,0,0,0,0);
      $jumlahpengepakan = array(0,0,0,0,0,0,0,0,0,0,0,0);
      $jumlahbarang = array(0,0,0,0,0,0,0,0,0,0,0,0);
      $jumlah = array(0,0,0,0,0,0,0,0,0,0,0,0);

      $i=0;
    
      $month = array('01','02','03','04','05','06','07','08','09','10','11','12');


        for($i=0; $i<=11; $i++){

          $bp2yeah = bp2a::whereYear('created_at', '=', $tahun)
                      ->whereMonth('created_at', '=', $month[$i])
                      ->get();
          foreach ($bp2yeah as $bp2) {
                  $pegawai = $bp2->angkutan_pegawai;
                  $jumlahpegawai[$i]=$jumlahpegawai[$i]+(int)$pegawai;

                  $keluarga = $bp2->angkutan_keluarga;
                  $jumlahkeluarga[$i]=$jumlahkeluarga[$i]+(int)$keluarga;

                  $prt = $bp2->angkutan_prt;
                  $jumlahprt[$i]=$jumlahprt[$i]+(int)$prt;

                  $pengepakan = $bp2->pengepakan;
                  $jumlahpengepakan[$i]=$jumlahpengepakan[$i]+(int)$pengepakan;

                  $barang = $bp2->angkutan_barang;
                  $jumlahbarang[$i]=$jumlahbarang[$i]+(int)$barang;

                  $jumlah[$i]=$jumlahpegawai[$i]+$jumlahkeluarga[$i]+$jumlahprt[$i]+$jumlahpengepakan[$i]+$jumlahbarang[$i];
               }     


          if($jumlah[$i] != 0){

            $jml = $jumlah[$i];
            $jmlpegawai = $jumlahpegawai[$i];
            $jmlkeluarga = $jumlahkeluarga[$i];
            $jmlprt = $jumlahprt[$i];
            $jmlpengepakan = $jumlahpengepakan[$i];
            $jmlbarang = $jumlahbarang[$i];
            $bln = $month[$i];

            $bln = $month[$i];

            switch ($month[$i]) {
              case '01':
                $bln = "Januari";
                break;
              case '02':
                $bln = "Februari";
                break;
              case '03':
                $bln = "Maret";
                break;
              case '04':
                $bln = "April";
                break;
              case '05':
                $bln = "Mei";
                break;
              case '06':
                $bln = "Juni";
                break;
              case '07':
                $bln = "Juli";
                break;
              case '08':
                $bln = "Agustus";
                break;
              case '09':
                $bln = "September";
                break;
              case '10':
                $bln = "Oktober";
                break;
              case '11':
                $bln = "November";
                break;
              case '12':
                $bln = "Desember";
                break;
              default:
                $bln = "Bulan";
            }

            $rowData = array(
                 $bln, $jmlpegawai, $jmlkeluarga, $jmlprt, $jmlpengepakan, $jmlbarang, $jml);

                 $stocksTable->addRow($rowData);
            }
          }
         
          $Chart = \Lava::BarChart('Pengeluaran')
                  ->setOptions(array(
                    'datatable' => $stocksTable,
                    'title' => 'Pengeluaran angkutan'
                  ));
    return view('statistik.angkutanbulancari');

    }

}
