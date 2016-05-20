@extends('layouts.app')

@section('content')

<a href="{!! url('admin/new-post') !!}"><button type="button" class="btn btn-default">Buat Berita</button></a>

<a href="{!! url('admin/bikin') !!}"><button type="button" class="btn btn-default">Buat Pemberitahuan</button></a> 

<a href="{!! url('peraturan') !!}"><button type="button" class="btn btn-default">Edit Peraturan dan Tambah LPJ</button></a> 

@endsection