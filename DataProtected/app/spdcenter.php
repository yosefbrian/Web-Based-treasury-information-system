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
		return $this->hasOne('App\bp1','nip');
	}

	public function spd2()
	{
		return $this->hasOne('App\bp2a','spd_id');
	}

	public function spd2b()
	{
		return $this->hasOne('App\bp2b','spd_id');
	}
}
