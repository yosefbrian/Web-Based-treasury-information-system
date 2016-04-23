@extends('layouts.app')


@section('content')

<style>
table {
    width:100%;
}
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
    text-align: left;
}
table#t01 tr:nth-child(even) {
    background-color: #eee;
}
table#t01 tr:nth-child(odd) {
   background-color:#fff;
}
table#t01 th	{
    background-color: black;
    color: white;
}
</style>






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
                @foreach ($spd as $espede)
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
                                                                    Tanggal :
                                                                </div>
                                                            </label>
                                                            <div class="col-sm-6">{{$espede->tanggal}}</div>
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

                           <td><a class="btn btn-warning" data-placement="bottom" title="Edit Data" href="{{ url('admin/listspd/'.$espede->id.'/ubah')}}"><span class="glyphicon glyphicon-pencil"></a></td>
                    		
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

{!!$spd->render()!!}

@endsection