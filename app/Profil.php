<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    

	protected $table = 'profil';
    protected $fillable  = ['nama','nip','jabatan','npwp','jenis_kelamin','nm_status_pegawai','pangkat','jenis_jabatan','unit_organisasi','jabatan_grade','nama_bank','no_rekening','nama_rekening','filename','create_at','update_at'];

    public function profil()
	{
		return $this->belongsTo('App\User','profil_id');
	}
}
