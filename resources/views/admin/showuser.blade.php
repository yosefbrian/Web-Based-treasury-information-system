@extends('layouts.app')

@section('content')
<div class="col-xs-12"><a href="{{ url('admin/registeri') }}" title="Tambah" class="btn btn-default btn-fill">Tambah Pegawai</a>
<!--   <div class="form-group" style="float:right"> -->
    <form action="{{ url('/admin/daftaruser/cari/') }}" method="post" enctype="multipart/form-data">
        <div class="col-xs-9">
          <input class="form-control" type="text" name="kata_kunci" placeholder="Keywords">
          <input type="hidden" name="_token" value="{{ csrf_token() }}"><br>
<!--    <button class="btn btn-round glyphicon glyphicon-search" type="submit"></button>-->
            <button type="submit" class="btn btn-default"><span class="fa fa-search"></span></button>
        </div>
    </form>
  </div>

<div>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>NIP</th>
                    <th>Nama</th>
                </tr>
            </thead>

            <tbody>
                <?php $i=0; ?>
                @foreach ($employeList as $book)
                    <?php $i++; ?>
                <tr>
                    <td>{{ $book->id }}</td>
                    <td>{{ $book->email }}</td>
                    <td>{{ $book->name }}</td>
                    <td><a class="btn btn-warning" data-placement="bottom" title="Edit Data" href="{{ url('admin/editprofiluser/'.$book->id) }}"><span class="glyphicon glyphicon-pencil"></a></td>
                    <td><a class="btn btn-default" data-placement="bottom" title="Edit Data" href="{{ url('admin/gantipassworduser/'.$book->id) }}"><span class="glyphicon glyphicon-pencil"></a></td>
                    <td><a class="btn btn-danger" data-placement="bottom" title="Hapus Data" data-toggle="modal" href="#" data-target="#modaldelete<?php echo $book->id?>"><span class="glyphicon glyphicon-trash"></a></td>

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
                                    <button type="button" class="btn btn-default btn-simple" data-dismiss="modal">Kembali</button>
                                    <div class="divider"></div>
                                    <a class="btn btn-danger btn-simple" title="Hapus" href="{{ action('UserController@delete', $book->id) }}">Hapus</a>
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