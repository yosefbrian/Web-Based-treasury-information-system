@extends('layouts.app')
@section('content')



<div class="row">
    <div class="page-header">
        <h2>Pengeluaran</h2>
    </div>


</div>
<div id="pengeluaran-div" align="center" style="width: 1000px; height: 700px"></div>

<?= \Lava::render('BarChart', 'Pengeluaran', 'pengeluaran-div') ?>



@endsection