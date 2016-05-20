@extends('layouts.app')
@section('content')
<ol class="breadcrumb">
  <li><a href="{{ url('/') }}">Home</a></li>
  <li><a href="#">Statistik</a></li>
  <li><a href="#">Pengeluaran</a></li>
  <li><a href="#">Pengeluaran per Bulan</a></li>
</ol>

<h2>PENGELUARAN</h2>
<div class="x_title">
</div>
<br>
<div class="" style="text-align:center">
<a  href="{{ url('admin/statistik/pengeluarantahun')}}" type="button" class="btn btn-info btn-simple" style="margin-top:-5px"><i class=""></i>Pengeluaran per Tahun</a>
<a  href="{{ url('admin/statistik/pengeluaranbulan')}}" type="button" class="btn btn-info btn-simple disabled" style="margin-top:-5px"><i class=""></i>Pengeluaran per Bulan</a>
<a  href="{{ url('admin/statistik/transportasitahun')}}" type="button" class="btn btn-info btn-simple" style="margin-top:-5px"><i class=""></i>Pengeluaran Transportasi</a>
<a  href="{{ url('admin/statistik/dprtahun')}}" type="button" class="btn btn-info btn-simple" style="margin-top:-5px"><i class=""></i>Pengeluaran DPR</a>
<a  href="{{ url('admin/statistik/akomodasitahun')}}" type="button" class="btn btn-info btn-simple" style="margin-top:-5px"><i class=""></i>Pengeluaran Akomodasi</a>
<a  href="{{ url('admin/statistik/uhtahun')}}" type="button" class="btn btn-info btn-simple" style="margin-top:-5px"><i class=""></i>Pengeluaran Uang Harian</a>
<a  href="{{ url('admin/statistik/angkutantahun')}}" type="button" class="btn btn-info btn-simple" style="margin-top:-5px"><i class=""></i>Pengeluaran Angkutan</a>

<div class="x_title" style="margin-top:10px">
</div>
<br>

  <div id="bulan" class="tab-pane fade in active">
    <div class="row">

        <!-- <a href="{{ url('admin/statistik/pengeluaranbulan')}}">Pengeluaran per Bulan</a></li> -->
        <form action="{{ url('admin/statistik/pengeluaranbulancari') }}" method="post" enctype="multipart/form-data">
        <br>  <input class="btn btn-default" type="submit" value="Cari" style="float:right">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="col-xs-2" style="float:right">
          <select name="Tahun" class="form-control">
            <option value="%"> - Tahun - </option>
            <option value="2016">2016</option>
            <option value="2017">2017</option>
            <option value="2018">2018</option>
            <option value="2019">2019</option>
            <option value="2020">2020</option>
            <option value="2021">2021</option>
            <option value="2022">2022</option>
            <option value="2023">2023</option>
            <option value="2024">2024</option>
            <option value="2025">2025</option>
          </select>
        </div>
      </form>
    </div>
    <div id="pengeluaran-div" align="center" style="width: 1000px; height: 700px"></div>

    <?= \Lava::render('BarChart', 'Pengeluaran', 'pengeluaran-div') ?>
  </div>

  <!-- <div id="tahun" class="tab-pane fade">
    <div class="row">
        <div class="page-header">
            <h2>Pengeluaran</h2>
        </div>
        <a href="{{ url('admin/statistik/pengeluarantahun')}}">Pengeluaran per Tahun</a></li>
    </div>
    <div id="pengeluaran-div" align="center" style="width: 1000px; height: 700px"></div>

    <?= \Lava::render('BarChart', 'Pengeluaran', 'pengeluaran-div') ?>
  </div> -->






@endsection
