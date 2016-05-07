@extends('layouts.app')

@section('content')
<ol class="breadcrumb">
  <li><a href="{{ url('/') }}">Home</a></li>
  <li><a href="#">Daftar User</a></li>
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

<h2>DAFTAR USER
  <a href="{{ url('admin/registeri') }}" type="button" class="btn btn-success btn-simple pull-right" style="float:right; margin-top:-5px"><i class="fa fa-plus-square" style="margin-right:10px"></i>Tambah User</a>
</h2>
<div class="x_title">
</div>


<!-- <div class="col-xs-12"><a href="{{ url('admin/registeri') }}" title="Tambah" class="btn btn-default btn-fill">Tambah Pegawai</a> -->
<!--   <div class="form-group" style="float:right"> -->
    <form action="{{ url('/admin/daftaruser/cari/') }}" method="post" enctype="multipart/form-data">
      <button type="submit" class="btn btn-default pull-right"><span class="fa fa-search"></span></button>
        <div class="col-sm-4 pull-right">
          <input class="form-control"  type="text" name="kata_kunci" placeholder="cari.." >
          <input type="hidden" name="_token" value="{{ csrf_token() }}"><br>
<!--    <button class="btn btn-round glyphicon glyphicon-search" type="submit"></button>-->
        </div>
    </form>
  </div>

<div>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th class="text-center">Id</th>
                    <th class="text-center">NIP</th>
                    <th class="text-center">Nama</th>
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>

            <tbody>
                <?php $i=0; ?>
                @foreach ($employeList as $book)
                    <?php $i++; ?>
                <tr>
                    <td class="text-center">{{ $book->id }}</td>
                    <td >{{ $book->email }}</td>
                    <td >{{ $book->name }}</td>
                    <td class="text-center">
                      <a class="btn btn-warning" data-placement="bottom" title="Edit Data" href="{{ url('admin/editprofiluser/'.$book->id) }}"><span class="glyphicon glyphicon-pencil"></a>
                      <a class="btn btn-primary" data-placement="bottom" title="Edit Data" href="{{ url('admin/gantipassworduser/'.$book->id) }}"><span class="fa fa-key"></a>
                      <a class="btn btn-danger" data-placement="bottom" title="Hapus Data" data-toggle="modal" href="#" data-target="#modaldelete<?php echo $book->id?>"><span class="glyphicon glyphicon-trash"></a>
                    </td>

                    <div class="modal fade" id="modaldelete<?php echo $book->id?>" tabindex="-1" role="dialog">
                        <div class="modal-dialog modal-sm" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <h4 class="modal-title"><b>Perhatian</b></h4>
                                </div>

                                <div class="modal-body">
                                    <input type="hidden" value="<?php echo $book->id;?>" name="id">
                                    <h5>Apakah Anda yakin akan menghapus data ini?</h5>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-info btn-simple pull-left" data-dismiss="modal" style="width:60px">Tidak</button>
                                    <a class="btn btn-danger btn-simple pull-right" title="Hapus" style="width:60px" href="{{ action('UserController@delete', $book->id) }}">Ya</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </tr>
                @endforeach
            </tbody>
        </table>
        <center>
        {!!$employeList->render()!!}

</div>
@endsection
