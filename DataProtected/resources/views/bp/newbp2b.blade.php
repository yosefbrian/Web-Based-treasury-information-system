@extends('layouts.app')

@section('content')


@role(1)

 <form action="{{url('/admin/bp2b/edit/'.$bp2b->id) }}" method="post" enctype="multipart/form-data">
   <input type="hidden" name="_token" value="{{ csrf_token() }}">
 

 
<input class="form-control" type="hidden" name="no_spd" value="{{ $bp2b->no_pd }}"><br>
  <input class="form-control" type="hidden" name="spd_id" value="{{ $bp2b->id }}"><br>

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
      
  total2:<br>
  <input class="form-control" type="text" name="total2"><br>


  <input class="btn btn-success" type="submit" value="Simpan">
   <input class="btn btn-danger" type="submit" value="Batal">
     <input type="hidden" name="_token" value="{{ csrf_token() }}">
</form> 

@endrole

@role(5)

 <form action="{{url('/bp2/bp2b/edit/'.$bp2b->id) }}" method="post" enctype="multipart/form-data">
   <input type="hidden" name="_token" value="{{ csrf_token() }}">
 

 
<input class="form-control" type="hidden" name="no_spd" value="{{ $bp2b->no_pd }}"><br>
  <input class="form-control" type="hidden" name="spd_id" value="{{ $bp2b->id }}"><br>

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
      
  total2:<br>
  <input class="form-control" type="text" name="total2"><br>


  <input class="btn btn-success" type="submit" value="Simpan">
   <input class="btn btn-danger" type="submit" value="Batal">
     <input type="hidden" name="_token" value="{{ csrf_token() }}">
</form> 

@endrole

@endsection