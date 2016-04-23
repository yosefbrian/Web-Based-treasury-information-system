<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class notaspd extends Model
{
    protected $table = 'notaspd';
    protected $fillable  = ['judul','deskripsi','filename','create_at','update_at'];
}
