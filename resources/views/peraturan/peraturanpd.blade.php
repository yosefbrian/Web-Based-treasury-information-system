@extends('layouts.app')

@section('content')

<ol class="breadcrumb">
  <li><a href="{{ url('/') }}">Home</a></li>
  <li><a href="#">Peraturan</a></li>
  <li><a href="#">Peraturan Perjalanan Dinas</a></li>
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

<h2>PERATURAN PERJALANAN DINAS</h2>
<div class="x_title">
</div>
@if(Session::has('flash_message_tambah'))
    <div class="alert alert-success"><strong>Sukses!</strong> Anda berhasil menambah peraturan perjalanan dinas.<em> {!! session('flash_message') !!}</em></div>
@endif
@if(Session::has('flash_message_hapus'))
    <div class="alert alert-success"><strong>Sukses!</strong> Anda berhasil menghapus peraturan perjalanan dinas.<em> {!! session('flash_message') !!}</em></div>
@endif
  <div class="col-md-6 col-sm-3 col-xs-12">
    <h2>Download Peraturan Perjalanan Dinas</h2>

<table style="width:100%">
    <tr>
        <th><center>Peraturan Perjalanan Dinas</th>
        <th><center>Aksi</th>
    </tr>

    <?php $i=0; ?>
        @foreach ($pd_list as $pd)
    <?php $i++; ?>
    <tr>

        <td><a href="upload/peraturan/pd/<?php echo $pd->filename;?>">{{ $pd->judul }}</a><br><p>{{ $pd->deskripsi }}</p></td>
        <td><center><a class="btn btn-danger" data-placement="bottom" title="Hapus Data" data-toggle="modal" href="#" data-target="#modaldelete<?php echo $pd->id;?>"><span class="glyphicon glyphicon-trash"></a></td>

        <div class="modal fade" id="modaldelete<?php echo $pd->id;?>" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title"><b>Perhatian</b></h4>
                    </div>

                    <div class="modal-body">
                        <input type="hidden" value="<?php echo $pd->id;?>" name="id">
                        <h5>Apakah Anda yakin akan menghapus data ini?</h5>
                    </div>
                    <div class="modal-footer">
                        <a class="btn btn-info btn-simple pull-left" data-dismiss="modal" style="width:60px;">Tidak</a>
                        <a class="btn btn-danger btn-simple pull-right" title="Hapus" href="{{ action('PeraturanController@deletepd', $pd->id) }}" style="width:60px;">Ya</a>
                    </div>
                </div>
            </div>
        </div>


  </tr>
  @endforeach
</table>

@role(1)
{!!$pd_list->render()!!}
</div>
<div class="col-md-6 col-sm-6 col-xs-12">
<h2>Tambah Peraturan</h2>
<form action="{{ url('peraturanpd') }}" method="post" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="form-group">
        <input required="required" value="{{ old('judul') }}" placeholder="Judul Peraturan" type="text" name = "judul" class="form-control" />
    </div>

    <div class="form-group">
        <input required="required" value="{{ old('deskripsi') }}" placeholder="Deskripsi" type="text" name = "deskripsi" class="form-control" />
    </div>

    <div class="col-xs-7" style="margin-left:-10px">
        <input type="file" class="btn btn-default btn-file" name="fileToUpload" id="fileToUpload" required="required"/>
    </div>
    <div class="col-xs-5">
        <input type="submit" class="btn btn-success pull-right" value="Tambah Peraturan" name="submit"/>
        <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
    </div>



@endrole
@endsection
