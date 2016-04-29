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



<div>
<h2>Reimbursement</h2>
</div>

<br>
<hr>

<table style="width:100%">
    <tr>
        <th>Nota Perjalanan Dinas</th>
        <th>Nomor ST</th>
        <th>Nomor Resi</th>
        <th>Aksi</th>
    </tr>

        @foreach ($nota_list as $nota)
    <tr>

        <td><a href="{{url('upload/notaspd/'.$nota->filename)}}"> {{ $nota->judul }}</a><br><p>{{ $nota->deskripsi }}</p></td>

        <td>{{ $nota->no_st }}</td>
         <td>{{ $nota->no_resi }}</td>

        <td><a class="btn btn-danger" data-placement="bottom" title="Hapus Data" data-toggle="modal" href="#" data-target="#modaldelete<?php echo $nota->id;?>"><span class="glyphicon glyphicon-trash"></a></td>

        <div class="modal fade" id="modaldelete<?php echo $nota->id;?>" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title"><b>Perhatian</b></h4>
                    </div>
                    
                    <div class="modal-body">
                        <input type="hidden" value="<?php echo $nota->id;?>" name="id">
                        <h5>Apakah Anda yakin akan menghapus data ini?</h5>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-simple" data-dismiss="modal">Kembali</button>
                        <div class="divider"></div>
                        <a class="btn btn-danger btn-simple" title="Hapus" href="{{ action('SPDController@deletenota', $nota->id) }}">Hapus</a>
                    </div>
                </div>
            </div>
        </div>
        

  </tr>
  @endforeach
</table>


@endsection