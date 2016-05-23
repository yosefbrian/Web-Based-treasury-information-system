@extends('layouts.app')

@section('content')
<ol class="breadcrumb">
  <li><a href="{{ url('/') }}">Home</a></li>
  <li><a href="#">Reimbursement</a></li>
  <li><a href="#">Bendahara Pengeluaran 1</a></li>
  <li><a href="#">Isi data BP1</a></li>
</ol>

<h2>ISI DATA BP 1</h2>
<div class="x_title">
</div>


<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="{{url('admin/gantipassworduser/'.$bp1->id) }}" method="post" enctype="multipart/form-data" style="margin-top:20px">
@role(1)
 <form action="{{url('/admin/bp1/edit/'.$bp1->id) }}" method="post" enctype="multipart/form-data">
   <input type="hidden" name="_token" value="{{ csrf_token() }}">

  <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">No PP <span class="required"></span></label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <input type="text" name="no_pp" value="" class="form-control col-md-7 col-xs-12">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">No PD <span class="required"></span></label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <input type="text" name="no_pd" value="{{$bp1->no_pd}}" class="form-control col-md-7 col-xs-12">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama <span class="required"></span></label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <input type="text" name="nama" value="{{$bp1->nama}}" class="form-control col-md-7 col-xs-12">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">NIP <span class="required"></span></label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <input type="text" name="nip" value="{{$bp1->nip}}" class="form-control col-md-7 col-xs-12">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Pencairan <span class="required"></span></label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <input type="radio" name="pencairan" value="2"> Cair, Dana Ditransfer<br>
      <input type="radio" name="pencairan" value="1" checked> Cair, Dana Tersedia<br>
      <input type="radio" name="pencairan" value="0"> Batal<br><br>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama PPK <span class="required"></span></label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <input type="text" name="nama_ppk" value="{{bp1->nama_ppk}}" class="form-control col-md-7 col-xs-12">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Keterangan <span class="required"></span></label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <input type="text" name="keterangan" value="" class="form-control col-md-7 col-xs-12">
    </div>
  </div>

  <div class="ln_solid"></div>
  <div class="form-group">
    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
      <button type="submit" class="btn btn-primary">Batal</button>
      <button type="submit" class="btn btn-success">Simpan</button>
      <input type="hidden" name="_token" value="">
    </div>
  </div>

</form>
@endrole


@role(2)
 <form action="{{url('/bp/bp1/edit/'.$bp1->id) }}" method="post" enctype="multipart/form-data">
   <input type="hidden" name="_token" value="{{ csrf_token() }}">
  No PP:<br>
  <input class="form-control" type="text" name="no_pp" ><br>
   No PD:<br>
  <input class="form-control" type="text" name="no_pd" value="{{ $bp1->no_pd }}" ><br>
  Nama:<br>
  <input class="form-control" type="text" name="nama" value="{{ $bp1->nama }}"><br>
  NIP:<br>
  <input class="form-control" type="text" name="nip" value="{{ $bp1->nip }}"><br>


 Pencairan : <br><br>

  <input type="radio" name="pencairan" value="2"> Cair, Dana Ditransfer<br>

  <input type="radio" name="pencairan" value="1" checked> Cair, Dana Tersedia<br>

  <input type="radio" name="pencairan" value="0"> Batal<br><br>


  Nama PPK:<br>
  <input class="form-control" type="text" name="nama_ppk" value="{{ $bp1->nama_ppk }}"><br>
  Keterangan:<br>
  <input class="form-control" type="text" name="keterangan" value=""><br>



  <input class="btn btn-success" type="submit" value="Simpan">
   <input class="btn btn-danger" type="submit" value="Batal">
     <input type="hidden" name="_token" value="{{ csrf_token() }}">
</form>
@endrole


@endsection
