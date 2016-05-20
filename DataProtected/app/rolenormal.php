<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rolenormal extends Model
{
    protected $table = 'roles';
    //protected $fillable  = ['role_id','user_id'];

 //    public function userrole()
	// {
	// 	return $this->belongsTo('App\User', 'user_id');
	// }
	public function rolerole()
	{
		return $this->hasMany('App\roler', 'role_id');
	}
}
