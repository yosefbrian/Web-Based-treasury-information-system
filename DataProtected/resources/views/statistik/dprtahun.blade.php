@extends('layouts.app')
@section('content')
<ol class="breadcrumb">
  <li><a href="{{ url('/') }}">Home</a></li>
  <li><a href="#">Statistik</a></li>
  <li><a href="#">Pengeluaran</a></li>
  <li><a href="#">Pengeluaran DPR</a></li>
</ol>

<h2>PENGELUARAN</h2>
<div class="x_title">
</div>
<br>
<div class="" style="text-align:center">
<a  href="{{ url('admin/statistik/pengeluarantahun')}}" type="button" class="btn btn-info btn-simple" style="margin-top:-5px"><i class=""></i>Pengeluaran per Tahun</a>
<a  href="{{ url('admin/statistik/pengeluaranbulan')}}" type="button" class="btn btn-info btn-simple" style="margin-top:-5px"><i class=""></i>Pengeluaran per Bulan</a>
<a  href="{{ url('admin/statistik/transportasitahun')}}" type="button" class="btn btn-info btn-simple" style="margin-top:-5px"><i class=""></i>Pengeluaran Transportasi</a>
<a  href="{{ url('admin/statistik/dprtahun')}}" type="button" class="btn btn-info btn-simple disabled" style="margin-top:-5px"><i class=""></i>Pengeluaran DPR</a>
<a  href="{{ url('admin/statistik/akomodasitahun')}}" type="button" class="btn btn-info btn-simple" style="margin-top:-5px"><i class=""></i>Pengeluaran Akomodasi</a>
<a  href="{{ url('admin/statistik/uhtahun')}}" type="button" class="btn btn-info btn-simple" style="margin-top:-5px"><i class=""></i>Pengeluaran Uang Harian</a>
<a  href="{{ url('admin/statistik/angkutantahun')}}" type="button" class="btn btn-info btn-simple" style="margin-top:-5px"><i class=""></i>Pengeluaran Angkutan</a>
</div>

<div class="x_title" style="margin-top:10px">
</div>
<br>

<div class="" style="text-align:center">
  <a  href="{{ url('admin/statistik/dprtahun')}}" type="button" class="btn btn-warning btn-simple disabled" style="margin-top:-5px"><i class=""></i>Tahunan</a>
  <a  href="{{ url('admin/statistik/dprbulan')}}" type="button" class="btn btn-warning btn-simple" style="margin-top:-5px"><i class=""></i>Bulanan</a>
</div>


<div class="row">

    <!-- <a href="{{ url('admin/statistik/dprbulan')}}">Pengeluaran per Bulan</a></li> -->
</div>
<div id="pengeluaran-div" align="center" style="width: 1000px; height: 700px"></div>

<?= \Lava::render('BarChart', 'Pengeluaran', 'pengeluaran-div') ?>



@endsection
