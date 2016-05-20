<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pemberitahuan extends Model
{
     protected $table = 'pemberitahuan';
    protected $fillable  = ['judul','deskripsi','filename','create_at','update_at'];
}
