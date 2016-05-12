@extends('layouts.app')


@section('content')
<ol class="breadcrumb">
  <li><a href="{{ url('/') }}">Home</a></li>
  <li><a href="{{ url('admin/spd')}}">Reimbursement</a></li>
  <li><a href="{{ url('admin/spd')}}">SPD Center Admin</a></li>
  <li><a href="#">List SPD</a></li>
  <li><a href="#">Ubah Data</a></li>
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

<h2> UBAH DATA </h2>
<div class="x_title"></div>

<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" style="margin-top:20px">

@role(1)
<!-- <form action="{{ url('admin/listspd/'.$spd->id.'/ubah') }}" method="post" enctype="multipart/form-data">
   <input type="hidden" name="_token" value="{{ csrf_token() }}"> -->

   <form action="{{ url('admin/listspd/'.$spd->id.'/ubah') }}" method="post" enctype="multipart/form-data">
   <input type="hidden" name="_token" value="{{ csrf_token() }}">
@endrole



@role(3)
<form action="{{ url('spd/listspd/'.$spd->id.'/ubah') }}" method="post" enctype="multipart/form-data">
   <input type="hidden" name="_token" value="{{ csrf_token() }}">
@endrole

 <!-- Pengiriman:<br>
 <input type="radio" name="pengiriman" value="1" checked> Sudah<br>
  <input type="radio" name="pengiriman" value="0"> Belum<br> -->


<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Status Pengiriman </label>
  <div class="col-md-6 col-sm-6 col-xs-12">
  <select id="pengiriman" name="pengiriman" class="form-control selectpicker" title="Pengiriman">
                         <option value="1">Sudah</option>
                          <option value="0">Belum</option>

                        </select>
     </div>
</div>


<?php

   if(isset($spd->tanggal_pengiriman)) {
       $tanggal_pengiriman=substr($spd->tanggal_pengiriman,0,2);
      }
      else{$tanggal_pengiriman='01';}

