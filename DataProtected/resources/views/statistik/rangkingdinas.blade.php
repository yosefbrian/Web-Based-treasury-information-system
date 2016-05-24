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


 <form action="{{ url('admin/rangkingtahun') }}" method="get" enctype="multipart/form-data">
	  	<input class="btn btn-default" type="submit" value="Cari Berdasar Tahun" style="float:right">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<div class="col-xs-2" style="float:right">
			<select name="Tahun" class="form-control">
			<option value="">Tahun</option>
			  <option value="2016">2016</option>
			  <option value="2017">2017</option>
			  <option value="2018">2018</option>
			  <option value="2019">2019</option>
			  <option value="2020">2020</option>
			  <option value="2021">2021</option>
			  <option value="2022">2022</option>
			  <option value="2023">2023</option>
			  <option value="2024">2024</option>
			  <option value="2025">2025</option>
			</select>
		</div>
	</form>

<br>


 <form action="{{ url('admin/rangkingbulan') }}" method="get" enctype="multipart/form-data">
	  	<input class="btn btn-default" type="submit" value="Cari Berdasar Bulan" style="float:right">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<div class="col-xs-2" style="float:right">
			<select name="Tahun_bulan" class="form-control">
			<option value="">Tahun</option>
			  <option value="2016">2016</option>
			  <option value="2017">2017</option>
			  <option value="2018">2018</option>
			  <option value="2019">2019</option>
			  <option value="2020">2020</option>
			  <option value="2021">2021</option>
			  <option value="2022">2022</option>
			  <option value="2023">2023</option>
			  <option value="2024">2024</option>
			  <option value="2025">2025</option>
			</select>
		</div>

		<div class="col-xs-2" style="float:right">
  <select name="Bulan_bulan" class="form-control">
    <option value="%"> - Bulan - </option>
    <option value="01">Januari</option>
    <option value="02">Februari</option>
    <option value="03">Maret</option>
    <option value="04">April</option>
    <option value="05">Mei</option>
    <option value="06">Juni</option>
    <option value="07">Juli</option>
    <option value="08">Agustus</option>
    <option value="09">September</option>
    <option value="10">Oktober</option>
    <option value="11">November</option>
    <option value="12">Desember</option>
  </select>
  </div>



	</form>






<table>
<tr>
<th> Nama </th>
<th> NIP </th>
<th> Jumlah Hari </th>
</tr>	

<?php  

$i=0;
?>
@foreach($jumlah as $jml)

@if(isset($jumlah[$i]))
@if($i<20)
<tr>


<td>
<p> {{$nama[$i]}}</p>
</td>


	
<td>
<p>{{$nip[$i]}}</p>
</td>



<td>
<p>{{$jumlah[$i]}} hari</p>
</td>


</tr>


<?php  
$i++;
?>

@endif
@endif

@endforeach


</table>





@endsection