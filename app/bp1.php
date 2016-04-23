<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bp1 extends Model
{
    protected $table = 'bp1';

     public function nip1()
	{
		return $this->belongsTo('App\spdcenter','nip');
	}

}