$tgl = array('', '01', '02', '03', '04', '05', '06', '07', '08', '09', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23', '24', '25', '26', '27', '28', '29', '30', '31');

    foreach($tgl as $Tanggal){
  if($Tanggal == $tanggal_pengiriman){
    $tgl[0]=$tanggal_pengiriman;
  }
}

?>
<div class="form-group" style="margin-left:-12px">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tanggal </label>
  <div class="col-md-6 col-sm-6 col-xs-12">
  <div id="tanggal_pengiriman">
           <div class="col-xs-3">
            <select name="Tanggal_pengiriman" class="form-control" >

          @foreach($tgl as $datee)

          <option value="{{$datee}}">{{$datee}}</option>

          @endforeach
            </select>
            </div>


          <?php

             if(isset($spd->tanggal_pengiriman)) {
                 $bulan_pengiriman=substr($spd->tanggal_pengiriman,3,2);
                }
                else{$bulan_pengiriman='01';}



          $boelan = array('01', '02', '03', '04', '05', '06', '07', '08', '09', '10', '11', '12');

              foreach($boelan as $bulan){
            if($bulan == $bulan_pengiriman){
              $boelan[0]=$bulan_pengiriman;
            }
          }


          ?>


            <div class="col-xs-3">
            <select name="Bulan_pengiriman" class="form-control">

            @foreach($boelan as $jaran)
          <?php
            switch ($jaran) {
              case "01":
                  $bul="Januari";
                  break;
              case "02":
                 $bul="Februari";
                  break;
              case "03":
                  $bul="Maret";
                  break;
               case "04":
                  $bul="April";
                  break;
              case "05":
                  $bul="Mei";
                  break;
              case "06":
                  $bul="Juni";
                  break;
              case "07":
                  $bul="Juli";
                  break;
              case "08":
                  $bul="Agustus";
                  break;
              case "09":
                  $bul="September";
                  break;
              case "10":
                  $bul="Oktober";
                  break;
              case "11":
                  $bul="November";
                  break;
              case "12":
                  $bul="Desember";
                  break;
              default:
                  $bul="Bulan";
          }

          ?>


          <option value="{{$jaran}}">{{$bul}}</option>

            @endforeach

            </select>
            </div>

            <?php

             if(isset($spd->tanggal_pengiriman)) {
                 $tahun_pengiriman=substr($spd->tanggal_pengiriman,6,4);
                }
                else{$tahun_pengiriman='2016';}



          $tahun = array('2016', '2017', '2018', '2019', '2020', '2021', '2022', '2023', '2024', '2025', '2026', '2027');

              foreach($tahun as $tahoen){
            if($tahoen == $tahun_pengiriman){
              $tahun[0]=$tahun_pengiriman;
            }
          }


          ?>


            <div class="col-xs-3">
            <select name="Tahun_pengiriman" class="form-control">

            @foreach($tahun as $thn)

           <option value="{{$thn}}">{{$thn}}</option>


            @endforeach


              </select>
            </div>

          <br>
          <br>


    </div>
  </div>
</div>

<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" style="margin-top:20px">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
  <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nomor PD </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
  <input class="form-control" type="text" name="no_pd" value="{{ $spd->no_pd }}">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nomor ST </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
  <input class="form-control" type="text" name="no_st" value="{{ $spd->no_st }}">
</div>
</div>
<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">NIP </label>
  <div class="col-md-6 col-sm-6 col-xs-12">
  <input class="form-control" type="text" name="nip" value="{{ $spd->nip }}">
</div>
</div>
<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama Lengkap </label>
  <div class="col-md-6 col-sm-6 col-xs-12">
  <input class="form-control" type="text" name="nama" value="{{ $spd->nama }}">
</div>
</div>
<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Berangkat </label>
  <div class="col-md-6 col-sm-6 col-xs-12">
  <input class="form-control" type="text" name="berangkat" value="{{ $spd->berangkat }}">
</div>
</div>
<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tujuan </label>
  <div class="col-md-6 col-sm-6 col-xs-12">
  <input class="form-control" type="text" name="tujuan" value="{{ $spd->tujuan }}">
</div>
</div>
<div class="form-group" style="margin-left:-10px">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tanggal Berangkat </label>
  <div class="col-md-6 col-sm-6 col-xs-12">
<?php

   if(isset($spd->tanggal_berangkat)) {
       $tanggal=substr($spd->tanggal,0,2);
      }
      else{$tanggal='01';}

$tgls = array('01', '02', '03', '04', '05', '06', '07', '08', '09', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23', '24', '25', '26', '27', '28', '29', '30', '31');

    foreach($tgls as $Tanggals){
  if($Tanggals == $tanggal){
    $tgls[0]=$tanggal;
  }
}

?>

  <div id="Tanggal">
 <div class="col-xs-3">
  <select name="Tanggal" class="form-control" >

@foreach($tgls as $datees)

<option value="{{$datees}}">{{$datees}}</option>

@endforeach
  </select>
  </div>




<?php

   if(isset($spd->tanggal_berangkat)) {
       $bulan2=substr($spd->tanggal,3,2);
      }
      else{$bulan2='01';}



$boelan2 = array('01', '02', '03', '04', '05', '06', '07', '08', '09', '10', '11', '12');

    foreach($boelan2 as $bulans2){
  if($bulans2 == $bulan2){
    $boelan2[0]=$bulan2;
  }
}


?>


  <div class="col-xs-3">
  <select name="Bulan" class="form-control">

  @foreach($boelan2 as $jaran2)
<?php
  switch ($jaran2) {
    case "01":
        $bul2="Januari";
        break;
    case "02":
       $bul2="Februari";
        break;
    case "03":
        $bul2="Maret";
        break;
     case "04":
        $bul2="April";
        break;
    case "05":
        $bul2="Mei";
        break;
    case "06":
        $bul2="Juni";
        break;
    case "07":
        $bul2="Juli";
        break;
    case "08":
        $bul2="Agustus";
        break;
    case "09":
        $bul2="September";
        break;
    case "10":
        $bul2="Oktober";
        break;
    case "11":
        $bul2="November";
        break;
    case "12":
        $bul2="Desember";
        break;
    default:
        $bul2="Bulan";
}

?>


<option value="{{$jaran2}}">{{$bul2}}</option>

  @endforeach

  </select>
  </div>



  <?php

   if(isset($spd->tanggal_berangkat)) {
       $tahun_pengiriman2=substr($spd->tanggal,6,4);
      }
      else{$tahun_pengiriman='2016';}



$tahun2 = array('2016', '2017', '2018', '2019', '2020', '2021', '2022', '2023', '2024', '2025', '2026', '2027');

    foreach($tahun2 as $tahoen2){
  if($tahoen2 == $tahun_pengiriman2){
    $tahun2[0]=$tahun_pengiriman2;
  }
}


?>


  <div class="col-xs-3">
  <select name="Tahun" class="form-control">

  @foreach($tahun2 as $thn2)

 <option value="{{$thn2}}">{{$thn2}}</option>


  @endforeach


    </select>
  </div>
</div>
</div>
</div>



<!-- Tanggal Pulang -->


<div class="form-group" style="margin-left:-10px">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tanggal Pulang :</label>
  <div class="col-md-6 col-sm-6 col-xs-12">
<?php

   if(isset($spd->tanggal_pulang)) {
       $tanggal_pulang=substr($spd->tanggal_pulang,0,2);
      }
      else{$tanggal_pulang='01';}

$tgls_pulang = array('', '01', '02', '03', '04', '05', '06', '07', '08', '09', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23', '24', '25', '26', '27', '28', '29', '30', '31');

    foreach($tgls_pulang as $Tanggals_pulang){
  if($Tanggals_pulang == $tanggal_pulang){
    $tgls_pulang[0]=$tanggal_pulang;
  }
}

?>

  <div id="Tanggal">
 <div class="col-xs-3">
  <select name="Tanggal_pulang" class="form-control" >

@foreach($tgls_pulang as $datees_pulang)

<option value="{{$datees_pulang}}">{{$datees_pulang}}</option>

@endforeach
  </select>
  </div>




<?php

   if(isset($spd->tanggal_pulang)) {
       $bulan2_pulang=substr($spd->tanggal_pulang,3,2);
      }
      else{$bulan2_pulang='01';}



$boelan2_pulang = array('01', '02', '03', '04', '05', '06', '07', '08', '09', '10', '11', '12');

    foreach($boelan2_pulang as $bulans2_pulang){
  if($bulans2_pulang == $bulan2_pulang){
    $boelan2_pulang[0]=$bulan2_pulang;
  }
}


?>


  <div class="col-xs-3">
  <select name="Bulan_pulang" class="form-control">

  @foreach($boelan2_pulang as $jaran2_pulang)
<?php
  switch ($jaran2_pulang) {
    case "01":
        $bul2_pulang="Januari";
        break;
    case "02":
       $bul2_pulang="Februari";
        break;
    case "03":
        $bul2_pulang="Maret";
        break;
     case "04":
        $bul2_pulang="April";
        break;
    case "05":
        $bul2_pulang="Mei";
        break;
    case "06":
        $bul2_pulang="Juni";
        break;
    case "07":
        $bul2_pulang="Juli";
        break;
    case "08":
        $bul2_pulang="Agustus";
        break;
    case "09":
        $bul2_pulang="September";
        break;
    case "10":
        $bul2_pulang="Oktober";
        break;
    case "11":
        $bul2_pulang="November";
        break;
    case "12":
        $bul2_pulang="Desember";
        break;
    default:
        $bul2_pulang="Bulan";
}

?>


<option value="{{$jaran2_pulang}}">{{$bul2_pulang}}</option>

  @endforeach

  </select>
  </div>



  <?php

   if(isset($spd->tanggal_pulang)) {
       $tahun_pengiriman2_pulang=substr($spd->tanggal_pulang,6,4);
      }
      else{$tahun_pengiriman_pulang='2016';}



$tahun2_pulang = array('2016', '2017', '2018', '2019', '2020', '2021', '2022', '2023', '2024', '2025', '2026', '2027');

    foreach($tahun2_pulang as $tahoen2_pulang){
  if($tahoen2_pulang == $tahun_pengiriman2_pulang){
    $tahun2_pulang[0]=$tahun_pengiriman2_pulang;
  }
}


?>


  <div class="col-xs-3">
  <select name="Tahun_pulang" class="form-control">

  @foreach($tahun2_pulang as $thn2_pulang)

 <option value="{{$thn2_pulang}}">{{$thn2_pulang}}</option>


  @endforeach


    </select>
  </div>
</div>
</div>
</div>


<!-- Tanggal Pulang -->




  <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Kegiatan </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
  <input class="form-control" type="text" name="kegiatan" value="{{ $spd->kegiatan }}">
</div>
</div>
<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Keterangan </label>
  <div class="col-md-6 col-sm-6 col-xs-12">
  <input class="form-control" type="text" name="keterangan" value="{{ $spd->keterangan }}">
</div>
</div>
<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama PPK </label>
  <div class="col-md-6 col-sm-6 col-xs-12">
  <input class="form-control" type="text" name="nama_ppk" value="{{ $spd->nama_ppk }}">
</div>
</div>

<div class="ln_solid"></div>
<div class="form-group">
  <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
    <button type="submit" class="btn btn-success">Simpan</button>
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
  </div>
</div>

  <!-- <input class="btn btn-success" type="submit" value="Simpan"> -->

     <!-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> -->
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
