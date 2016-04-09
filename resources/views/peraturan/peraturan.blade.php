@extends('layouts.app')

@section('content')

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


<a href="{{ asset('upload/peraturan/SPD.zip') }}">Perjalanan Dinas</a>
<a href="#" data-toggle="modal" data-target="#modalimport"> - Upload Versi Baru- </a>

    <div class="modal fade" id="modalimport" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                                    
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title"><b>Unggah Data</b></h4>
                </div>
            <div class="modal-body">
                <div class="col-xs-12">                          
                    <label for="fileToUpload">Import file</label>
                    <form action="{{ action('ExportController@uploadSPD') }}" method="post" enctype="multipart/form-data" >                                     
                        <div class="col-xs-8 col-md-offset-1">
                          <input type="file" class="btn btn-default btn-file" name="fileToUpload" id="fileToUpload" required="required"/>
                        </div>
                        <div class="col-xs-3">
                            <input type="submit" class="btn btn-success" value="Upload" name="submit"/>
                            <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                        </div>
                    </form>
                </div>
            </div>
                    
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-simple" data-dismiss="modal">Kembali</button>
            </div>
                    
              
            </div>
        </div>
    </div>

<br>
<a href="{{ asset('upload/peraturan/BP.zip') }}">Bendahara Pengeluaran</a>
<a href="#" data-toggle="modal" data-target="#modalimport"> - Upload Versi Baru- </a>

    <div class="modal fade" id="modalimport" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                                    
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title"><b>Unggah Data</b></h4>
                </div>
            <div class="modal-body">
                <div class="col-xs-12">                          
                    <label for="fileToUpload">Import file</label>
                    <form action="{{ action('ExportController@uploadBP') }}" method="post" enctype="multipart/form-data" >                                     
                        <div class="col-xs-8 col-md-offset-1">
                          <input type="file" class="btn btn-default btn-file" name="fileToUpload" id="fileToUpload" required="required"/>
                        </div>
                        <div class="col-xs-3">
                            <input type="submit" class="btn btn-success" value="Upload" name="submit"/>
                            <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                        </div>
                    </form>
                </div>
            </div>
                    
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-simple" data-dismiss="modal">Kembali</button>
            </div>
                    
              
            </div>
        </div>
    </div>

<br>
<a href="{{ asset('upload/peraturan/TUKIN.zip') }}">Tunjangan Kinerja</a>
<a href="#" data-toggle="modal" data-target="#modalimport"> - Upload Versi Baru- </a>

    <div class="modal fade" id="modalimport" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                                    
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title"><b>Unggah Data</b></h4>
                </div>
            <div class="modal-body">
                <div class="col-xs-12">                          
                    <label for="fileToUpload">Import file</label>
                    <form action="{{ action('ExportController@uploadTUKIN') }}" method="post" enctype="multipart/form-data" >                                     
                        <div class="col-xs-8 col-md-offset-1">
                          <input type="file" class="btn btn-default btn-file" name="fileToUpload" id="fileToUpload" required="required"/>
                        </div>
                        <div class="col-xs-3">
                            <input type="submit" class="btn btn-success" value="Upload" name="submit"/>
                            <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                        </div>
                    </form>
                </div>
            </div>
                    
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-simple" data-dismiss="modal">Kembali</button>
            </div>
                    
              
            </div>
        </div>
    </div>
<br>
<a href="{{ asset('upload/peraturan/PBJ.zip') }}">PBJ</a>
<a href="#" data-toggle="modal" data-target="#modalimport"> - Upload Versi Baru- </a>

    <div class="modal fade" id="modalimport" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                                    
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title"><b>Unggah Data</b></h4>
                </div>
            <div class="modal-body">
                <div class="col-xs-12">                          
                    <label for="fileToUpload">Import file</label>
                    <form action="{{ action('ExportController@uploadPBJ') }}" method="post" enctype="multipart/form-data" >                                     
                        <div class="col-xs-8 col-md-offset-1">
                          <input type="file" class="btn btn-default btn-file" name="fileToUpload" id="fileToUpload" required="required"/>
                        </div>
                        <div class="col-xs-3">
                            <input type="submit" class="btn btn-success" value="Upload" name="submit"/>
                            <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                        </div>
                    </form>
                </div>
            </div>
                    
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-simple" data-dismiss="modal">Kembali</button>
            </div>
                    
              
            </div>
        </div>
    </div>
<br>

<br>
<br>
<hr>
 
<div style="float: left; width: 47%"> 
@if ($lpj_list->count())
 <table style="width:100%">
  <tr>
    <th>Laporan Pertanggung Jawaban</th>
  </tr>

  <?php $i=0; ?>
                @foreach ($lpj_list as $lpj)
                    <?php $i++; ?>
  <tr>

    <td><a href="upload/lpj/<?php echo $lpj->filename;?>">{{ $lpj->judul }}</a><br><p>{{ $lpj->deskripsi }}</p></td>
  </tr>
  @endforeach
</table>

@role(1)
{!!$lpj_list->render()!!}
</div>
<div style="float: right; width: 47%">
<h3>Tambah LPJ</h3>
<form action="{{ url('peraturan') }}" method="post" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="form-group">
        <input required="required" value="{{ old('judul') }}" placeholder="Judul LPJ" type="text" name = "judul" class="form-control" />
    </div>

    <div class="form-group">
        <input required="required" value="{{ old('deskripsi') }}" placeholder="Deskripsi" type="text" name = "deskripsi" class="form-control" />
    </div>
                     
    <div class="col-xs-8">
        <input type="file" class="btn btn-default btn-file" name="fileToUpload" id="fileToUpload" required="required"/>
    </div>
    <div class="col-xs-3">
        <input type="submit" class="btn btn-success" value="Tambah LPJ" name="submit"/>
        <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
    </div>

 
@endrole
@endif
@endsection