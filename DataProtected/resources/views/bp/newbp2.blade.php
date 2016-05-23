@extends('layouts.app')

@section('content')

<ol class="breadcrumb">
  <li><a href="{{ url('/') }}">Home</a></li>
  <li><a href="#">Reimbursement</a></li>
  <li><a href="#">Bendahara Pengeluaran 1</a></li>
  <li><a href="#">Isi data BP2</a></li>
</ol>

<h2>ISI DATA BP 2</h2>
<div class="x_title">
</div>

@role(1)
<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="{{url('/admin/bp2a/edit/'.$bp2a->id) }}" method="post" enctype="multipart/form-data" style="margin-top:20px">
@endrole

@role(5)
<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="{{url('/bp2/bp2a/edit/'.$bp2a->id) }}" method="post" enctype="multipart/form-data" style="margin-top:20px">
@endrole
  <input type="hidden" name="_token" value="{{ csrf_token() }}">

<div class="form-group">
 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">No SPD</label>
 <div class="col-md-6 col-sm-6 col-xs-12">
 <input class="form-control" type="text" name="no_spd" value="{{ $bp2a->no_spd }}">
</div>
</div>

  <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">No PP</label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <input class="form-control" type="text" name="no_pp" value="{{ $bp2a->no_pp }}"><br>
    </div>
    </div>

<input class="form-control" type="hidden" name="spd_id" value="{{$bp2a->id}}">
<div class="form-group">
 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">No SPP/SPM</label>
 <div class="col-md-6 col-sm-6 col-xs-12">
 <input class="form-control" type="text" name="no_spp" value="{{ $bp2a->no_spp }}">
</div>
</div>
<input class="form-control" type="hidden" name="spd_id" value="{{$bp2a->id}}"><br>

<div class="form-group">
 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tanggal SPP/SPM</label>
 <div class="col-md-6 col-sm-6 col-xs-12">
 <input class="form-control" type="text" name="tanggal_spp"  value="{{ $bp2a->tgl_spp }}"><br>
</div>
</div>

<div class="form-group">
 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tiket Berangkat</label>
 <div class="col-md-6 col-sm-6 col-xs-12">
 <input class="form-control" type="text" name="tiket_berangkat" value="{{ $bp2a->tiket_berangkat }}" ><br>
</div>
</div>

<div class="form-group">
 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tiket Kembali</label>
 <div class="col-md-6 col-sm-6 col-xs-12">
 <input class="form-control" type="text" name="tiket_kembali" value="{{ $bp2a->tiket_kembali }}"><br>
</div>
</div>

<div class="form-group">
 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">DPR</label>
 <div class="col-md-6 col-sm-6 col-xs-12">
 <input class="form-control" type="text" name="dpr" value="{{ $bp2a->dpr }}"><br>
</div>
</div>

<div class="form-group">
 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Penginapan</label>
 <div class="col-md-6 col-sm-6 col-xs-12">
 <input class="form-control" type="text" name="penginapan" value="{{ $bp2a->penginapan }}"><br>
</div>
</div>

<div class="form-group">
 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Penginapan Tanpa Bukti</label>
 <div class="col-md-6 col-sm-6 col-xs-12">
 <input class="form-control" type="text" name="penginapan_tanpa_bukti" value="{{ $bp2a->penginapan_tanpa_bukti }}"><br>
</div>
</div>

<div class="form-group">
 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">UH</label>
 <div class="col-md-6 col-sm-6 col-xs-12">
 <input class="form-control" type="text" name="uh" value="{{ $bp2a->uh }}"><br>
</div>
</div>

<div class="form-group">
 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">UHR</label>
 <div class="col-md-6 col-sm-6 col-xs-12">
 <input class="form-control" type="text" name="uhr" value="{{ $bp2a->uhr }}"><br>
</div>
</div>

<div class="form-group">
 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Kekurangan</label>
 <div class="col-md-6 col-sm-6 col-xs-12">
 <input class="form-control" type="text" name="kekurangan" value=""><br>
</div>
</div>

<div class="form-group">
 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Perjalanan Dinas</label>
 <div class="col-md-6 col-sm-6 col-xs-12">
 <input class="form-control" type="text" name="perjalanan_dinas" value=""><br>
</div>
</div>

<div class="form-group">
 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Angkutan Pegawai</label>
 <div class="col-md-6 col-sm-6 col-xs-12">
 <input class="form-control" type="text" name="angkutan_pegawai" value=""><br>
</div>
</div>

<div class="form-group">
 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Angkutan Keluarga</label>
 <div class="col-md-6 col-sm-6 col-xs-12">
 <input class="form-control" type="text" name="angkutan_keluarga" value=""><br>
</div>
</div>

<div class="form-group">
 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Angkutan PRT</label>
 <div class="col-md-6 col-sm-6 col-xs-12">
 <input class="form-control" type="text" name="angkutan_prt" value=""><br>
</div>
</div>

<div class="form-group">
 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Pengepakan</label>
 <div class="col-md-6 col-sm-6 col-xs-12">
 <input class="form-control" type="text" name="pengepakan" value=""><br>
</div>
</div>

<div class="form-group">
 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Angkutan Barang</label>
 <div class="col-md-6 col-sm-6 col-xs-12">
 <input class="form-control" type="text" name="angkutan_barang" value=""><br>
</div>
</div>

<div class="form-group">
 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Uang Harian Tiba</label>
 <div class="col-md-6 col-sm-6 col-xs-12">
 <input class="form-control" type="text" name="uang_harian_tiba" value=""><br>
</div>
</div>

<div class="form-group">
 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Uang Harian Bertolak</label>
 <div class="col-md-6 col-sm-6 col-xs-12">
 <input class="form-control" type="text" name="uang_harian_bertolak" value=""><br>
</div>
</div>

<div class="form-group">
 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Uang Harian Pembantu</label>
 <div class="col-md-6 col-sm-6 col-xs-12">
 <input class="form-control" type="text" name="uang_harian_pembantu" value=""><br>
</div>
</div>

<div class="form-group">
 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Total</label>
 <div class="col-md-6 col-sm-6 col-xs-12">
 <input class="form-control" type="text" name="total" value="{{ $bp2a->total1 }}"><br>
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
