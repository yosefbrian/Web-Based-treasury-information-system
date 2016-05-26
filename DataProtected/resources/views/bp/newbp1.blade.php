@extends('layouts.app')

@section('content')
<ol class="breadcrumb">
  <li><a href="{{ url('/') }}">Home</a></li>
  <li><a href="{{ url('admin/bp1')}}">Reimbursement</a></li>
  <li><a href="{{ url('admin/bp1')}}">Bendahara Pengeluaran</a></li>
  <li><a href="#">Isi data BP1</a></li>
</ol>

<h2>ISI DATA BP 1</h2>
<div class="x_title">
</div>

@role(1)
<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="{{url('/admin/bp1/edit/'.$bp1->id) }}" method="post" enctype="multipart/form-data" style="margin-top:20px">
@endrole

@role(2)
<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="{{url('/bp/bp1/edit/'.$bp1->id) }}" method="post" enctype="multipart/form-data" style="margin-top:20px">
@endrole

   <input type="hidden" name="_token" value="{{ csrf_token() }}">

  <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">No SPP/SPM </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <input type="text" name="no_pp" value="" class="form-control col-md-7 col-xs-12">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">No PD </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <input type="text" name="no_pd" value="{{ $bp1->no_pd }}" class="form-control col-md-7 col-xs-12">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <input type="text" name="nama" value="{{ $bp1->nama }}" class="form-control col-md-7 col-xs-12">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">NIP </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <input type="text" name="nip" value="{{ $bp1->nip }}" class="form-control col-md-7 col-xs-12">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Pencairan </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <input type="radio" name="pencairan" value="2"> Cair, Dana Ditransfer<br>
      <input type="radio" name="pencairan" value="1" checked> Cair, Dana Tersedia<br>
      <input type="radio" name="pencairan" value="0"> Batal<br><br>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama PPK </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <input type="text" name="nama_ppk" value="{{ $bp1->nama_ppk }}" class="form-control col-md-7 col-xs-12">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Keterangan </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <input type="text" name="keterangan" value="" class="form-control col-md-7 col-xs-12">
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
