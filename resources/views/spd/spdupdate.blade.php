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
  <div class="col-xs-2">
  <select name="Tanggal" class="form-control">
    <option> - Hari - </option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option>
    <option value="11">11</option>
    <option value="12">12</option>
    <option value="13">13</option>
    <option value="14">14</option>
    <option value="15">15</option>
    <option value="16">16</option>
    <option value="17">17</option>
    <option value="18">18</option>
    <option value="19">19</option>
    <option value="20">20</option>
    <option value="21">21</option>
    <option value="22">22</option>
    <option value="23">23</option>
    <option value="24">24</option>
    <option value="25">25</option>
    <option value="26">26</option>
    <option value="27">27</option>
    <option value="28">28</option>
    <option value="29">29</option>
    <option value="30">30</option>
    <option value="31">31</option>
  </select>
  </div>

  <div class="col-xs-2">
  <select name="Bulan" class="form-control">
    <option> - Bulan - </option>
    <option value="Januari">Januari</option>
    <option value="Februari">Februari</option>
    <option value="Maret">Maret</option>
    <option value="April">April</option>
    <option value="Mei">Mei</option>
    <option value="Juni">Juni</option>
    <option value="Juli">Juli</option>
    <option value="Agustus">Agustus</option>
    <option value="September">September</option>
    <option value="Oktober">Oktober</option>
    <option value="November">November</option>
    <option value="Desember">Desember</option>
  </select>
  </div>

  <div class="col-xs-2">
  <select name="Tahun" class="form-control">
    <option> - Tahun - </option>
    <option value="2016">2016</option>
    <option value="2017">2017</option>
    <option value="2018">2018</option>
    <option value="2019">2019</option>
    <option value="2020">2020</option>
    <option value="2021">2021</option>
    <option value="2022">2022</option>
    <option value="2023">2023</option>
    <option value="2024">2024</option>
    <option value="2025">2025</option>                            
  </select>
  </div>

  <br>
  <br>

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