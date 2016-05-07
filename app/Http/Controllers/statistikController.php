<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Khill\Lavacharts\Lavacharts;

use App\bp2a;

class statistikController extends Controller
{
    

 public function pengeluaran (){

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



return view('statistik.pengeluaran');
  // return $thn;
                
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
