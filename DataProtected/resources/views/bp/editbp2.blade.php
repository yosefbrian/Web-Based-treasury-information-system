@extends('layouts.app')

@section('content')
<ol class="breadcrumb">
  <li><a href="{{ url('/') }}">Home</a></li>
  <li><a href="#">Reimbursement</a></li>
  <li><a href="#">Bendahara Pengeluaran 1</a></li>
  <li><a href="#">Edit data BP1</a></li>
</ol>

<h2>EDIT DATA BP 2</h2>
<div class="x_title">
</div>

@role(1)
<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="{{url('/admin/bp2/ubah/'.$bp2a->id) }}" method="post" enctype="multipart/form-data" style="margin-top:20px">
@endrole

@role(2)
<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="{{url('/bp/bp2/ubah/'.$bp2a->id) }}" method="post" enctype="multipart/form-data" style="margin-top:20px">
@endrole

   <input type="hidden" name="_token" value="{{ csrf_token() }}">

   <div class="form-group">
     <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">No SPD </label>
     <div class="col-md-6 col-sm-6 col-xs-12">
 <input class="form-control" type="text" name="no_spd" value="{{ $bp2a->no_spd }}"><br>
</div>
</div>

   <div class="form-group">
     <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">No PP </label>
     <div class="col-md-6 col-sm-6 col-xs-12">
 <input class="form-control" type="text" name="no_pp" value="{{ $bp2a->no_pp }}"><br>
</div>
</div>

<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">No SPP/SPM </label>
  <div class="col-md-6 col-sm-6 col-xs-12">
  <input class="form-control" type="text" name="no_spp" value="{{ $bp2a->no_spp }}"><br>
</div>
</div>

<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tanggal SPP/SPM </label>
  <div class="col-md-6 col-sm-6 col-xs-12">
  <input class="form-control" type="text" name="tanggal_spp"  value="{{ $bp2a->tgl_spp }}"><br>
</div>
</div>

<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tiket Berangkat </label>
  <div class="col-md-6 col-sm-6 col-xs-12">
  <input class="form-control" type="text" name="tiket_berangkat" value="{{ $bp2a->tiket_berangkat }}" ><br>
</div>
</div>

<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tiket Kembali </label>
  <div class="col-md-6 col-sm-6 col-xs-12">
  <input class="form-control" type="text" name="tiket_kembali" value="{{ $bp2a->tiket_kembali }}"><br>
</div>
</div>

<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">DPR </label>
  <div class="col-md-6 col-sm-6 col-xs-12">
  <input class="form-control" type="text" name="dpr" value="{{ $bp2a->dpr }}"><br>
</div>
</div>

<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Penginapan </label>
  <div class="col-md-6 col-sm-6 col-xs-12">
  <input class="form-control" type="text" name="penginapan" value="{{ $bp2a->penginapan }}"><br>
</div>
</div>

<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Penginapan Tanpa Bukti </label>
  <div class="col-md-6 col-sm-6 col-xs-12">
  <input class="form-control" type="text" name="penginapan_tanpa_bukti" value="{{ $bp2a->penginapan_tanpa_bukti }}"><br>
</div>
</div>

<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">UH </label>
  <div class="col-md-6 col-sm-6 col-xs-12">
  <input class="form-control" type="text" name="uh" value="{{ $bp2a->uh }}"><br>
</div>
</div>

<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">UHR </label>
  <div class="col-md-6 col-sm-6 col-xs-12">
  <input class="form-control" type="text" name="uhr" value="{{ $bp2a->uhr }}"><br>
</div>
</div>

<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Kekurangan </label>
  <div class="col-md-6 col-sm-6 col-xs-12">
  <input class="form-control" type="text" name="kekurangan" value="{{ $bp2a->kekurangan }}"><br>
</div>
</div>

<div class="form-group">
 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Perjalanan Dinas</label>
 <div class="col-md-6 col-sm-6 col-xs-12">
 <input class="form-control" type="text" name="perjalanan_dinas" value="{{ $bp2a->perjalanan_dinas }}"><br>
</div>
</div>

<div class="form-group">
 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Angkutan Pegawai</label>
 <div class="col-md-6 col-sm-6 col-xs-12">
 <input class="form-control" type="text" name="angkutan_pegawai" value="{{ $bp2a->angkutan_pegawai }}"><br>
</div>
</div>

<div class="form-group">
 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Angkutan Keluarga</label>
 <div class="col-md-6 col-sm-6 col-xs-12">
 <input class="form-control" type="text" name="angkutan_keluarga" value="{{ $bp2a->angkutan_keluarga }}"><br>
</div>
</div>

<div class="form-group">
 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Angkutan PRT</label>
 <div class="col-md-6 col-sm-6 col-xs-12">
 <input class="form-control" type="text" name="angkutan_prt" value="{{ $bp2a->angkutan_prt }}"><br>
</div>
</div>

<div class="form-group">
 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Pengepakan</label>
 <div class="col-md-6 col-sm-6 col-xs-12">
 <input class="form-control" type="text" name="pengepakan" value="{{ $bp2a->pengepakan }}"><br>
</div>
</div>

<div class="form-group">
 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Angkutan Barang</label>
 <div class="col-md-6 col-sm-6 col-xs-12">
 <input class="form-control" type="text" name="angkutan_barang" value="{{ $bp2a->angkutan_barang }}"><br>
</div>
</div>

<div class="form-group">
 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Uang Harian Tiba</label>
 <div class="col-md-6 col-sm-6 col-xs-12">
 <input class="form-control" type="text" name="uang_harian_tiba" value="{{ $bp2a->uang_harian_tiba }}"><br>
</div>
</div>

<div class="form-group">
 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Uang Harian Bertolak</label>
 <div class="col-md-6 col-sm-6 col-xs-12">
 <input class="form-control" type="text" name="uang_harian_bertolak" value="{{ $bp2a->uang_harian_bertolak }}"><br>
</div>
</div>

<div class="form-group">
 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Uang Harian Pembantu</label>
 <div class="col-md-6 col-sm-6 col-xs-12">
 <input class="form-control" type="text" name="uang_harian_pembantu" value="{{ $bp2a->uang_harian_pembantu }}"><br>
</div>
</div>

<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Total <span class="required"></span></label>
  <div class="col-md-6 col-sm-6 col-xs-12">
  <input class="form-control" type="text" name="total" value="{{ $bp2a->total }}"><br>
</div>
</div>

<div class="ln_solid"></div>
<div class="form-group">
  <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
    <button type="submit" class="btn btn-primary">Batal</button>
    <button type="submit" class="btn btn-success">Simpan</button>
  </div>
</div>

</form>

@endsection
