@extends('layouts.app')

@section('content')

<h2>UBAH PASSWORD</h2>

@if(Session::has('flash_message_gagal1'))
<div class="alert alert-danger"><strong>Gagal!</strong> Password baru dan konfirmasi password tidak cocok. <em> {!! session('flash_message') !!}</em></div>
@endif

@if(Session::has('flash_message_gagal2'))
<div class="alert alert-danger"><strong>Gagal!</strong> Password lama yang anda masukkan tidak cocok. <em> {!! session('flash_message') !!}</em></div>
@endif


<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="{{url('/gantipassword/'.$old->id) }}" method="post" enctype="multipart/form-data" style="margin-top:20px">

  <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Password Lama <span class="required">*</span></label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <input type="password" name="password_lama" value="" class="form-control col-md-7 col-xs-12">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Password Baru <span class="required">*</span></label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <input type="password" name="password_baru" value="" class="form-control col-md-7 col-xs-12">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Konfirmasi Password <span class="required">*</span></label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <input type="password" name="konfirmasi_password" value="" class="form-control col-md-7 col-xs-12">
    </div>
  </div>

  <br>

  <div class="ln_solid"></div>
  <div class="form-group">
    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
      <button type="submit" class="btn btn-primary">Batal</button>
      <button type="submit" class="btn btn-success">Simpan</button>
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
    </div>
  </div>

  <!-- <input class="btn btn-success" type="submit" value="Simpan">
   <input class="btn btn-danger" type="submit" value="Batal">
     <input type="hidden" name="_token" value="{{ csrf_token() }}"> -->
</form>

@endsection
