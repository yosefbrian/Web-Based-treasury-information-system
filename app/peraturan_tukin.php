<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class peraturan_tukin extends Model
{
    protected $table = 'peraturan_tukin';
    protected $fillable  = ['judul','deskripsi','filename','create_at','update_at'];
}
