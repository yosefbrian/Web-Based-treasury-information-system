@extends('layouts.app')
@section('content')

<ol class="breadcrumb">
  <li><a href="{{ url('/') }}">Home</a></li>
  <li><a href="#">Statistik</a></li>
  <li><a href="#">Pengeluaran</a></li>
</ol>


<div class="row">
    <div class="page-header">
        <h2>Pengeluaran per Tahun</h2>
    </div>
    <a href="{{ url('admin/statistik/pengeluaranbulan')}}">Pengeluaran per Bulan</a></li>
</div>
<div id="pengeluaran-div" align="center" style="width: 1000px; height: 700px"></div>

<?= \Lava::render('BarChart', 'Pengeluaran', 'pengeluaran-div') ?>



@endsection
