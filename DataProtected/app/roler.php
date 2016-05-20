<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class roler extends Model
{
    protected $table = 'role_user';
    protected $fillable  = ['role_id','user_id'];

    public function userrole()
	{
		return $this->belongsTo('App\User', 'user_id');
	}
	public function rolerole()
	{
		return $this->belongsTo('App\Role', 'role_id');
	}
}
