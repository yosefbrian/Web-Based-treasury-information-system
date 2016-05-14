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