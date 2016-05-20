@extends('layouts.app')


@section('content')
<ol class="breadcrumb">
  <li><a href="{{ url('/') }}">Home</a></li>
  <li><a href="#">Reimbursement</a></li>
  <li><a href="#">List SPD Cari</a></li>
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

<h2>LIST SPD Cari</h2>
<div class="x_title">
</div>

@role(1)
<form action="{{ url('admin/listcari') }}" method="post" enctype="multipart/form-data">
@endrole



@role(3)
<form action="{{ url('spd/listcari') }}" method="post" enctype="multipart/form-data">
@endrole


<input type="hidden" name="_token" value="{{ csrf_token() }}">
<div class="col-xs-2">
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

  <div class="col-xs-2">
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

  <div class="col-xs-2">
  <select name="Tahun" class="form-control"  value="<?php echo substr($tanggal,0,4)?>">
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
</div>
<input class="btn btn-default" type="submit" value="Cari">
</form>

@role(1)
<a data-placement="bottom" title="Download Daftar SPD" href="{{url('admin/listspd/export/'.$tanggal)}}"><i class="fa fa-btn glyphicon glyphicon-download"></i>Download Data</a>
@endrole


@role(3)
<a data-placement="bottom" title="Download Daftar SPD" href="{{url('spd/listspd/export/'.$tanggal)}}"><i class="fa fa-btn glyphicon glyphicon-download"></i>Download Data</a>
@endrole

<table>


  <tr>
    <th>No PD</th>
    <th>No ST</th>
    <th>NIP</th>
    <th>Nama Lengkap</th>
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
     <td> <a class="btn btn-primary" data-placement="bottom" title="Lihat Data" data-toggle="modal" data-id ="espede->id" data-target="#modalshow<?php echo $espede->id;?>" href="#"><span class="glyphicon glyphicon-user"></span></a></td>

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
                                                                    Tanggal Pulang:
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
                                </div>


                                    <button type="button" title="Kembali" class="btn btn-default btn-simple" data-dismiss="modal">Kembali</button>
                                    <div class="divider"></div>
                                    <a class="btn btn-warning btn-simple" title="Hapus" href="#">Ganti</a>

                            </div>
                           </div>

                           @role(1)

                           <td><a class="btn btn-warning" data-placement="bottom" title="Edit Data" href="{{ url('admin/listspd/'.$espede->id.'/ubah')}}"><span class="glyphicon glyphicon-pencil"></a></td>

                           @endrole




                           @role(3)

                           <td><a class="btn btn-warning" data-placement="bottom" title="Edit Data" href="{{ url('spd/listspd/'.$espede->id.'/ubah')}}"><span class="glyphicon glyphicon-pencil"></a></td>

                           @endrole


                    		<td><a class="btn btn-danger" data-placement="bottom" title="Hapus Data" data-toggle="modal" href="#" data-target="#modaldelete<?php echo $espede->id;?>"><span class="glyphicon glyphicon-trash"></a></td>

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
                                    <button type="button" class="btn btn-default btn-simple" data-dismiss="modal">Kembali</button>
                                    <div class="divider"></div>
                                    <a class="btn btn-danger btn-simple" title="Hapus" href="{{ action('SPDController@delete', $espede->id) }}">Hapus</a>
                                </div>
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