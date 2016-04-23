@extends('layouts.app')

@section('content')



 <form action="{{url('/admin/bp1/edit/'.$bp1->id) }}" method="post" enctype="multipart/form-data">
   <input type="hidden" name="_token" value="{{ csrf_token() }}">
  No PP:<br>
  <input class="form-control" type="text" name="no_pp" ><br>
   No PD:<br>
  <input class="form-control" type="text" name="no_pd" value="{{ $bp1->no_pd }}" ><br>
  Nama:<br>
  <input class="form-control" type="text" name="nama" value="{{ $bp1->nama }}"><br>
  NIP:<br>
  <input class="form-control" type="text" name="nip" value="{{ $bp1->nip }}"><br>


 Pencairan : <br><br>

  <input type="radio" name="pencairan" value="2"> Cair, Dana Ditransfer<br>

  <input type="radio" name="pencairan" value="1" checked> Cair, Dana Tersedia<br>

  <input type="radio" name="pencairan" value="0"> Batal<br><br>


  Nama PPK:<br>
  <input class="form-control" type="text" name="nama_ppk" value="{{ $bp1->nama_ppk }}"><br>
  Keterangan:<br>
  <input class="form-control" type="text" name="keterangan" value=""><br>



  <input class="btn btn-success" type="submit" value="Simpan">
   <input class="btn btn-danger" type="submit" value="Batal">
     <input type="hidden" name="_token" value="{{ csrf_token() }}">
</form> 

@endsection