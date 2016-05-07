@extends('layouts.app')

@section('content')

<ol class="breadcrumb">
  <li><a href="{{ url('/') }}">Home</a></li>
  <li><a href="#">Lihat Profil</a></li>
</ol>

@foreach ($profil as $profile)
 <h2>LIHAT PROFIL
   <a href="{!! url('editprofil/'.$profile->id) !!}" type="button" class="btn btn-warning btn-simple pull-right" style="float:right; margin-top:-5px"><i class="fa fa-pencil" style="margin-right:10px"></i>Edit Profil</a>
</h2>

 <div class="x_title">
 </div>

 @if(Session::has('flash_message'))
     <div class="alert alert-success"><strong>Sukses!</strong> Anda berhasil mengubah profil.<em> {!! session('flash_message') !!}</em></div>
 @endif
 <script type="text/javascript">
 $('div.alert').delay(5000).slideUp(300);
 </script>

 <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" style="margin-top:20px">
 <input type="hidden" name="_token" value="{{ csrf_token() }}">
   <div class="form-group">
     <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama </label>
     <div class="col-md-6 col-sm-6 col-xs-12">
       <input type="text" name="nama" value="{{ $profile->nama }}" class="form-control col-md-7 col-xs-12" disabled="disabled">
     </div>
   </div>

   <div class="form-group">
     <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">NIP </label>
     <div class="col-md-6 col-sm-6 col-xs-12">
       <input type="text" name="nip" value="{{ $profile->nip }}" class="form-control col-md-7 col-xs-12"disabled="disabled">
     </div>
   </div>

   <div class="form-group">
     <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Jabatan</label>
     <div class="col-md-6 col-sm-6 col-xs-12">
       <input type="text" name="jabatan" value="{{ $profile->jabatan }}" class="form-control col-md-7 col-xs-12"disabled="disabled">
     </div>
   </div>

   <div class="form-group">
     <label class="control-label col-md-3 col-sm-3 col-xs-12">NPWP
     </label>
     <div class="col-md-6 col-sm-6 col-xs-12">
       <input type="text" name="npwp" value="{{ $profile->npwp }}" class="form-control col-md-7 col-xs-12"disabled="disabled">
     </div>
   </div>

   <div class="form-group">
     <label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis Kelamin
     </label>
     <div class="col-md-6 col-sm-6 col-xs-12">
       <input type="text" name="jenis_kelamin" value="{{ $profile->jenis_kelamin }}" class="form-control col-md-7 col-xs-12"disabled="disabled">
     </div>
   </div>

   <div class="form-group">
     <label class="control-label col-md-3 col-sm-3 col-xs-12">Nm Status Pegawai
     </label>
     <div class="col-md-6 col-sm-6 col-xs-12">
       <input type="text" name="nm_status_pegawai" value="{{ $profile->nm_status_pegawai}}" class="form-control col-md-7 col-xs-12"disabled="disabled">
     </div>
   </div>

   <div class="form-group">
     <label class="control-label col-md-3 col-sm-3 col-xs-12">Pangkat
     </label>
     <div class="col-md-6 col-sm-6 col-xs-12">
       <input type="text" name="pangkat" value="{{ $profile->pangkat }}" class="form-control col-md-7 col-xs-12"disabled="disabled">
     </div>
   </div>

   <div class="form-group">
     <label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis Jabatan
     </label>
     <div class="col-md-6 col-sm-6 col-xs-12">
       <input type="text" name="jenis_jabatan" value=" {{ $profile->jenis_kelamin }}" class="form-control col-md-7 col-xs-12"disabled="disabled">
     </div>
   </div>

   <div class="form-group">
     <label class="control-label col-md-3 col-sm-3 col-xs-12">Unit Organisasi
     </label>
     <div class="col-md-6 col-sm-6 col-xs-12">
       <input type="text" name="unit_organisasi" value="{{ $profile->unit_organisasi }}" class="form-control col-md-7 col-xs-12"disabled="disabled">
     </div>
   </div>

   <div class="form-group">
     <label class="control-label col-md-3 col-sm-3 col-xs-12">Jabatan Grade
     </label>
     <div class="col-md-6 col-sm-6 col-xs-12">
       <input type="text" name="jabatan_grade" value="{{ $profile->jabatan_grade }}" class="form-control col-md-7 col-xs-12"disabled="disabled">
     </div>
   </div>

   <div class="form-group">
     <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Bank
     </label>
     <div class="col-md-6 col-sm-6 col-xs-12">
       <input type="text" name="nama_bank" value="{{ $profile->nama_bank }}" class="form-control col-md-7 col-xs-12"disabled="disabled">
     </div>
   </div>

   <div class="form-group">
     <label class="control-label col-md-3 col-sm-3 col-xs-12">No Rekening
     </label>
     <div class="col-md-6 col-sm-6 col-xs-12">
       <input type="text" name="no_rekening" value="{{ $profile->no_rekening }}" class="form-control col-md-7 col-xs-12"disabled="disabled">
     </div>
   </div>

   <div class="form-group">
     <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Rekening
     </label>
     <div class="col-md-6 col-sm-6 col-xs-12">
       <input type="text" name="nama_rekening" value="{{ $profile->nama_rekening }}" class="form-control col-md-7 col-xs-12"disabled="disabled">
     </div>
   </div>

@if($profile->filename != '')
   <div class="form-group">
     <label class="control-label col-md-3 col-sm-3 col-xs-12">Scan Rekening
     </label>
     <div class="col-md-6 col-sm-6 col-xs-12">
       <a href="/upload/rekening/<?php echo $profile->filename;?>"> Scan Rekening</a>
     </div>
   </div>


   @endif
   @endforeach

 </form>


@endsection
