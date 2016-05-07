@extends('layouts.app')


@section('content')
<ol class="breadcrumb">
  <li><a href="{{ url('/') }}">Home</a></li>
  <li><a href="#">Reimbursement</a></li>
</ol>

<style type="text/css">

    table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #4CAF50;
    color: white;
}
</style>

<h2> SPD CENTER </h2>
<hr>

@role(1)
<form action="{{ action('SPDController@create') }}" method="post" enctype="multipart/form-data">
   <input type="hidden" name="_token" value="{{ csrf_token() }}">
@endrole



@role(3)
<form action="{{ url('spd/spd') }}" method="post" enctype="multipart/form-data">
   <input type="hidden" name="_token" value="{{ csrf_token() }}">
@endrole

 <!-- Pengiriman:<br>
 <input type="radio" name="pengiriman" id="pengiriman" value="1" checked> Sudah<br>
  <input type="radio" name="pengiriman" id="pengiriman" value="0"> Belum<br>

  <br> -->


 <select id="pengiriman" name="pengiriman" class="form-control selectpicker" title="Pengiriman">
                         <option value="1">Sudah</option>
                          <option value="0">Belum</option>

                        </select>


<br>
<div id="tanggal_pengiriman">

Tanggal:<br>
 <div class="col-xs-2">
  <select name="Tanggal_pengiriman" class="form-control">
    <option> - Hari - </option>
    <option value="01">1</option>
    <option value="02">2</option>
    <option value="03">3</option>
    <option value="04">4</option>
    <option value="05">5</option>
    <option value="06">6</option>
    <option value="07">7</option>
    <option value="08">8</option>
    <option value="09">9</option>
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
  <select name="Bulan_pengiriman" class="form-control">
    <option> - Bulan - </option>
    <option value="01">Januari</option>
    <option value="02">Februari</option>
    <option value="03">Maret</option>
    <option value="04">April</option>
    <option value="05">Mei</option>
    <option value="06">Juni</option>
    <option value="07">Juli</option>
    <option value="08">Agustus</option>
    <option value="09">September</option>
    <option value="10">Oktober</option>
    <option value="11">November</option>
    <option value="12">Desember</option>
  </select>
  </div>

  <div class="col-xs-2">
  <select name="Tahun_pengiriman" class="form-control">
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


</div>


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
 <div class="col-xs-2">
  <select name="Tanggal" class="form-control">
    <option> - Hari - </option>
    <option value="01">1</option>
    <option value="02">2</option>
    <option value="03">3</option>
    <option value="04">4</option>
    <option value="05">5</option>
    <option value="06">6</option>
    <option value="07">7</option>
    <option value="08">8</option>
    <option value="09">9</option>
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
    <option value="01">Januari</option>
    <option value="02">Februari</option>
    <option value="03">Maret</option>
    <option value="04">April</option>
    <option value="05">Mei</option>
    <option value="06">Juni</option>
    <option value="07">Juli</option>
    <option value="08">Agustus</option>
    <option value="09">September</option>
    <option value="10">Oktober</option>
    <option value="11">November</option>
    <option value="12">Desember</option>
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
  <input class="form-control" type="text" name="kegiatan" value=""><br>

  Keterangan:<br>
  <input class="form-control" type="text" name="keterangan" value=""><br>

  Nama PPK:<br>
  <input class="form-control" type="text" name="nama_ppk" value=""><br>

  <input class="btn btn-success" type="submit" value="Simpan">
   <input class="btn btn-danger" type="submit" value="Batal">
     <input type="hidden" name="_token" value="{{ csrf_token() }}">
</form>


<script type="text/javascript">


$('#pengiriman').on('change', function() {
      if($(this).val() == "0") {
        $('#tanggal_pengiriman').hide();
      }

      else{
         $('#tanggal_pengiriman').show();
      }

    })

</script>

@endsection
