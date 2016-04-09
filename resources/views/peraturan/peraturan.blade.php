@extends('layouts.app')

@section('content')

<h2>DOWNLOAD PERATURAN</h2>

<a href="{{ asset('upload/peraturan/SPD.zip') }}">Perjalanan Dinas</a><br>
<a href="{{ asset('upload/peraturan/BP.zip') }}">Bendahara Pengeluaran</a><br>
<a href="{{ asset('upload/peraturan/TUKIN.zip') }}">Tunjangan Kinerja</a><br>
<a href="{{ asset('upload/peraturan/PBJ.zip') }}">PBJ</a><br>

<br>
<br>
 <table style="width:100%">
  <tr>
    <th>Laporan Pertanggung Jawaban</th>
  </tr>
  <tr>
    <td><a href="{{ asset('upload/lpj/Test_Data_LPJ.docx') }}">LPJ 1 2016</a></td>
  </tr>
</table>

@endsection