@extends('layouts.app')
@section('content')
<ol class="breadcrumb">
  <li><a href="{{ url('/') }}">Home</a></li>
  <li><a href="#">Statistik</a></li>
  <li><a href="#">Pengeluaran</a></li>
</ol>
<h2>PENGELUARAN</h2>
<div class="x_title">
</div>

<ul class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#bulan">Pengeluaran per Bulan</a></li>
  <li><a data-toggle="tab" href="#tahun">Pengeluaran per Tahun</a></li>
</ul>

<div class="tab-content">
  <div id="bulan" class="tab-pane fade in active">
    <div class="row">
        <div class="page-header">
            <h2>Pengeluaran per Tahun</h2>
        </div>
        <a href="{{ url('admin/statistik/dprbulan')}}">Pengeluaran per Bulan</a></li>
    </div>
    <div id="pengeluaran-div" align="center" style="width: 1000px; height: 700px"></div>

    <?= \Lava::render('BarChart', 'Pengeluaran', 'pengeluaran-div') ?>
  </div>

  <div id="tahun" class="tab-pane fade">
    <div class="row">
        <div class="page-header">
            <h2>Pengeluaran</h2>
        </div>
        <a href="{{ url('admin/statistik/dprtahun')}}">Pengeluaran per Tahun</a></li>
        <form action="{{ url('admin/statistik/dprbulancari') }}" method="post" enctype="multipart/form-data">
    	  	<input class="btn btn-default" type="submit" value="Cari" style="float:right">
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

</div>





@endsection
