@extends('layouts.app')


@section('content')

<form action="#" method="post" enctype="multipart/form-data">
   <input type="hidden" name="_token" value="{{ csrf_token() }}">
  Checklist:<br>
  <input class="form-control" type="text" name="checklist" value=""><br>
  no_PD:<br>
  <input class="form-control" type="text" name="no_pd" value=""><br>
  no_ST:<br>
  <input class="form-control" type="text" name="no_st" value=""><br>
  NIP:<br>
  <input class="form-control" type="text" name="nip" value="{{ $profil->nip }}"><br>

  Nama Lengkap:<br>
  <input class="form-control" type="text" name="nama" value="{{ $profil->nama }}"><br>
  
  Berangkat:<br>
  <input class="form-control" type="text" name="berangkat" value=""><br>

  Tujuan:<br>
  <input class="form-control" type="text" name="tujuan" value=""><br>

  Tanggal:<br>
  <input class="form-control" type="text" name="tanggal" value=""><br>

  Kegiatan:<br>
  <input class="form-control" type="text" name="kegiatan" value=""><br>
  
  Keterangan:<br>
  <input class="form-control" type="text" name="keterangan" value=""><br>

  Nama PPK:<br>
  <input class="form-control" type="text" name="nama_ppk" value=""><br>

  <input class="btn btn-success" type="submit" value="Simpan">
   <input class="btn btn-danger" type="submit" value="Batal">
     <input type="hidden" name="_token" value="{{ csrf_token() }}">
</form> 


@endsection