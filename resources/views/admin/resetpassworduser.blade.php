@extends('layouts.app')

@section('content')
<ol class="breadcrumb">
  <li><a href="{{ url('/') }}">Home</a></li>
  <li><a href="{{ url('admin/daftaruser')}}">Daftar User</a></li>
  <li><a href="#">Edit Password</a></li>
</ol>


<h2>EDIT PASSWORD</h2>
<div class="x_title">
</div>


<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="{{url('admin/gantipassworduser/'.$user->id) }}" method="post" enctype="multipart/form-data" style="margin-top:20px">
 <form action="" method="post" enctype="multipart/form-data">
   <input type="hidden" name="_token" value="{{ csrf_token() }}">

  <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Password Baru <span class="required">*</span></label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <input type="text" name="password_baru" value="" class="form-control col-md-7 col-xs-12">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Konfirmasi Password <span class="required">*</span></label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <input type="text" name="konfirmasi_password" value="" class="form-control col-md-7 col-xs-12">
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

</form>

@endsection
