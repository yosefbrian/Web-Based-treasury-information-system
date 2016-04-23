@extends('layouts.app')

@section('content')

 <form action="{{url('/editprofil/'.$book->id) }}" method="post" enctype="multipart/form-data">
   <input type="hidden" name="_token" value="{{ csrf_token() }}">
  Nama:<br>
  <input class="form-control" type="text" name="nama" value="{{ $book->nama }}"><br>
  NIP:<br>
  <input class="form-control" type="text" name="nip" value="{{ $book->nip }}"><br>
  jabatan:<br>
  <input class="form-control" type="text" name="jabatan" value="{{ $book->jabatan }}"><br>
  NPWP:<br>
  <input class="form-control" type="text" name="npwp" value="{{ $book->npwp }}"><br>
	Jenis Kelamin:<br>
  <input class="form-control" type="text" name="jenis_kelamin" value="{{ $book->jenis_kelamin }}"><br>
  Nm Status Pegawai:<br>
  <input class="form-control" type="text" name="nm_status_pegawai" value="{{ $book->nm_status_pegawai}}"><br>
  Pangkat:<br>
  <input class="form-control" type="text" name="pangkat" value="{{ $book->pangkat }}"><br>
  Jenis Jabatan:<br>
  <input class="form-control" type="text" name="jenis_jabatan" value="{{ $book->jenis_jabatan }}"><br>
	Unit Organisasi:<br>
  <input class="form-control" type="text" name="unit_organisasi" value="{{ $book->unit_organisasi }}"><br>
  Jabatan Grade:<br>
  <input class="form-control" type="text" name="jabatan_grade" value="{{ $book->jabatan_grade }}"><br>
	Nama Bank:<br>
  <input class="form-control" type="text" name="nama_bank" value="{{ $book->nama_bank }}"><br>
  No Rekening:<br>
  <input class="form-control" type="text" name="no_rekening" value="{{ $book->no_rekening }}"><br>
  	Nama Rekening:<br>
  <input class="form-control" type="text" name="nama_rekening" value="{{ $book->nama_rekening }}"><br>
  Scan Rekening:<br>

        <input type="file" class="btn btn-default btn-file" name="fileToUpload" id="fileToUpload" />


  <br>

  <input class="btn btn-success" type="submit" value="Simpan">
   <input class="btn btn-danger" type="submit" value="Batal">
     <input type="hidden" name="_token" value="{{ csrf_token() }}">
</form> 

@endsection