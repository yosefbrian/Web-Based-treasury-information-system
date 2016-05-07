@extends('layouts.app')

@section('content')



@role(1)
 <form action="{{url('/admin/bp2a/edit/'.$bp2a->id) }}" method="post" enctype="multipart/form-data">
   <input type="hidden" name="_token" value="{{ csrf_token() }}">
 

  
  <input class="form-control" type="hidden" name="no_spd" value="{{ $bp2a->no_pd }}"><br>

  No PP:<br>
  <input class="form-control" type="text" name="no_pp" ><br>

  No SPP/SPM:<br>
  <input class="form-control" type="text" name="no_spp" ><br>

  <input class="form-control" type="hidden" name="spd_id" value="{{ $bp2a->id }}"><br>
  
  Tanggal SPP/SPM:<br>
  <input class="form-control" type="text" name="tanggal_spp"  ><br>
  
  Tiket Berangkat:<br>
  <input class="form-control" type="text" name="tiket_berangkat" ><br>
  
  Tiket Kembali:<br>
  <input class="form-control" type="text" name="tiket_kembali"><br>
  
  DPR:<br>
  <input class="form-control" type="text" name="dpr"><br>
  
  Penginapan:<br>
  <input class="form-control" type="text" name="penginapan"><br>
  
  Penginapan Tanpa Bukti:<br>
  <input class="form-control" type="text" name="penginapan_tanpa_bukti"><br>
  
  UH:<br>
  <input class="form-control" type="text" name="uh"><br>
      
  UHR:<br>
  <input class="form-control" type="text" name="uhr"><br>

  Kekurangan :<br>
  <input class="form-control" type="text" name="kekurangan"><br>


<!-- part2 -->

 Perjalanan Dinas:<br>
  <input class="form-control" type="text" name="perjalanan_dinas" ><br>

  Angkutan Pegawai:<br>
  <input class="form-control" type="text" name="angkutan_pegawai" ><br>
  
  Angkutan Keluarga:<br>
  <input class="form-control" type="text" name="angkutan_keluarga"  ><br>
  
  Angkutan PRT:<br>
  <input class="form-control" type="text" name="angkutan_prt" ><br>
  
  Pengepakan:<br>
  <input class="form-control" type="text" name="pengepakan"><br>
  
  Angkutan Barang:<br>
  <input class="form-control" type="text" name="angkutan_barang"><br>
  
  Uang Harian Tiba:<br>
  <input class="form-control" type="text" name="uang_harian_tiba"><br>
  
 Uang Harian Bertolak:<br>
  <input class="form-control" type="text" name="uang_harian_bertolak"><br>
  
  Uang Harian Pembantu:<br>
  <input class="form-control" type="text" name="uang_harian_pembantu"><br>



  
  Total :<br>
  <input class="form-control" type="text" name="total"><br>  


  <input class="btn btn-success" type="submit" value="Simpan">
   <input class="btn btn-danger" type="submit" value="Batal">
     <input type="hidden" name="_token" value="{{ csrf_token() }}">
</form> 

@endrole



@role(2)
 <form action="{{url('/admin/bp2a/edit/'.$bp2a->id) }}" method="post" enctype="multipart/form-data">
   <input type="hidden" name="_token" value="{{ csrf_token() }}">
 

  
  <input class="form-control" type="hidden" name="no_spd" value="{{ $bp2a->no_pd }}"><br>

  No PP:<br>
  <input class="form-control" type="text" name="no_pp" ><br>

  No SPP/SPM:<br>
  <input class="form-control" type="text" name="no_spp" ><br>

  <input class="form-control" type="hidden" name="spd_id" value="{{ $bp2a->id }}"><br>
  
  Tanggal SPP/SPM:<br>
  <input class="form-control" type="text" name="tanggal_spp"  ><br>
  
  Tiket Berangkat:<br>
  <input class="form-control" type="text" name="tiket_berangkat" ><br>
  
  Tiket Kembali:<br>
  <input class="form-control" type="text" name="tiket_kembali"><br>
  
  DPR:<br>
  <input class="form-control" type="text" name="dpr"><br>
  
  Penginapan:<br>
  <input class="form-control" type="text" name="penginapan"><br>
  
  Penginapan Tanpa Bukti:<br>
  <input class="form-control" type="text" name="penginapan_tanpa_bukti"><br>
  
  UH:<br>
  <input class="form-control" type="text" name="uh"><br>
      
  UHR:<br>
  <input class="form-control" type="text" name="uhr"><br>

  Kekurangan :<br>
  <input class="form-control" type="text" name="kekurangan"><br>


<!-- part2 -->

 Perjalanan Dinas:<br>
  <input class="form-control" type="text" name="perjalanan_dinas" ><br>

  Angkutan Pegawai:<br>
  <input class="form-control" type="text" name="angkutan_pegawai" ><br>
  
  Angkutan Keluarga:<br>
  <input class="form-control" type="text" name="angkutan_keluarga"  ><br>
  
  Angkutan PRT:<br>
  <input class="form-control" type="text" name="angkutan_prt" ><br>
  
  Pengepakan:<br>
  <input class="form-control" type="text" name="pengepakan"><br>
  
  Angkutan Barang:<br>
  <input class="form-control" type="text" name="angkutan_barang"><br>
  
  Uang Harian Tiba:<br>
  <input class="form-control" type="text" name="uang_harian_tiba"><br>
  
 Uang Harian Bertolak:<br>
  <input class="form-control" type="text" name="uang_harian_bertolak"><br>
  
  Uang Harian Pembantu:<br>
  <input class="form-control" type="text" name="uang_harian_pembantu"><br>



  
  Total :<br>
  <input class="form-control" type="text" name="total"><br>  


  <input class="btn btn-success" type="submit" value="Simpan">
   <input class="btn btn-danger" type="submit" value="Batal">
     <input type="hidden" name="_token" value="{{ csrf_token() }}">
</form> 

@endrole


@endsection