@extends('layouts.app')

@section('content')


<!DOCTYPE html>

@role(1)
<ol class="breadcrumb">
  <li><a href="{{ url('/') }}">Home</a></li>
  <li><a href="{{ url('admin/bp2')}}">Reimbursement</a></li>
  <li><a href="{{ url('admin/bp2')}}">Bendahara Pengeluaran</a></li>
  <li><a href="#">List BP 2</a></li>
</ol>

@endrole


@role(5)
<ol class="breadcrumb">
  <li><a href="{{ url('/') }}">Home</a></li>
  <li><a href="{{ url('bp2/bp2')}}">Reimbursement</a></li>
  <li><a href="{{ url('bp2/bp2')}}">Bendahara Pengeluaran</a></li>
  <li><a href="#">List BP 2</a></li>
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

<h2>LIST BENDAHARA PENGELUARAN 2

@role(1)
  <a  title="Download Data BP 2" href="{{url('admin/bp2/export')}}" title="Download Daftar SPD" type="button" class="btn btn-info btn-simple pull-right" style="float:right; margin-top:-5px"><i class="fa fa-download" style="margin-right:10px"></i>Download Data</a>
  <!-- <a data-placement="bottom" title="Download Data BP 2" href="{{url('admin/bp2/export')}}"><i class="fa fa-btn glyphicon glyphicon-download"></i>Download Data</a> -->
@endrole



@role(5)
  <a  title="Download Data BP 2" href="{{url('bp2/bp2/export')}}" title="Download Daftar SPD" type="button" class="btn btn-info btn-simple pull-right" style="float:right; margin-top:-5px"><i class="fa fa-download" style="margin-right:10px"></i>Download Data</a>
  <!-- <a data-placement="bottom" title="Download Data BP 2" href="{{url('admin/bp2/export')}}"><i class="fa fa-btn glyphicon glyphicon-download"></i>Download Data</a> -->
@endrole

</h2>






<div class="x_title">
</div>
@role(1)
<form action="{{ url('admin/bp2search') }}" method="post" enctype="multipart/form-data">
    <div class="col-sm-4 pull-left">
      <input class="form-control"  type="text" name="searchbp2" id="searchbp2" placeholder="cari.." >
      <input type="hidden" name="_token" value="{{ csrf_token() }}"><br>
    </div>
    <button type="submit" class="btn btn-default pull-left" value="Cari"><span class="fa fa-search"></span></button>

<!-- <form action="{{ url('admin/bp2search') }}" method="post">
<input type="hidden" name="_token" value="{{ csrf_token() }}" >
<input type="text" name="searchbp2" id="searchbp2">
<input class="btn btn-default" type="submit" value="Cari" > -->

@endrole


@role(2)
<form action="{{ url('admin/bp2search') }}" method="post" enctype="multipart/form-data">
    <div class="col-sm-4 pull-left">
      <input class="form-control"  type="text" name="searchbp2" id="searchbp2" placeholder="cari.." >
      <input type="hidden" name="_token" value="{{ csrf_token() }}"><br>
    </div>
    <button type="submit" class="btn btn-default pull-left" value="Cari"><span class="fa fa-search"></span></button>

<!-- <form action="{{ url('bp/bp2search') }}" method="post">
<input type="hidden" name="_token" value="{{ csrf_token() }}" >
<input type="text" name="searchbp2" id="searchbp2">
<input class="btn btn-default" type="submit" value="Cari" > -->

@endrole


@role(3)
<form action="{{ url('admin/bp2search') }}" method="post" enctype="multipart/form-data">
    <div class="col-sm-4 pull-left">
      <input class="form-control"  type="text" name="searchbp2" id="searchbp2" placeholder="cari.." >
      <input type="hidden" name="_token" value="{{ csrf_token() }}"><br>
    </div>
    <button type="submit" class="btn btn-default pull-left" value="Cari"><span class="fa fa-search"></span></button>
<!-- <form action="{{ url('spd/bp2search') }}" method="post">
<input type="hidden" name="_token" value="{{ csrf_token() }}" >
<input type="text" name="searchbp2" id="searchbp2">
<input class="btn btn-default" type="submit" value="Cari" > -->

@endrole


@role(5)
<form action="{{ url('admin/bp2search') }}" method="post" enctype="multipart/form-data">
    <div class="col-sm-4 pull-left">
      <input class="form-control"  type="text" name="searchbp2" id="searchbp2" placeholder="cari.." >
      <input type="hidden" name="_token" value="{{ csrf_token() }}"><br>
    </div>
    <button type="submit" class="btn btn-default pull-left" value="Cari"><span class="fa fa-search"></span></button>
<!-- <form action="{{ url('bp2/bp2search') }}" method="post">
<input type="hidden" name="_token" value="{{ csrf_token() }}" >
<input type="text" name="searchbp2" id="searchbp2">
<input class="btn btn-default" type="submit" value="Cari" > -->
@endrole


<body>

