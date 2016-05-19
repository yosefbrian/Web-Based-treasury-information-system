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


<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="{{url('/bp/bp2/ubah/'.$bp2a->id) }}" method="post" enctype="multipart/form-data" style="margin-top:20px">

@role(2)
 <form action="{{url('/bp/bp2/ubah/'.$bp2a->id) }}" method="post" enctype="multipart/form-data">
   <input type="hidden" name="_token" value="{{ csrf_token() }}">

   <div class="form-group">
     <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">No PP <span class="required"></span></label>
     <div class="col-md-6 col-sm-6 col-xs-12">
 <input class="form-control" type="hidden" name="no_spd" value="{{ $bp2a->no_spd }}"><br>
</div>
</div>

<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">No SPP/SPM <span class="required"></span></label>
  <div class="col-md-6 col-sm-6 col-xs-12">
  <input class="form-control" type="text" name="no_pp" value="{{ $bp2a->no_pp }}"><br>
</div>
</div>

<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">No PD <span class="required"></span></label>
  <div class="col-md-6 col-sm-6 col-xs-12">
  <input class="form-control" type="text" name="no_spp" value="{{ $bp2a->no_spp }}"><br>
</div>
</div>

<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tanggal SPP/SPM <span class="required"></span></label>
  <div class="col-md-6 col-sm-6 col-xs-12">
  <input class="form-control" type="text" name="tanggal_spp"  value="{{ $bp2a->tgl_spp }}"><br>
</div>
</div>

<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tiket Berangkat <span class="required"></span></label>
  <div class="col-md-6 col-sm-6 col-xs-12">
  <input class="form-control" type="text" name="tiket_berangkat" value="{{ $bp2a->tiket_berangkat }}" ><br>
</div>
</div>

<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tiket Kembali <span class="required"></span></label>
  <div class="col-md-6 col-sm-6 col-xs-12">
  <input class="form-control" type="text" name="tiket_kembali" value="{{ $bp2a->tiket_kembali }}"><br>
</div>
</div>

<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">DPR <span class="required"></span></label>
  <div class="col-md-6 col-sm-6 col-xs-12">
  <input class="form-control" type="text" name="dpr" value="{{ $bp2a->dpr }}"><br>
</div>
</div>

<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Penginapan <span class="required"></span></label>
  <div class="col-md-6 col-sm-6 col-xs-12">
  <input class="form-control" type="text" name="penginapan" value="{{ $bp2a->penginapan }}"><br>
</div>
</div>

<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Penginapan Tanpa Bukti <span class="required"></span></label>
  <div class="col-md-6 col-sm-6 col-xs-12">
  <input class="form-control" type="text" name="penginapan_tanpa_bukti" value="{{ $bp2a->penginapan_tanpa_bukti }}"><br>
</div>
</div>

<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">UH <span class="required"></span></label>
  <div class="col-md-6 col-sm-6 col-xs-12">
  <input class="form-control" type="text" name="uh" value="{{ $bp2a->uh }}"><br>
</div>
</div>

<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">UHR <span class="required"></span></label>
  <div class="col-md-6 col-sm-6 col-xs-12">
  <input class="form-control" type="text" name="uhr" value="{{ $bp2a->uhr }}"><br>
</div>
</div>

<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Kekurangan <span class="required"></span></label>
  <div class="col-md-6 col-sm-6 col-xs-12">
  <input class="form-control" type="text" name="kekurangan" value="{{ $bp2a->kekurangan }}"><br>
</div>
</div>

<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Total <span class="required"></span></label>
  <div class="col-md-6 col-sm-6 col-xs-12">
  <input class="form-control" type="text" name="total1" value="{{ $bp2a->total1 }}"><br>
</div>
</div>

<div class="ln_solid"></div>
<div class="form-group">
  <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
    <button type="submit" class="btn btn-primary">Batal</button>
    <button type="submit" class="btn btn-success">Simpan</button>
    <input type="hidden" name="_token" value="">
  </div>
</div>

</form>

@endrole




@role(1)
 <form action="{{url('/admin/bp2/ubah/'.$bp2a->id) }}" method="post" enctype="multipart/form-data">
   <input type="hidden" name="_token" value="{{ csrf_token() }}">

 <input class="form-control" type="hidden" name="no_spd" value="{{ $bp2a->no_spd }}"><br>
   No PP:<br>
  <input class="form-control" type="text" name="no_pp" value="{{ $bp2a->no_pp }}"><br>

  No SPP/SPM:<br>
  <input class="form-control" type="text" name="no_spp" value="{{ $bp2a->no_spp }}"><br>

  <input class="form-control" type="hidden" name="spd_id" value="{{ $bp2a->spd_id }}"><br>

  Tanggal SPP/SPM:<br>
  <input class="form-control" type="text" name="tanggal_spp"  value="{{ $bp2a->tgl_spp }}"><br>

  Tiket Berangkat:<br>
  <input class="form-control" type="text" name="tiket_berangkat" value="{{ $bp2a->tiket_berangkat }}" ><br>

  Tiket Kembali:<br>
  <input class="form-control" type="text" name="tiket_kembali" value="{{ $bp2a->tiket_kembali }}"><br>

  DPR:<br>
  <input class="form-control" type="text" name="dpr" value="{{ $bp2a->dpr }}"><br>

  Penginapan:<br>
  <input class="form-control" type="text" name="penginapan" value="{{ $bp2a->penginapan }}"><br>

  Penginapan Tanpa Bukti:<br>
  <input class="form-control" type="text" name="penginapan_tanpa_bukti" value="{{ $bp2a->penginapan_tanpa_bukti }}"><br>

  UH:<br>
  <input class="form-control" type="text" name="uh" value="{{ $bp2a->uh }}"><br>

  UHR:<br>
  <input class="form-control" type="text" name="uhr" value="{{ $bp2a->uhr }}"><br>

  Kekurangan :<br>
  <input class="form-control" type="text" name="kekurangan" value="{{ $bp2a->kekurangan }}"><br>


  Total1 :<br>
  <input class="form-control" type="text" name="total1" value="{{ $bp2a->total1 }}"><br>


  <input class="btn btn-success" type="submit" value="Simpan">
   <input class="btn btn-danger" type="submit" value="Batal">
     <input type="hidden" name="_token" value="{{ csrf_token() }}">
</form>

@endrole

@endsection
