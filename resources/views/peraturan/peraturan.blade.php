@extends('layouts.app')

@section('content')

<style type="text/css">
	
	table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #4CAF50;
    color: white;
}
</style>

<h2>DOWNLOAD PERATURAN</h2>

<a href="{{ asset('upload/peraturan/SPD.zip') }}">Perjalanan Dinas</a><br>
<a href="{{ asset('upload/peraturan/BP.zip') }}">Bendahara Pengeluaran</a><br>
<a href="{{ asset('upload/peraturan/TUKIN.zip') }}">Tunjangan Kinerja</a><br>
<a href="{{ asset('upload/peraturan/PBJ.zip') }}">PBJ</a><br>

<br>
<br>
<hr>
 
<div style="float: left; width: 47%"> 
@if ($lpj_list->count())
 <table style="width:100%">
  <tr>
    <th>Laporan Pertanggung Jawaban</th>
  </tr>

  <?php $i=0; ?>
                @foreach ($lpj_list as $lpj)
                    <?php $i++; ?>
  <tr>

    <td><a href="upload/lpj/<?php echo $lpj->filename;?>">{{ $lpj->judul }}</a><br><p>{{ $lpj->deskripsi }}</p></td>
  </tr>
  @endforeach
</table>

{!!$lpj_list->render()!!}
</div>
<div style="float: right; width: 47%">
<h3>Tambah LPJ</h3>
<form action="{{ url('peraturan') }}" method="post">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<div class="form-group">
		<input required="required" value="{{ old('judul') }}" placeholder="Judul LPJ" type="text" name = "judul" class="form-control" />
	</div>

	<div class="form-group">
		<input required="required" value="{{ old('deskripsi') }}" placeholder="Deskripsi" type="text" name = "deskripsi" class="form-control" />
	</div>


	<input type="submit" name='publish' class="btn btn-success" value = "Tambah LPJ"/>
</form>

</div>

 

@endif
@endsection