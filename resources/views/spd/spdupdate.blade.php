@extends('layouts.app')


@section('content')

<h2> SPD CENTER </h2>
<hr>

<form action="{{ url('admin/listspd/'.$spd->id.'/ubah') }}" method="post" enctype="multipart/form-data">
   <input type="hidden" name="_token" value="{{ csrf_token() }}">


 Pengiriman:<br>
 <input type="radio" name="pengiriman" value="1" checked> Sudah<br>
  <input type="radio" name="pengiriman" value="0"> Belum<br>

  <br>
  no_PD:<br>
  <input class="form-control" type="text" name="no_pd" value="{{ $spd->no_pd }}"><br>
  no_ST:<br>
  <input class="form-control" type="text" name="no_st" value="{{ $spd->no_st }}"><br>
  NIP:<br>
  <input class="form-control" type="text" name="nip" value="{{ $spd->nip }}"><br>

  Nama Lengkap:<br>
  <input class="form-control" type="text" name="nama" value="{{ $spd->nama }}"><br>
  
  Berangkat:<br>
  <input class="form-control" type="text" name="berangkat" value="{{ $spd->berangkat }}"><br>

  Tujuan:<br>
  <input class="form-control" type="text" name="tujuan" value="{{ $spd->tujuan }}"><br>

  Tanggal:<br>
  <input class="form-control" type="text" name="tanggal" value="{{ $spd->tanggal }}"><br>

  Kegiatan:<br>
  <input class="form-control" type="text" name="kegiatan" value="{{ $spd->kegiatan }}"><br>
  
  Keterangan:<br>
  <input class="form-control" type="text" name="keterangan" value="{{ $spd->keterangan }}"><br>

  Nama PPK:<br>
  <input class="form-control" type="text" name="nama_ppk" value="{{ $spd->nama_ppk }}"><br>

  <input class="btn btn-success" type="submit" value="Simpan">
   <input class="btn btn-danger" type="submit" value="Batal">
     <input type="hidden" name="_token" value="{{ csrf_token() }}">
</form> 


@endsection