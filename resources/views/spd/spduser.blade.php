@extends('layouts.app')


@section('content')
<ol class="breadcrumb">
  <li><a href="{{ url('/') }}">Home</a></li>
  <li><a href="#">Reimbursement</a></li>
  <li><a href="#">SPD Center</a></li>
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


<h2>REIMBURSEMENT</h2>
<div class="x_title">
</div>

<table>


  <tr>
    <th>No SPD</th>
    <th>Tanggal</th>
    <th>Tujuan</th>
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
     <td>{{$espede->tanggal}}</td>
     <td>{{$espede->tujuan}}</td>
     <td> 

<a class="btn btn-primary" data-placement="bottom" title="Lihat Data" data-toggle="modal" data-id ="book->id" data-target="#modalshow1<?php echo $espede->id;?>" href="#">Detil SPD</a>

     <a class="btn btn-success" data-placement="bottom" title="Lihat Data" data-toggle="modal" data-id ="book->id" data-target="#modalshow<?php echo $espede->id;?>" href="#">Upload Nota</a>
    <a class="btn btn-primary" title="Lihat Nota" href="{{ action('SPDController@lihat', $espede->id) }}">Lihat Nota</a>
     <a class="btn btn-success" data-id ="espede->id" data-target="#checklist<?php echo $espede->id;?>" data-toggle="modal" href="#">Checklist</a>
     </td>


     <div id="checklist<?php echo $espede->id;?>" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Checklist</h4>
      </div>
      <div class="modal-body">
        

<?php  

$bppd = 0;
$pengiriman = 0;
$pencairan = 0;
$kondisi = 0;


foreach ($nota as $notas) { 
    $notasatu = $notas->no_st;

    if($notasatu == $espede->no_st){
        $kondisi = $espede->no_st;
    }
}



 $pengiriman = $espede->pengiriman;

foreach ($bp1 as $bepe1) { 
    $bpsatu = $bepe1->no_pd;
    if($bpsatu == $espede->no_pd){
        $bppd = $espede->no_pd;
        
        $pencairan = $bepe1->pencairan;
    }
}



?>
 


@if($espede->pengiriman=='0' and $kondisi==null)
 <input type="checkbox" name="pengiriman"  disabled="disabled"> Pengiriman<br>
@endif

@if($espede->pengiriman=='1' || $kondisi!=null)
 <input type="checkbox" name="pengiriman"  checked="checked" disabled="disabled"> Pengiriman<br>
@endif

<input type="checkbox" name="pengiriman" value="{{ $espede->id }}" checked="checked" disabled="disabled"> SPD Center <br>

@if($bppd != null)

<input type="checkbox" name="pengiriman"  checked="checked" disabled="disabled"> BP <br>

@endif

@if($bppd == null)

<input type="checkbox" name="pengiriman"  disabled="disabled"> BP <br>

@endif

@if($pencairan == '1')

<input type="checkbox" name="pengiriman"  disabled="disabled" checked="checked"> Cair Dana Tersedia <br>

@endif

@if($pencairan == '2')
<input type="checkbox" name="pengiriman"  disabled="disabled" checked="checked"> Cair Dana Telah Ditransfer <br>

@endif

@if($pencairan == '0' )

<input type="checkbox" name="pengiriman" value="$pencairan" disabled="disabled" > Cair Dana Tersedia <br>

<input type="checkbox" name="pengiriman" value="$pencairan" disabled="disabled" > Cair Dana Telah Ditransfer <br>


@endif




      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>     



    <div id="modalshow<?php echo $espede->id;?>" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">


<form  action="{{ url('/spdcenter/'.$espede->id) }}" method="post" enctype="multipart/form-data">

Nomor ST :<br>
  <input class="form-control" type="text" name="no_st" value="<?php echo $espede->no_st;?>"><br>

No Resi :<br>
  <input class="form-control" type="text" name="no_resi" value=""><br>

Judul Nota :<br>
  <input class="form-control" type="text" name="judul" value=""><br>

Deskripsi Nota :<br>
  <input class="form-control" type="text" name="deskripsi" value=""><br>


<div id="tanggal_pengiriman">

Tanggal Pengiriman:<br>
 <div class="col-xs-2">
  <select name="Tanggal_pengiriman" class="form-control">
    <option> - Hari - </option>
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

  <div class="col-xs-2">
  <select name="Bulan_pengiriman" class="form-control">
    <option> - Bulan - </option>
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

  <div class="col-xs-2">
  <select name="Tahun_pengiriman" class="form-control">
    <option> - Tahun - </option>
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

<br>
<br>


</div>



    <div class="col-xs-8">
        <input type="file" class="btn btn-default btn-file" value="fileToUpload" name="fileToUpload" id="fileToUpload" required="required"/>
    </div>


<input class="btn btn-success" type="submit" value="Simpan"/>
<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />



</form>



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>












     <div class="modal fade" id="modalshow1<?php echo $espede->id;?>" tabindex="-1" role="dialog">
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
                                    
                            </div>
                           </div>
                          <!--  <td><a class="btn btn-warning" data-placement="bottom" title="Edit Data" href="{{ url('admin/listspd/'.$espede->id.'/ubah')}}"><span class="glyphicon glyphicon-pencil"></a></td>

                    		<td><a class="btn btn-danger" data-placement="bottom" title="Hapus Data" data-toggle="modal" href="#" data-target="#modaldelete<?php echo $espede->id;?>"><span class="glyphicon glyphicon-trash"></a></td> -->

                           <!--   <div class="modal fade" id="modaldelete<?php echo $espede->id;?>" tabindex="-1" role="dialog">
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
 -->
   <!--   <td>{{$espede->berangkat}}</td>
     <td>{{$espede->tujuan}}</td>
     <td>{{$espede->tanggal}}</td>
     <td>{{$espede->kegiatan}}</td>
     <td>{{$espede->keterangan}}</td>
     <td>{{$espede->nama_ppk}}</td> -->

  </tr>
 @endforeach

 </table>


@endsection
