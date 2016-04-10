@extends('layouts.app')

@section('content')

 <form action="action_page.php">
  Nama:<br>
  <input class="form-control" type="text" name="firstname" value="Mickey"><br>
  NIP:<br>
  <input class="form-control" type="text" name="lastname" value="Mouse"><br>
  jabatan:<br>
  <input class="form-control" type="text" name="firstname" value="Mickey"><br>
  NPWP:<br>
  <input class="form-control" type="text" name="lastname" value="Mouse"><br>
	Jenis Kelamin:<br>
  <input class="form-control" type="text" name="firstname" value="Mickey"><br>
  Nm Status Pegawai:<br>
  <input class="form-control" type="text" name="lastname" value="Mouse"><br>
  Pangkat:<br>
  <input class="form-control" type="text" name="firstname" value="Mickey"><br>
  Jenis Jabatan:<br>
  <input class="form-control" type="text" name="lastname" value="Mouse"><br>
	Unit Organisasi:<br>
  <input class="form-control" type="text" name="firstname" value="Mickey"><br>
  Jabatan Grade:<br>
  <input class="form-control" type="text" name="lastname" value="Mouse"><br>
	Nama Bank:<br>
  <input class="form-control" type="text" name="firstname" value="Mickey"><br>
  No Rekening:<br>
  <input class="form-control" type="text" name="lastname" value="Mouse"><br>
  	Nama Rekening:<br>
  <input class="form-control" type="text" name="firstname" value="Mickey"><br>
  Scan Rekening:<br>
  <input class="btn btn-default btn-file" type="file" name="lastname" value="Mouse"><br>

  <br>

  <input class="btn btn-success" type="submit" value="Simpan">
   <input class="btn btn-danger" type="submit" value="Batal">
</form> 

@endsection