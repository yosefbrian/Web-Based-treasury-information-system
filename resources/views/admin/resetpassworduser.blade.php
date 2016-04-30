@extends('layouts.app')

@section('content')

 <form action="{{url('admin/gantipassworduser/'.$user->id) }}" method="post" enctype="multipart/form-data">
   <input type="hidden" name="_token" value="{{ csrf_token() }}">
  Password Baru : <br>
  <input class="form-control" type="password" name="password_baru"><br>
  Konfirmasi Password : <br>
  <input class="form-control" type="password" name="konfirmasi_password"><br>
 
  <br>

  <input class="btn btn-success" type="submit" value="Simpan">
   <input class="btn btn-danger" type="submit" value="Batal">
     <input type="hidden" name="_token" value="{{ csrf_token() }}">
</form> 

@endsection