<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bp1 extends Model
{
    protected $table = 'bp1';

    protected $fillable  = ['no_pp','no_pd','nama','nip','pencairan','nama_ppk','keterangan','update_at'];

     public function nip1()
	{
		return $this->belongsTo('App\spdcenter','nip');
	}

}
