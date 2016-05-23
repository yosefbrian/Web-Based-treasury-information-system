@extends('layouts.app')




@section('content')

@role(1)
<ol class="breadcrumb">
  <li><a href="{{ url('/') }}">Home</a></li>
  <li><a href="{{ url('admin/spd')}}">Reimbursement</a></li>
  <li><a href="{{ url('admin/spd')}}">SPD Center Admin</a></li>
  <li><a href="#">List SPD</a></li>
</ol>
@endrole


@role(3)
<ol class="breadcrumb">
  <li><a href="{{ url('/') }}">Home</a></li>
  <li><a href="{{ url('spd/spd')}}">Reimbursement</a></li>
  <li><a href="{{ url('spd/spd')}}">SPD Center Admin</a></li>
  <li><a href="#">List SPD</a></li>
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




<h2>List SPD

@role(1)
  <a href="{{url('admin/listspd/export')}}" title="Download Daftar SPD" type="button" class="btn btn-info btn-simple pull-right" style="float:right; margin-top:-5px"><i class="fa fa-download" style="margin-right:10px"></i>Download Data</a>
@endrole

@role(3)
  <a href="{{url('spd/listspd/export')}}" title="Download Daftar SPD" type="button" class="btn btn-info btn-simple pull-right" style="float:right; margin-top:-5px"><i class="fa fa-download" style="margin-right:10px"></i>Download Data</a>
@endrole
</h2>
<div class="x_title">
</div>

@role(1)
<form action="{{ url('admin/searchspd') }}" method="post">
@endrole

@role(3)
<form action="{{ url('spd/searchspd') }}" method="post">
@endrole

<input type="hidden" name="_token" value="{{ csrf_token() }}" >
<div class="">


<div class="">
  <input class="form-control pull-left" type="text" name="spdsearch" id="spdsearch" placeholder="cari.." style="width: 200px; height:30px; margin-top: 2px;margin-right:10px"></input>
  <input class="btn btn-default pull-left" type="submit" value="Cari" ></input>
</div>
</form>


<div class="">

@role(1)
<form action="{{ url('admin/listcari') }}" method="post" enctype="multipart/form-data" >
@endrole


@role(3)
<form action="{{ url('spd/listcari') }}" method="post" enctype="multipart/form-data" >
@endrole


<input type="hidden" name="_token" value="{{ csrf_token() }}" >
  <input class="btn btn-default " type="submit" value="Cari" style="float:right">
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
    <select name="Tanggal" class="form-control" >
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
</div>
</form>
<br>

<table>


  <tr>
    <th><center>No PD</th>
    <th><center>No ST</th>
    <th><center>NIP</th>
    <th><center>Nama Lengkap</th>
    <th><center>Aksi</th>
   <!--  <th>Berangkat</th>
    <th>Tujuan</th>
    <th>Tanggal</th>
    <th>Kegiatan</th>
    <th>Keterangan</th>
    <th>Nama PPK</th>
 -->
   </tr>

   <?php $i=0; ?>
                @foreach ($result as $espede)
                    <?php $i++; ?>
  <tr>
    <td>{{$espede->no_pd}}</td>
     <td>{{$espede->no_st}}</td>
     <td>{{$espede->nip}}</td>
     <td>{{$espede->nama}}</td>
    <td style="text-align:center">
      <a class="btn btn-info" data-placement="bottom" title="Lihat Detil SPD" data-toggle="modal" data-id ="espede->id" data-target="#modalshow<?php echo $espede->id;?>" href="#"><span class="fa fa-book"></span></a>
      @role(1)
      <a class="btn btn-warning" data-placement="bottom" title="Edit Data" href="{{ url('admin/listspd/'.$espede->id.'/ubah')}}"><span class="glyphicon glyphicon-pencil"></a>
       @endrole
      @role(3)
      <a class="btn btn-warning" data-placement="bottom" title="Edit Data" href="{{ url('spd/listspd/'.$espede->id.'/ubah')}}"><span class="glyphicon glyphicon-pencil"></a>
      @endrole

      @role(1)
       <a class="btn btn-primary" title="Lihat Nota" href="{{ action('SPDController@lihat', $espede->id) }}"><i class="fa fa-file-text-o"></i></a>
       <a class="btn btn-danger" data-placement="bottom" title="Hapus Data" data-toggle="modal" href="#" data-target="#modaldelete<?php echo $espede->id;?>"><span class="glyphicon glyphicon-trash"></a>
      @endrole


      @role(3)
       <a class="btn btn-primary" title="Lihat Nota" href="{{ action('SPDController@lihat', $espede->id) }}"><i class="fa fa-file-text-o"></i></a>
       <a class="btn btn-danger" data-placement="bottom" title="Hapus Data" data-toggle="modal" href="#" data-target="#modaldelete<?php echo $espede->id;?>"><span class="glyphicon glyphicon-trash"></a>
      @endrole


    </td>

