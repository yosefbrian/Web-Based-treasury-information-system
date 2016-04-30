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

 $stocksTable->addDateColumn('Day of Month')
            ->addNumberColumn('Projected')
            ->addNumberColumn('Official');




// Random Data For Example

for ($a = 1; $a < 30; $a++)
{
    $rowData = array(
      "2014-8-$a", rand(800,1000), rand(800,1000)
    );

    $stocksTable->addRow($rowData);
}

  $Chart = \Lava::LineChart('Stocks')
                ->setOptions(array(
                    'datatable' => $stocksTable,
                    'title' => 'Stock Market Trends'
                  ));

return view('statistik.pengeluaran');
 }
    

}
