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
@endrole

@role(2)
   <a  title="Download Data BP 1" href="{{url('bp/bp1/export')}}" title="Download Daftar SPD" type="button" class="btn btn-info btn-simple pull-right" style="float:right; margin-top:-5px"><i class="fa fa-download" style="margin-right:10px"></i>Download Data</a>
@endrole

</h2>
<div class="x_title">
</div>
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

    <div class="col-sm-4 pull-left">
      <input class="form-control"  type="text" name="searchbp1" id="searchbp2" placeholder="cari.." >
      <input type="hidden" name="_token" value="{{ csrf_token() }}"><br>
    </div>
    <button type="submit" class="btn btn-default pull-left" value="Cari"><span class="fa fa-search"></span></button>
</form>

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

  <div class="col-xs-2" style="float:left">
  <select name="Tahun" class="form-control">
    <option value="2016" <?php echo (substr($tanggal,0,4) == '2016')?"selected":""; ?>>2016</option>
    <option value="2017" <?php echo (substr($tanggal,0,4) == '2017')?"selected":""; ?>>2017</option>
    <option value="2018" <?php echo (substr($tanggal,0,4) == '2018')?"selected":""; ?>>2018</option>
    <option value="2019" <?php echo (substr($tanggal,0,4) == '2019')?"selected":""; ?>>2019</option>
    <option value="2020" <?php echo (substr($tanggal,0,4) == '2020')?"selected":""; ?>>2020</option>
    <option value="2021" <?php echo (substr($tanggal,0,4) == '2021')?"selected":""; ?>>2021</option>
    <option value="2022" <?php echo (substr($tanggal,0,4) == '2022')?"selected":""; ?>>2022</option>
    <option value="2023" <?php echo (substr($tanggal,0,4) == '2023')?"selected":""; ?>>2023</option>
    <option value="2024" <?php echo (substr($tanggal,0,4) == '2024')?"selected":""; ?>>2024</option>
    <option value="2025" <?php echo (substr($tanggal,0,4) == '2025')?"selected":""; ?>>2025</option>
  </select>
  </div>

  <div class="col-xs-2" style="float:left">
  <select name="Bulan" class="form-control">
    <option value="01" <?php echo (substr($tanggal,5,2) == '01')?"selected":""; ?>>Januari</option>
    <option value="02" <?php echo (substr($tanggal,5,2) == '02')?"selected":""; ?>>Februari</option>
    <option value="03" <?php echo (substr($tanggal,5,2) == '03')?"selected":""; ?>>Maret</option>
    <option value="04" <?php echo (substr($tanggal,5,2) == '04')?"selected":""; ?>>April</option>
    <option value="05" <?php echo (substr($tanggal,5,2) == '05')?"selected":""; ?>>Mei</option>
    <option value="06" <?php echo (substr($tanggal,5,2) == '06')?"selected":""; ?>>Juni</option>
    <option value="07" <?php echo (substr($tanggal,5,2) == '07')?"selected":""; ?>>Juli</option>
    <option value="08" <?php echo (substr($tanggal,5,2) == '08')?"selected":""; ?>>Agustus</option>
    <option value="09" <?php echo (substr($tanggal,5,2) == '09')?"selected":""; ?>>September</option>
    <option value="10" <?php echo (substr($tanggal,5,2) == '10')?"selected":""; ?>>Oktober</option>
    <option value="11" <?php echo (substr($tanggal,5,2) == '11')?"selected":""; ?>>November</option>
    <option value="12" <?php echo (substr($tanggal,5,2) == '12')?"selected":""; ?>>Desember</option>
  </select>
  </div>

  <div class="col-xs-2" style="float:left">
    <select name="Tanggal" class="form-control">
    <option value="01" <?php echo (substr($tanggal,8,2) == '01')?"selected":""; ?>>1</option>
    <option value="02" <?php echo (substr($tanggal,8,2) == '02')?"selected":""; ?>>2</option>
    <option value="03" <?php echo (substr($tanggal,8,2) == '03')?"selected":""; ?>>3</option>
    <option value="04" <?php echo (substr($tanggal,8,2) == '04')?"selected":""; ?>>4</option>
    <option value="05" <?php echo (substr($tanggal,8,2) == '05')?"selected":""; ?>>5</option>
    <option value="06" <?php echo (substr($tanggal,8,2) == '06')?"selected":""; ?>>6</option>
    <option value="07" <?php echo (substr($tanggal,8,2) == '07')?"selected":""; ?>>7</option>
    <option value="08" <?php echo (substr($tanggal,8,2) == '08')?"selected":""; ?>>8</option>
    <option value="09" <?php echo (substr($tanggal,8,2) == '09')?"selected":""; ?>>9</option>
    <option value="10" <?php echo (substr($tanggal,8,2) == '10')?"selected":""; ?>>10</option>
    <option value="11" <?php echo (substr($tanggal,8,2) == '11')?"selected":""; ?>>11</option>
    <option value="12" <?php echo (substr($tanggal,8,2) == '12')?"selected":""; ?>>12</option>
    <option value="13" <?php echo (substr($tanggal,8,2) == '13')?"selected":""; ?>>13</option>
    <option value="14" <?php echo (substr($tanggal,8,2) == '14')?"selected":""; ?>>14</option>
    <option value="15" <?php echo (substr($tanggal,8,2) == '15')?"selected":""; ?>>15</option>
    <option value="16" <?php echo (substr($tanggal,8,2) == '16')?"selected":""; ?>>16</option>
    <option value="17" <?php echo (substr($tanggal,8,2) == '17')?"selected":""; ?>>17</option>
    <option value="18" <?php echo (substr($tanggal,8,2) == '18')?"selected":""; ?>>18</option>
    <option value="19" <?php echo (substr($tanggal,8,2) == '19')?"selected":""; ?>>19</option>
    <option value="20" <?php echo (substr($tanggal,8,2) == '20')?"selected":""; ?>>20</option>
    <option value="21" <?php echo (substr($tanggal,8,2) == '21')?"selected":""; ?>>21</option>
    <option value="22" <?php echo (substr($tanggal,8,2) == '22')?"selected":""; ?>>22</option>
    <option value="23" <?php echo (substr($tanggal,8,2) == '23')?"selected":""; ?>>23</option>
    <option value="24" <?php echo (substr($tanggal,8,2) == '24')?"selected":""; ?>>24</option>
    <option value="25" <?php echo (substr($tanggal,8,2) == '25')?"selected":""; ?>>25</option>
    <option value="26" <?php echo (substr($tanggal,8,2) == '26')?"selected":""; ?>>26</option>
    <option value="27" <?php echo (substr($tanggal,8,2) == '27')?"selected":""; ?>>27</option>
    <option value="28" <?php echo (substr($tanggal,8,2) == '28')?"selected":""; ?>>28</option>
    <option value="29" <?php echo (substr($tanggal,8,2) == '29')?"selected":""; ?>>29</option>
    <option value="30" <?php echo (substr($tanggal,8,2) == '30')?"selected":""; ?>>30</option>
    <option value="31" <?php echo (substr($tanggal,8,2) == '31')?"selected":""; ?>>31</option>
    </select>
    </div>

  <input class="btn btn-default" type="submit" value="Cari" style="float:left">
<input type="hidden" name="_token" value="{{ csrf_token() }}">

</form>

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
                @foreach ($result as $bp11)
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
<a class="btn btn-warning" data-placement="bottom" title="Edit Data" href="{{ url('bp/bp1/ubah/'.$bp11->id)}}"><span class="glyphicon glyphicon-pencil"></a>
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



{!!$result->render()!!}

@endsection
