<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class spdcenter extends Model
{
    protected $table = 'spdcenter';
    public function nip()
	{
		return $this->belongsTo('App\Profil','nip');
	}

	 public function nip1()
	{
		return $this->hasOne('App\spdcenter','nip');
	}
}
