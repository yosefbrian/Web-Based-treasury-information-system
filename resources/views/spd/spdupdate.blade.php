@extends('layouts.app')


@section('content')

<h2> SPD CENTER </h2>
<hr>

<form action="{{ url('admin/listspd/'.$spd->id.'/ubah') }}" method="post" enctype="multipart/form-data">
   <input type="hidden" name="_token" value="{{ csrf_token() }}">


 <!-- Pengiriman:<br>
 <input type="radio" name="pengiriman" value="1" checked> Sudah<br>
  <input type="radio" name="pengiriman" value="0"> Belum<br> -->

  <select id="pengiriman" name="pengiriman" class="form-control selectpicker" title="Pengiriman">
                         <option value="1">Sudah</option>
                          <option value="0">Belum</option>
                         
                        </select>

  <br>

 

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

  <div id="tanggal_pengiriman">
Tanggal:<br>
 <div class="col-xs-2">
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


  <div class="col-xs-2">
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


  <div class="col-xs-2">
  <select name="Tahun_pengiriman" class="form-control">

  @foreach($tahun as $thn)

 <option value="{{$thn}}">{{$thn}}</option>


  @endforeach
  

    </select>
  </div>

<br>
<br>


</div>

  
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


<?php
      
   if(isset($spd->tanggal)) {
       $tanggal=substr($spd->tanggal,0,2);
      }  
      else{$tanggal='01';}

$tgls = array('', '01', '02', '03', '04', '05', '06', '07', '08', '09', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23', '24', '25', '26', '27', '28', '29', '30', '31');    

    foreach($tgls as $Tanggals){
  if($Tanggals == $tanggal){
    $tgls[0]=$tanggal;      
  }
}

?>

  <div id="Tanggal">
Tanggal:<br>
 <div class="col-xs-2">
  <select name="Tanggal" class="form-control" >

@foreach($tgls as $datees)

<option value="{{$datees}}">{{$datees}}</option>

@endforeach
  </select>
  </div>




<?php
      
   if(isset($spd->tanggal)) {
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


  <div class="col-xs-2">
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
      
   if(isset($spd->tanggal)) {
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


  <div class="col-xs-2">
  <select name="Tahun" class="form-control">

  @foreach($tahun2 as $thn2)

 <option value="{{$thn2}}">{{$thn2}}</option>


  @endforeach
  

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