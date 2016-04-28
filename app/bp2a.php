<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bp2a extends Model
{
    protected $table = 'bp2a';

     public function spd2()
	{
		return $this->belongsTo('App\spdcenter','id');
	}
}
