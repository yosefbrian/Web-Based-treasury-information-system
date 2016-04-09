<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lpj extends Model
{
    protected $table = 'lpj';
    protected $fillable  = ['judul','deskripsi','filename','create_at','update_at'];
}
