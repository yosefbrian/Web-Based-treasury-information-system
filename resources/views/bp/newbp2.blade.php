@extends('layouts.app')

@section('content')



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

  
  Total1 :<br>
  <input class="form-control" type="text" name="total1"><br>  


  <input class="btn btn-success" type="submit" value="Simpan">
   <input class="btn btn-danger" type="submit" value="Batal">
     <input type="hidden" name="_token" value="{{ csrf_token() }}">
</form> 

@endsection