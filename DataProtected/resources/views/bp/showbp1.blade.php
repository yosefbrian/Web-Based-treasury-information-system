@extends('layouts.app')

@section('content')


@role(1)
<ol class="breadcrumb">
  <li><a href="{{ url('/') }}">Home</a></li>
  <li><a href="{{ url('admin/bp1')}}">Reimbursement</a></li>
  <li><a href="{{ url('admin/bp1')}}">Bendahara Pengeluaran</a></li>
  <li><a href="#">List BP 1</a></li>
</ol>
@endrole

@role(3)
<ol class="breadcrumb">
  <li><a href="{{ url('/') }}">Home</a></li>
  <li><a href="{{ url('spd/bp1')}}">Reimbursement</a></li>
  <li><a href="{{ url('spd/bp1')}}">Bendahara Pengeluaran</a></li>
  <li><a href="#">List BP 1</a></li>
</ol>
@endrole

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


<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 0px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
}
</style>
</head>

<h2>LIST BENDAHARA PENGELUARAN 1


@role(1)
  <a  title="Download Data BP 1" href="{{url('admin/bp1/export')}}" title="Download Daftar SPD" type="button" class="btn btn-info btn-simple pull-right" style="float:right; margin-top:-5px"><i class="fa fa-download" style="margin-right:10px"></i>Download Data</a>
  <!-- <a data-placement="bottom" title="Download Data BP 1" href="{{url('admin/bp1/export')}}"><i class="fa fa-btn glyphicon glyphicon-download"></i>Download Data</a> -->
@endrole

@role(2)
   <a  title="Download Data BP 1" href="{{url('bp/bp1/export')}}" title="Download Daftar SPD" type="button" class="btn btn-info btn-simple pull-right" style="float:right; margin-top:-5px"><i class="fa fa-download" style="margin-right:10px"></i>Download Data</a>
@endrole

@role(3)
   <a  title="Download Data BP 1" href="{{url('spd/bp1/export')}}" title="Download Daftar SPD" type="button" class="btn btn-info btn-simple pull-right" style="float:right; margin-top:-5px"><i class="fa fa-download" style="margin-right:10px"></i>Download Data</a>
@endrole

@role(5)
   <a  title="Download Data BP 1" href="{{url('bp2/bp1/export')}}" title="Download Daftar SPD" type="button" class="btn btn-info btn-simple pull-right" style="float:right; margin-top:-5px"><i class="fa fa-download" style="margin-right:10px"></i>Download Data</a>
@endrole


</h2>
<div class="x_title">
</div>

<div class="col-md-5">
@role(1)
<form action="{{ url('admin/bp1search') }}" method="post" enctype="multipart/form-data">
@endrole

@role(2)
<form action="{{ url('bp/bp1search') }}" method="post" enctype="multipart/form-data">
@endrole

@role(3)
<form action="{{ url('spd/bp1search') }}" method="post" enctype="multipart/form-data">
@endrole

@role(5)
<form action="{{ url('bp2/bp1search') }}" method="post" enctype="multipart/form-data">
@endrole

    <div class="col-sm-8 pull-left">
      <input class="form-control"  type="text" name="searchbp1" id="searchbp2" placeholder="cari.." >
      <input type="hidden" name="_token" value="{{ csrf_token() }}"><br>
    </div>
    <button type="submit" class="btn btn-default pull-left" value="Cari"><span class="fa fa-search"></span></button>
</form>
</div>

<div class="col-md-7">
@role(1)
<form action="{{ url('admin/bp1cari') }}" method="post" enctype="multipart/form-data">
@endrole

@role(2)
<form action="{{ url('bp/bp1cari') }}" method="post" enctype="multipart/form-data">
@endrole

@role(3)
<form action="{{ url('spd/bp1cari') }}" method="post" enctype="multipart/form-data">
@endrole

@role(5)
<form action="{{ url('bp2/bp1cari') }}" method="post" enctype="multipart/form-data">
@endrole

 <div>
<input class="btn btn-default" type="submit" value="Cari" style="float:right">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
</div>


<div class="col-xs-3" style="float:right">
<select name="Tahun" class="form-control">
  <option value="%"> - Tahun - </option>
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

  <div class="col-xs-3" style="float:right">
  <select name="Bulan" class="form-control">
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

  <div class="col-xs-3" style="float:right">
    <select name="Tanggal" class="form-control">
      <option value="%"> - Hari - </option>
      <option value="01">1</option>
      <option value="02">2</option>
      <option value="03">3</option>
      <option value="04">4</option>
      <option value="05">5</option>
      <option value="06">6</option>
      <option value="07">7</option>
      <option value="08">8</option>
      <option value="09">9</option>
      <option value="10">10</option>
      <option value="11">11</option>
      <option value="12">12</option>
      <option value="13">13</option>
      <option value="14">14</option>
      <option value="15">15</option>
      <option value="16">16</option>
      <option value="17">17</option>
      <option value="18">18</option>
      <option value="19">19</option>
      <option value="20">20</option>
      <option value="21">21</option>
      <option value="22">22</option>
      <option value="23">23</option>
      <option value="24">24</option>
      <option value="25">25</option>
      <option value="26">26</option>
      <option value="27">27</option>
      <option value="28">28</option>
      <option value="29">29</option>
      <option value="30">30</option>
      <option value="31">31</option>
    </select>
    </div>

  </form>
</div>

<table>
  <tr>
    <th><center>No PP</th>
    <th><center>No PD</th>
    <th><center>Nama</th>
    <th><center>NIP</th>
    <th><center>Pencairan</th>
    <th><center>Nama PPK</th>
    <th><center>Keterangan</th>
    <th><center>Aksi</th>
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

@role(1)
 <td><center><a class="btn btn-warning" data-placement="bottom" title="Edit Data" href="{{ url('admin/bp1/ubah/'.$bp11->id)}}"><span class="glyphicon glyphicon-pencil"></a>
@endrole

@role(2)
<td><center><a class="btn btn-warning" data-placement="bottom" title="Edit Data" href="{{ url('bp/bp1/ubah/'.$bp11->id)}}"><span class="glyphicon glyphicon-pencil"></a>
@endrole

@role(1)
    <a class="btn btn-danger" data-placement="bottom" title="Hapus Data" data-toggle="modal" href="#" data-target="#modaldelete<?php echo $bp11->id;?>"><span class="glyphicon glyphicon-trash"></a>
@endrole

@role(2)
    <a class="btn btn-danger" data-placement="bottom" title="Hapus Data" data-toggle="modal" href="#" data-target="#modaldelete<?php echo $bp11->id;?>"><span class="glyphicon glyphicon-trash"></a>
@endrole

    <div class="modal fade" id="modaldelete<?php echo $bp11->id;?>" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-sm" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="close">
                      <span aria-hidden="true">&times;</span>
                  </button>
                  <h4 class="modal-title"><b>Perhatian</b></h4>
              </div>

              <div class="modal-body">
                  <input type="hidden" value="<?php echo $bp11->id;?>" name="id">
                  <h5>Apakah Anda yakin akan menghapus data ini?</h5>
              </div>

              <div class="modal-footer">
                  <button type="button" class="btn btn-info btn-simple pull-left" data-dismiss="modal">Kembali</button>
                  <a class="btn btn-danger btn-simple pull-right" title="Hapus" href="{{ action('bpController@delete', $bp11->id) }}">Hapus</a>
              </div>
          </div>
      </div>
  </div>

  </tr>
  @endforeach
</table>

</body>
</html>



{!!$bp1->render()!!}

@endsection
