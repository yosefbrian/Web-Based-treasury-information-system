<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bp2b extends Model
{
     protected $table = 'bp2b';

     public function spd2b()
	{
		return $this->belongsTo('App\spdcenter','id');
	}
}
