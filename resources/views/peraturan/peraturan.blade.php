@extends('layouts.app')

@section('content')
<ol class="breadcrumb">
  <li><a href="{{ url('/') }}">Home</a></li>
  <li><a href="#">Peraturan</a></li>
  <li><a href="#">Laporan Pertanggungjawaban</a></li>
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

<h2>DOWNLOAD PERATURAN</h2>

<div class="control-label col-md-3 col-sm-3 col-xs-12">
@if ($lpj_list->count())
 <table style="width:100%">
  <tr>
    <th>Laporan Pertanggung Jawaban</th>
    <th>Aksi</th>
  </tr>

  <?php $i=0; ?>
                @foreach ($lpj_list as $lpj)
                    <?php $i++; ?>
  <tr>

    <td><a href="upload/lpj/<?php echo $lpj->filename;?>">{{ $lpj->judul }}</a><br><p>{{ $lpj->deskripsi }}</p></td>
    <td><center><a class="btn btn-danger" data-placement="bottom" title="Hapus Data" data-toggle="modal" href="#" data-target="#modaldelete<?php echo $lpj->id;?>"><span class="glyphicon glyphicon-trash"></a></td>

     <div class="modal fade" id="modaldelete<?php echo $lpj->id;?>" tabindex="-1" role="dialog">
                        <div class="modal-dialog modal-sm" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <h4 class="modal-title"><b>Perhatian</b></h4>
                                </div>

                                <div class="modal-body">
                                    <input type="hidden" value="<?php echo $lpj->id;?>" name="id">
                                    <h5>Apakah Anda yakin akan menghapus data ini?</h5>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default btn-simple" data-dismiss="modal">Kembali</button>
                                    <div class="divider"></div>
                                    <a class="btn btn-danger btn-simple" title="Hapus" href="{{ action('PeraturanController@delete', $lpj->id) }}">Hapus</a>
                                </div>
                            </div>
                        </div>
                    </div>


  </tr>
  @endforeach
</table>

@role(1)
{!!$lpj_list->render()!!}
</div>
<div class="col-md-6 col-sm-6 col-xs-12">
<h3>Tambah LPJ</h3>
<form action="{{ url('peraturan') }}" method="post" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="form-group">
        <input required="required" value="{{ old('judul') }}" placeholder="Judul LPJ" type="text" name = "judul" class="form-control" />
    </div>

    <div class="form-group">
        <input required="required" value="{{ old('deskripsi') }}" placeholder="Deskripsi" type="text" name = "deskripsi" class="form-control" />
    </div>

    <div class="col-xs-7" style="margin-left:-10px">
        <input type="file" class="btn btn-default btn-file" value="fileToUpload" name="fileToUpload" id="fileToUpload" required="required"/>
    </div>
    <div class="col-xs-5">
        <input type="submit" class="btn btn-success pull-right" value="Tambah LPJ" name="submit"/>
        <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
    </div>


@endrole
@endif
@endsection
