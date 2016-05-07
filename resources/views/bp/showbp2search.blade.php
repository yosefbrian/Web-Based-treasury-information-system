@extends('layouts.app')

@section('content')


<!DOCTYPE html>
<ol class="breadcrumb">
  <li><a href="{{ url('/') }}">Home</a></li>
  <li><a href="{{ url('admin/bp2')}}">Reimbursement</a></li>
  <li><a href="{{ url('admin/bp2')}}">Bendahara Pengeluaran</a></li>
  <li><a href="#">List BP 2</a></li>
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
  <a  title="Download Data BP 2" href="{{url('admin/bp2/export')}}" title="Download Daftar SPD" type="button" class="btn btn-info btn-simple pull-right" style="float:right; margin-top:-5px"><i class="fa fa-download" style="margin-right:10px"></i>Download Data</a>
  <!-- <a data-placement="bottom" title="Download Data BP 2" href="{{url('admin/bp2/export')}}"><i class="fa fa-btn glyphicon glyphicon-download"></i>Download Data</a> -->


<a href="{{url('admin/bp2a/show')}}"><button>kembali</button></a>

</h2>
<div class="x_title">
</div>
<body>

<form action="{{ url('admin/bp2cari') }}" method="post" enctype="multipart/form-data">
  <input class="btn btn-default" type="submit" value="Cari" style="float:right">
<input type="hidden" name="_token" value="{{ csrf_token() }}">



</form>





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




 <td><a class="btn btn-warning" data-placement="bottom" title="Edit Data" href="{{ url('admin/bp2/ubah/'.$bp21->id)}}"><span class="glyphicon glyphicon-pencil"></a></td>


     <td><a class="btn btn-danger" data-placement="bottom" title="Hapus Data" data-toggle="modal" href="#" data-target="#modaldelete<?php echo $bp21->id;?>"><span class="glyphicon glyphicon-trash"></a></td>

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
