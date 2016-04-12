@extends('layouts.app')
@section('content')

<a href="{!! url('admin/editprofil') !!}">Edit Profil</a>
<h1>PROFIL</h1>

<?php $i=0; ?>
         @foreach ($profil as $profile)
                    <?php $i++; ?>

<p> Nama : {{ $profile->nama }}</p> <br>
<p>NIP 	:{{ $profile->nip }}</p>	<br>
<p>Jabatan :{{ $profile->jabatan }}</p>	<br>
<p>NPWP :{{ $profile->npwp }}</p>	<br>
<p>Jenis Kelamin :{{ $profile->jenis_kelamin }}</p>	<br>
<p>NM Status Pegawai :{{ $profile->nm_status_pegawai }}</p>	<br>
<p>Pangkat :{{ $profile->pangkat }}</p>	<br>
<p>Jenis jaabatan :{{ $profile->jenis_jabatan }}</p>	<br>
<p>Unit organisasi :{{ $profile->unit_organisasi }}</p>	<br>
<p>Jabatan Grade :{{ $profile->jabatan_grade }}</p>	<br>
<p>Nama Bank :{{ $profile->nama_bank }}</p>	<br>
<p>Nomor Rekening :{{ $profile->no_rekening }}</p>	<br>
<p>Nama Rekening :{{ $profile->nama_rekening }}</p>	<br>

@endforeach


@endsection