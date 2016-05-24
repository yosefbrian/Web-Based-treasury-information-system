@extends('layouts.app')

@section('content')
<ol class="breadcrumb">
  <li><a href="{{ url('/') }}">Home</a></li>
  <li><a href="{{ url('admin/daftaruser')}}">Daftar User</a></li>
  <li><a href="#">Edit Profil</a></li>
</ol>


<h2>EDIT PROFIL</h2>
<div class="x_title">
</div>

@role(1)
<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="{{url('/editprofil/'.$book->id) }}" method="post" enctype="multipart/form-data" style="margin-top:20px">
@endrole

@role(3)
<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="{{url('/editprofil/'.$book->id) }}" method="post" enctype="multipart/form-data" style="margin-top:20px">
@endrole


<input type="hidden" name="_token" value="{{ csrf_token() }}">
  <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama <span class="required">*</span></label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <input type="text" name="nama" value="{{ $book->nama }}" class="form-control col-md-7 col-xs-12">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">NIP <span class="required">*</span></label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <input type="text" name="nip" value="{{ $book->nip }}" class="form-control col-md-7 col-xs-12">
    </div>
  </div>

  <div class="form-group">
    <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Jabatan*</label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <input type="text" name="jabatan" value="{{ $book->jabatan }}" class="form-control col-md-7 col-xs-12">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12">NPWP <span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <input type="text" name="npwp" value="{{ $book->npwp }}" class="form-control col-md-7 col-xs-12">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis Kelamin <span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <input type="text" name="jenis_kelamin" value="{{ $book->jenis_kelamin }}" class="form-control col-md-7 col-xs-12">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12">Status Pegawai <span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <input type="text" name="nm_status_pegawai" value="{{ $book->nm_status_pegawai}}" class="form-control col-md-7 col-xs-12">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12">Pangkat <span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <input type="text" name="pangkat" value="{{ $book->pangkat }}" class="form-control col-md-7 col-xs-12">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12">Golongan <span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <input type="text" name="jenis_jabatan" value="{{ $book->jenis_jabatan }}" class="form-control col-md-7 col-xs-12">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Kantor/Satker <span class="required" >*</span>
    </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <input type="text" name="unit_organisasi" value="{{ $book->unit_organisasi }}" class="form-control col-md-7 col-xs-12">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12">Jabatan Grade <span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <input type="text" name="jabatan_grade" value="{{ $book->jabatan_grade }}" class="form-control col-md-7 col-xs-12">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Bank <span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <input type="text" name="nama_bank" value="{{ $book->nama_bank }}" class="form-control col-md-7 col-xs-12">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12">No Rekening <span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <input type="text" name="no_rekening" value="{{ $book->no_rekening }}" class="form-control col-md-7 col-xs-12">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Rekening <span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <input type="text" name="nama_rekening" value="{{ $book->nama_rekening }}" class="form-control col-md-7 col-xs-12">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12">Scan Rekening <span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <input type="file" class="btn btn-default btn-file" name="fileToUpload" id="fileToUpload">
    </div>
  </div>

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
