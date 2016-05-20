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


 <form action="{{ action('rangkingdinasController@rangkingtahun') }}" method="post" enctype="multipart/form-data">
	  	<input class="btn btn-default" type="submit" value="Cari" style="float:right">
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

<table>
<tr>
<th> Nama </th>
<th> NIP </th>
<th> Jumlah Hari </th>
</tr>	

@foreach($profil as $profile)
<tr>

@if(isset($nama[$profile->nip]))
<td>
<p> {{$nama[$profile->nip]}}</p>
</td>
@endif	

@if(isset($nip[$profile->nip]))	
<td>
<p>{{$nip[$profile->nip]}}</p>
</td>
@endif


@if(isset($jumlah[$profile->nip]))
<td>
<p>{{$jumlah[$profile->nip]}} hari</p>
</td>
@endif

</tr>


@endforeach


</table>





@endsection