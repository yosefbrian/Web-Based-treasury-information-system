@extends('layouts.app')

@section('content')


<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
}
</style>
</head>
<body>

<table style="width:100%">
  <tr>
    <th>No PP</th>
    <th>No PD</th>   
    <th>Nama</th>
    <th>NIP</th>
    <th>Pencairan</th>
    <th>Nama PPK</th>
    <th>Keterangan</th>
  </tr>


 <?php $i=0; ?>
                @foreach ($bp1 as $bp11)
                    <?php $i++; ?>
  <tr>
    <td>{{$bp11->no_pp}}</td>
    <td>{{$bp11->no_pd}}</td>    
    <td>{{$bp11->nama}}</td>
     <td>{{$bp11->nip}}</td>
    <td>{{ $bp11->pencairan }}</td>    
    <td>{{ $bp11->nama_ppk }}</td>
     <td>{{ $bp11->keterangan }}</td>
  </tr>
  @endforeach
</table>

</body>
</html>



{!!$bp1->render()!!}

@endsection