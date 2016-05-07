@extends('layouts.app')

@section('content')

@role(1)
<ol class="breadcrumb">
  <li><a href="{{ url('/') }}">Home</a></li>
  <li><a href="{{ url('admin/bp1')}}">Reimbursement</a></li>
  <li><a href="{{ url('admin/bp1')}}">Bendahara Pengeluaran</a></li>
  <li><a href="#">List BP 1</a></li>
</ol>
@endrole

@role(2)
<ol class="breadcrumb">
  <li><a href="{{ url('/') }}">Home</a></li>
  <li><a href="{{ url('bp/bp1')}}">Reimbursement</a></li>
  <li><a href="{{ url('bp/bp1')}}">Bendahara Pengeluaran</a></li>
  <li><a href="#">List BP 1</a></li>
</ol>
@endrole

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

<h2>LIST BENDAHARA PENGELUARAN 1
<div class="x_title">
</div>

<body>

@role(1)
<a href="{{url('admin/bp1/show')}}"><button>kembali</button></a>
@endrole

@role(2)
<a href="{{url('bps/bp1/show')}}"><button>kembali</button></a>
@endrole


<table>
  <tr>
    <th>No PP</th>
    <th>No PD</th>
    <th>Nama</th>
    <th>NIP</th>
    <th>Pencairan</th>
    <th>Nama PPK</th>
    <th>Keterangan</th>
    <th></th>
  </tr>


 <?php $i=0; ?>
                @foreach ($result as $bp11)
                    <?php $i++; ?>
  <tr>
    <td>{{$bp11->no_pp}}</td>
    <td>{{$bp11->no_pd}}</td>
    <td>{{$bp11->nama}}</td>
     <td>{{$bp11->nip}}</td>
    <td>{{ $bp11->pencairan }}</td>
    <td>{{ $bp11->nama_ppk }}</td>
     <td>{{ $bp11->keterangan }}</td>

@role(1)
 <td><a class="btn btn-warning" data-placement="bottom" title="Edit Data" href="{{ url('admin/bp1/ubah/'.$bp11->id)}}"><span class="glyphicon glyphicon-pencil"></a></td>
@endrole

@role(1)
 <td><a class="btn btn-warning" data-placement="bottom" title="Edit Data" href="{{ url('bp/bp1/ubah/'.$bp11->id)}}"><span class="glyphicon glyphicon-pencil"></a></td>
@endrole



     <td><a class="btn btn-danger" data-placement="bottom" title="Hapus Data" data-toggle="modal" href="#" data-target="#modaldelete<?php echo $bp11->id;?>"><span class="glyphicon glyphicon-trash"></a></td>

                             <div class="modal fade" id="modaldelete<?php echo $bp11->id;?>" tabindex="-1" role="dialog">
                        <div class="modal-dialog modal-sm" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <h4 class="modal-title"><b>Perhatian</b></h4>
                                </div>

                                <div class="modal-body">
                                    <input type="hidden" value="<?php echo $bp11->id;?>" name="id">
                                    <h5>Apakah Anda yakin akan menghapus data ini?</h5>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default btn-simple" data-dismiss="modal">Kembali</button>
                                    <div class="divider"></div>
                                    <a class="btn btn-danger btn-simple" title="Hapus" href="{{ action('bpController@delete', $bp11->id) }}">Hapus</a>
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
