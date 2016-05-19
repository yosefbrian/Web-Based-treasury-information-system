@extends('layouts.app')
@section('content')


<form action="{{ action('HomeController@stor') }}" method="post" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="form-group">
        <input value="" placeholder="Caption" type="text" name = "caption" class="form-control" />
    </div>

    <div class="col-xs-7" style="margin-left:-10px">
        <input type="file" class="btn btn-default btn-file" value="fileToUpload" name="fileToUpload" id="fileToUpload"/>
    </div>
    <div class="col-xs-5">
        <input type="submit" class="btn btn-success pull-right" value="Tambah Slider" name="submit"/>
        <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
    </div>

</form>


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



<table style="width:100%">
  <tr>
    <th><center>Laporan Pertanggung Jawaban</th>
    <th><center>Aksi</th>
  </tr>



@foreach($slider as $slid)


<tr>

    <td><a href="upload/slider/<?php echo $slid->filename;?>">{{ $slid->judul }}</a><br><p>{{ $slid->filename }}</p></td>
    <td><center><a class="btn btn-danger" data-placement="bottom" title="Hapus Data" data-toggle="modal" href="#" data-target="#modaldelete<?php echo $slid->id;?>"><span class="glyphicon glyphicon-trash"></a></td>

     <div class="modal fade" id="modaldelete<?php echo $slid->id;?>" tabindex="-1" role="dialog">
                        <div class="modal-dialog modal-sm" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <h4 class="modal-title"><b>Perhatian</b></h4>
                                </div>

                                <div class="modal-body">
                                    <input type="hidden" value="<?php echo $slid->id;?>" name="id">
                                    <h5>Apakah Anda yakin akan menghapus data ini?</h5>
                                </div>
                                <div class="modal-footer">
                                    <a class="btn btn-info btn-simple pull-left" style="width:60px" title="Kembali" data-dismiss="modal">Tidak</a>
                                    <a class="btn btn-danger btn-simple pull-right" style="width:60px" title="Hapus" href="{{ action('HomeController@delete', $slid->id) }}">Ya</a>
                                </div>
                          
                            </div>
                        </div>
                    </div>


  </tr>

@endforeach

</table>


@endsection