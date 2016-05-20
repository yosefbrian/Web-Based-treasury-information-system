<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class peraturan_pbj extends Model
{
    protected $table = 'peraturan_pbj';
    protected $fillable  = ['judul','deskripsi','filename','create_at','update_at'];
}
