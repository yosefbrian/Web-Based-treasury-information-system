@extends('layouts.app')


@section('content')


<style>
table {
    width:100%;
}
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
    text-align: left;
}
table#t01 tr:nth-child(even) {
    background-color: #eee;
}
table#t01 tr:nth-child(odd) {
   background-color:#fff;
}
table#t01 th	{
    background-color: black;
    color: white;
}
</style>


<?php $i=0; ?>
                @foreach ($profil as $profile)
                    <?php $i++; ?>

<table>
  <tr>
    <th>NIP</th>
    <th>Nama Lengkap</th>
    <th>Aksi</th>			
   </tr>
  <tr>
    <td>{{$profile->nip}}</td>		
     <td>{{$profile->nama}}</td>
     <td><a href="{!! url('admin/spdcenter/'.$profile->id) !!}">Buat Data</a></td>
  </tr>
  
 </table>
 
 @endforeach 

<table>
</table>

@endsection