<!-- Modal -->
     <div class="modal fade" id="modalshow<?php echo $espede->id;?>" tabindex="-1" role="dialog">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <h4 class="modal-title"><b>Detil SPD</b></h4>
                                </div>
                                <div class="modal-body">
                                    <input type="hidden" value="<?php echo $espede->id;?>" name="id">
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
                                                                    Pengiriman
                                                                </div>
                                                            </label>
                                                            <div class="col-sm-6">{{ $espede->pengiriman}}</div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group">
                                                            <label class="col-sm-6">
                                                                <div class="pull-right">
                                                                    Nomor PD:
                                                                </div>
                                                            </label>
                                                            <div class="col-sm-6">{{ $espede->no_pd}}</div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group">
                                                            <label class="col-sm-6">
                                                                <div class="pull-right">
                                                                    Nomor ST :
                                                                </div>
                                                            </label>
                                                            <div class="col-sm-6">{{ $espede->no_st}}</div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group">
                                                            <label class="col-sm-6">
                                                                <div class="pull-right">
                                                                    NIP :
                                                                </div>
                                                            </label>
                                                            <div class="col-sm-6">{{ $espede->nip}}</div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group">
                                                            <label class="col-sm-6">
                                                                <div class="pull-right">
                                                                    Nama :
                                                                </div>
                                                            </label>
                                                            <div class="col-sm-6">{{ $espede->nama}}</div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group">
                                                            <label class="col-sm-6">
                                                                <div class="pull-right">
                                                                    Berangkat :
                                                                </div>
                                                            </label>
                                                            <div class="col-sm-6">{{ $espede->berangkat}}</div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group">
                                                            <label class="col-sm-6">
                                                                <div class="pull-right">
                                                                    Tujuan :
                                                                </div>
                                                            </label>
                                                            <div class="col-sm-6">{{$espede->tujuan}}</div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group">
                                                            <label class="col-sm-6">
                                                                <div class="pull-right">
                                                                    Tanggal Berangkat :
                                                                </div>
                                                            </label>
                                                            <div class="col-sm-6">{{$espede->tanggal_berangkat}}</div>
                                                        </div>
                                                    </div>

                                                      <div class="row">
                                                        <div class="form-group">
                                                            <label class="col-sm-6">
                                                                <div class="pull-right">
                                                                    Tanggal Pulang :
                                                                </div>
                                                            </label>
                                                            <div class="col-sm-6">{{$espede->tanggal_pulang}}</div>
                                                        </div>
                                                    </div>


                                                    <div class="row">
                                                        <div class="form-group">
                                                            <label class="col-sm-6">
                                                                <div class="pull-right">
                                                                    Kegiatan :
                                                                </div>
                                                            </label>
                                                            <div class="col-sm-6">{{$espede->keterangan}}</div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group">
                                                            <label class="col-sm-6">
                                                                <div class="pull-right">
                                                                    Nama PPK :
                                                                </div>
                                                            </label>
                                                            <div class="col-sm-6">{{ $espede->nama_ppk}}</div>
                                                        </div>
                                                    </div>


                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                      <a class="btn btn-info btn-simple pull-left" style="width:70px" title="Kembali" data-dismiss="modal">Kembali</a>
                                      <a class="btn btn-warning btn-simple pull-right" style="width:70px" title="Hapus" href="{{ url('admin/listspd/'.$espede->id.'/ubah')}}">Ubah</a>
                                    </div>
                                </div>

<!--
                                    <button type="button" title="Kembali" class="btn btn-default btn-simple" data-dismiss="modal">Kembali</button>
                                    <div class="divider"></div>
                                    <a class="btn btn-warning btn-simple" title="Hapus" href="#">Ganti</a> -->

                            </div>
                           </div>

                             <div class="modal fade" id="modaldelete<?php echo $espede->id;?>" tabindex="-1" role="dialog">
                        <div class="modal-dialog modal-sm" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <h4 class="modal-title"><b>Perhatian</b></h4>
                                </div>

                                <div class="modal-body">
                                    <input type="hidden" value="<?php echo $espede->id;?>" name="id">
                                    <h5>Apakah Anda yakin akan menghapus data ini?</h5>
                                </div>
                                <div class="modal-footer">
                                  <a class="btn btn-info btn-simple pull-left" style="width:70px" title="Kembali" data-dismiss="modal">Tidak</a>
                                  <a class="btn btn-danger btn-simple pull-right" style="width:70px" title="Hapus" href="{{ action('SPDController@delete', $espede->id) }}">Ya</a>
                                </div>
                                <!-- <div class="modal-footer">
                                    <button type="button" class="btn btn-default btn-simple" data-dismiss="modal">Kembali</button>
                                    <div class="divider"></div>
                                    <a class="btn btn-danger btn-simple" title="Hapus" href="{{ action('SPDController@delete', $espede->id) }}">Hapus</a>
                                </div> -->
                            </div>
                        </div>
                    </div>

   <!--   <td>{{$espede->berangkat}}</td>
     <td>{{$espede->tujuan}}</td>
     <td>{{$espede->tanggal}}</td>
     <td>{{$espede->kegiatan}}</td>
     <td>{{$espede->keterangan}}</td>
     <td>{{$espede->nama_ppk}}</td> -->

  </tr>
 @endforeach

 </table>

{!!$result->render()!!}

@endsection
