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




}
