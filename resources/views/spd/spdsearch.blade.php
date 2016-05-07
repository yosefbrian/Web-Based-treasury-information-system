@extends('layouts.app')


@section('content')
<ol class="breadcrumb">
  <li><a href="{{ url('/') }}">Home</a></li>
  <li><a href="#">Reimbursement</a></li>
  <li><a href="#">SPD Center Admin</a></li>
</ol>
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

<h2>SPD CENTER ADMIN
  <a href="{{ url('admin/listspd') }}" type="button" class="btn btn-info btn-simple pull-right" style="float:right; margin-top:-5px"><i class="fa fa-list-alt" style="margin-right:10px"></i>List SPD</a>

</h2>
<div class="x_title">
</div>

<form action="{{ url('admin/spdsearch') }}" method="post">
<input type="hidden" name="_token" value="{{ csrf_token() }}" >
<input type="text" name="spdsearch" id="spdsearch"></input>
<input class="btn btn-default" type="submit" value="Cari" >
</form>


<table>


  <tr>
    <th>NIP</th>
    <th>Nama Lengkap</th>
    <th>Aksi</th>
   </tr>

   <?php $i=0; ?>
                @foreach ($result as $profile)
                    <?php $i++; ?>
  <tr>
    <td>{{$profile->nip}}</td>
     <td>{{$profile->nama}}</td>
     <td><a href="{!! url('admin/spdcenter/'.$profile->id) !!}">Buat Data</a></td>
  </tr>
 @endforeach

 </table>



<table>
</table>
{!!$result->render()!!}
@endsection
