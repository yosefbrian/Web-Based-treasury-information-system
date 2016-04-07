@extends('layouts.app')

@section('content')

                <div class="row">
    <div align="center">
        Sistem Informasi Bea Cukai
    </div>
    <br>
    <div align="center">
        @role(1)
<!-- Role Id =1 -->
     <a href="{!! url('admin') !!}"><button type="button" class="btn btn-default">Admin</button></a> 
@endrole
@role(3)
<!-- Member Role_id =3 -->
    <p align="center">SPD Area!!!</p>
@endrole
@role(2)
<!-- Member Role_id =3 -->
    <p align="center">BP Area!!!</p>
@endrole
@role(4)
<!-- Role Id =4 -->
     <p align="center">Klien Area!!!</p>
@endrole
    </div>

</div>
@endsection