@role(1)
<form action="{{ url('admin/bp2cari') }}" method="post" enctype="multipart/form-data">
  <input class="btn btn-default" type="submit" value="Cari" style="float:right">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
@endrole


@role(5)
<form action="{{ url('bp2/bp2cari') }}" method="post" enctype="multipart/form-data">
  <input class="btn btn-default" type="submit" value="Cari" style="float:right">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
@endrole



<div class="col-xs-2" style="float:right">
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

  <div class="col-xs-2" style="float:right">
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



  <div class="col-xs-2" style="float:right">
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

</div>

</form>





<table style="width:100%">
  <tr>
    <th><center>No SPD</th>
    <th><center>No PP</th>
    <th><center>No SPP/SPM</th>
    <th><center>Tanggal SPP/SPM</th>
    <th><center>Aksi</th>
  </tr>


 <?php $i=0; ?>
                @foreach ($bp2 as $bp21)
                    <?php $i++; ?>
  <tr>
    <td>{{$bp21->no_spd}}</td>
    <td>{{$bp21->no_pp}}</td>
    <td>{{$bp21->no_spp}}</td>
    <td>{{$bp21->tgl_spp}}</td>
 <!--     <td>{{$bp21->tiket_berangkat}}</td>
    <td>{{ $bp21->tiket_kembali }}</td>
    <td>{{ $bp21->dpr }}</td>
     <td>{{ $bp21->penginapan }}</td> -->
     <td> <center>
       <a class="btn btn-primary" data-placement="bottom" title="Lihat Data" data-toggle="modal" data-id ="bp21->id" data-target="#modalshow<?php echo $bp21->id;?>" href="#"><span class="glyphicon glyphicon-user"></span></a>
     @role(1)

    <a class="btn btn-warning" data-placement="bottom" title="Edit Data" href="{{ url('admin/bp2/ubah/'.$bp21->id)}}"><span class="glyphicon glyphicon-pencil"></a>

     @endrole



     @role(5)

    <a class="btn btn-warning" data-placement="bottom" title="Edit Data" href="{{ url('bp2/bp2/ubah/'.$bp21->id)}}"><span class="glyphicon glyphicon-pencil"></a>

     @endrole


     @role(1)

        <a class="btn btn-danger" data-placement="bottom" title="Hapus Data" data-toggle="modal" href="#" data-target="#modaldelete<?php echo $bp21->id;?>"><span class="glyphicon glyphicon-trash"></a>

      @endrole



     @role(5)

        <a class="btn btn-danger" data-placement="bottom" title="Hapus Data" data-toggle="modal" href="#" data-target="#modaldelete<?php echo $bp21->id;?>"><span class="glyphicon glyphicon-trash"></a>

      @endrole
    </td>

     <div class="modal fade" id="modalshow<?php echo $bp21->id;?>" tabindex="-1" role="dialog">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <h4 class="modal-title"><b>Detil</b></h4>
                                </div>
                                <div class="modal-body">
                                    <input type="hidden" value="<?php echo $bp21->id;?>" name="id">
                                    <div class="panel panel-group">
                                        <div class="panel-body">
                                            <div class="row col-md-10 col-md-offset-1">
                                                <div class="row">
                                                    <div class="form-group">
                                                        <label class="col-sm-6"><div class="pull-right">&nbsp;</div></label>
                                                        <div class="col-sm-6"></div>
                                                    </div>
                                                </div>

                                                    <div class="row">
                                                        <div class="form-group">
                                                            <label class="col-sm-6">
                                                                <div class="pull-right">
                                                                    No PP
                                                                </div>
                                                            </label>
                                                            <div class="col-sm-6">{{$bp21->no_pp}}</div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="form-group">
                                                            <label class="col-sm-6">
                                                                <div class="pull-right">
                                                                    No SPP/SPM
                                                                </div>
                                                            </label>
                                                            <div class="col-sm-6">{{$bp21->no_spp}}</div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="form-group">
                                                            <label class="col-sm-6">
                                                                <div class="pull-right">
                                                                    Tanggal SPP
                                                                </div>
                                                            </label>
                                                            <div class="col-sm-6">{{$bp21->tgl_spp}}</div>
                                                        </div>
                                                    </div>


                                                    <div class="row">
                                                        <div class="form-group">
                                                            <label class="col-sm-6">
                                                                <div class="pull-right">
                                                                    Pengiriman
                                                                </div>
                                                            </label>
                                                            <div class="col-sm-6">{{$bp21->tiket_berangkat}}</div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group">
                                                            <label class="col-sm-6">
                                                                <div class="pull-right">
                                                                    Tiket Kembali:
                                                                </div>
                                                            </label>
                                                            <div class="col-sm-6"> {{ $bp21->tiket_kembali }}</div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group">
                                                            <label class="col-sm-6">
                                                                <div class="pull-right">
                                                                    DPR :
                                                                </div>
                                                            </label>
                                                            <div class="col-sm-6">{{ $bp21->dpr }}</div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group">
                                                            <label class="col-sm-6">
                                                                <div class="pull-right">
                                                                    Penginapan :
                                                                </div>
                                                            </label>
                                                            <div class="col-sm-6">{{ $bp21->penginapan }}</div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group">
                                                            <label class="col-sm-6">
                                                                <div class="pull-right">
                                                                    Penginapan Tanpa Bukti :
                                                                </div>
                                                            </label>
                                                            <div class="col-sm-6">{{ $bp21->penginapan_tanpa_bukti }}</div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group">
                                                            <label class="col-sm-6">
                                                                <div class="pull-right">
                                                                    UH:
                                                                </div>
                                                            </label>
                                                            <div class="col-sm-6">{{ $bp21->uh}}</div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group">
                                                            <label class="col-sm-6">
                                                                <div class="pull-right">
                                                                    UHR :
                                                                </div>
                                                            </label>
                                                            <div class="col-sm-6">{{$bp21->uhr}}</div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group">
                                                            <label class="col-sm-6">
                                                                <div class="pull-right">
                                                                    Kekurangan :
                                                                </div>
                                                            </label>
                                                            <div class="col-sm-6">{{$bp21->kekurangan}}</div>
                                                        </div>
                                                    </div>

                                                    <!-- bagian2 -->
                                                    <div class="row">
                                                        <div class="form-group">
                                                            <label class="col-sm-6">
                                                                <div class="pull-right">
                                                                    Perjalanan Dinas :
                                                                </div>
                                                            </label>
                                                            <div class="col-sm-6">{{$bp21->perjalanan_dinas}}</div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="form-group">
                                                            <label class="col-sm-6">
                                                                <div class="pull-right">
                                                                    Angkutan Pegawai :
                                                                </div>
                                                            </label>
                                                            <div class="col-sm-6">{{$bp21->angkutan_pegawai}}</div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="form-group">
                                                            <label class="col-sm-6">
                                                                <div class="pull-right">
                                                                    Angkutan Keluarga :
                                                                </div>
                                                            </label>
                                                            <div class="col-sm-6">{{$bp21->angkutan_keluarga}}</div>
                                                        </div>
                                                    </div>


                                                    <div class="row">
                                                        <div class="form-group">
                                                            <label class="col-sm-6">
                                                                <div class="pull-right">
                                                                    Angkutan PRT :
                                                                </div>
                                                            </label>
                                                            <div class="col-sm-6">{{$bp21->angkutan_prt}}</div>
                                                        </div>
                                                    </div>


                                                    <div class="row">
                                                        <div class="form-group">
                                                            <label class="col-sm-6">
                                                                <div class="pull-right">
                                                                    Pengepakan :
                                                                </div>
                                                            </label>
                                                            <div class="col-sm-6">{{$bp21->pengepakan}}</div>
                                                        </div>
                                                    </div>


                                                    <div class="row">
                                                        <div class="form-group">
                                                            <label class="col-sm-6">
                                                                <div class="pull-right">
                                                                    Angkutan Barang :
                                                                </div>
                                                            </label>
                                                            <div class="col-sm-6">{{$bp21->angkutan_barang}}</div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="form-group">
                                                            <label class="col-sm-6">
                                                                <div class="pull-right">
                                                                    Uang Harian Tiba :
                                                                </div>
                                                            </label>
                                                            <div class="col-sm-6">{{$bp21->uang_harian_tiba}}</div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="form-group">
                                                            <label class="col-sm-6">
                                                                <div class="pull-right">
                                                                    Uang Harian Bertolak :
                                                                </div>
                                                            </label>
                                                            <div class="col-sm-6">{{$bp21->uang_harian_bertolak}}</div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="form-group">
                                                            <label class="col-sm-6">
                                                                <div class="pull-right">
                                                                    Uang Harian Pembantu :
                                                                </div>
                                                            </label>
                                                            <div class="col-sm-6">{{$bp21->uang_harian_pembantu}}</div>
                                                        </div>
                                                    </div>


                                                    <div class="row">
                                                        <div class="form-group">
                                                            <label class="col-sm-6">
                                                                <div class="pull-right">
                                                                    Total :
                                                                </div>
                                                            </label>
                                                            <div class="col-sm-6">{{$bp21->total}}</div>
                                                        </div>
                                                    </div>




                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                </div>






                        <div class="modal fade" id="modaldelete<?php echo $bp21->id;?>" tabindex="-1" role="dialog">
                        <div class="modal-dialog modal-sm" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <h4 class="modal-title"><b>Perhatian</b></h4>
                                </div>

                                <div class="modal-body">
                                    <input type="hidden" value="<?php echo $bp21->id;?>" name="id">
                                    <h5>Apakah Anda yakin akan menghapus data ini?</h5>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-info btn-simple pull-left" data-dismiss="modal">Kembali</button>

                                    <a class="btn btn-danger btn-simple pull-right" title="Hapus" href="{{ action('bpController@delete2', $bp21->id) }}">Hapus</a>
                                </div>
                            </div>
                        </div>
                    </div>

  </tr>
  @endforeach
</table>

</body>
</html>



{!!$bp2->render()!!}

@endsection
