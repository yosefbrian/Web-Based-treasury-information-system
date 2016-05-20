<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diary extends Model {

	//posts table in database
	protected $table = 'diary';
	protected $fillable = ['title', 'body', 'slug', 'active'];
	protected $guarded = [];
	
	public function author()
	{
		return $this->belongsTo('App\User','author_id');
	}

}
