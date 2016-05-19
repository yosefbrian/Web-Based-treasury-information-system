@extends('layouts.app')

@section('content')


<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
}
</style>
</head>
<body>

@role(1)
<form action="{{ url('admin/bp2cari') }}" method="post" enctype="multipart/form-data">
@endrole


@role(5)
<form action="{{ url('bp2/bp2cari') }}" method="post" enctype="multipart/form-data">
@endrole


@role(3)
<form action="{{ url('spd/bp2cari') }}" method="post" enctype="multipart/form-data">
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
<a data-placement="bottom" title="Download Data BP 2" href="{{url('admin/bp2/export/'.$tanggal)}}"><i class="fa fa-btn glyphicon glyphicon-download"></i>Download Data</a>
@endrole


@role(5)
<a data-placement="bottom" title="Download Data BP 2" href="{{url('bp2/bp2/export/'.$tanggal)}}"><i class="fa fa-btn glyphicon glyphicon-download"></i>Download Data</a>
@endrole



<table style="width:100%">
  <tr>
    <th>No SPD</th>
    <th>No PP</th>
    <th>No SPP/SPM</th>   
    <th>tanggal SPP/SPM</th>
    <th></th>
  </tr>


 <?php $i=0; ?>
                @foreach ($result as $bp21)
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

 
<td> <a class="btn btn-primary" data-placement="bottom" title="Lihat Data" data-toggle="modal" data-id ="bp21->id" data-target="#modalshow<?php echo $bp21->id;?>" href="#"><span class="glyphicon glyphicon-user"></span></a></td>

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
                                


@role(1)
 <td><a class="btn btn-warning" data-placement="bottom" title="Edit Data" href="{{ url('admin/bp2/ubah/'.$bp21->id)}}"><span class="glyphicon glyphicon-pencil"></a></td>

@endrole


@role(5)
 <td><a class="btn btn-warning" data-placement="bottom" title="Edit Data" href="{{ url('bp2/bp2/ubah/'.$bp21->id)}}"><span class="glyphicon glyphicon-pencil"></a></td>

@endrole

@role(1)
     <td><a class="btn btn-danger" data-placement="bottom" title="Hapus Data" data-toggle="modal" href="#" data-target="#modaldelete<?php echo $bp21->id;?>"><span class="glyphicon glyphicon-trash"></a></td>
@endrole


@role(5)
     <td><a class="btn btn-danger" data-placement="bottom" title="Hapus Data" data-toggle="modal" href="#" data-target="#modaldelete<?php echo $bp21->id;?>"><span class="glyphicon glyphicon-trash"></a></td>
@endrole
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
                                    <button type="button" class="btn btn-default btn-simple" data-dismiss="modal">Kembali</button>
                                    <div class="divider"></div>
                                    <a class="btn btn-danger btn-simple" title="Hapus" href="{{ action('bpController@delete2', $bp21->id) }}">Hapus</a>
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