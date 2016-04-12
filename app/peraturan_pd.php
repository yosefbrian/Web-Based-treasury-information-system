<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class peraturan_pd extends Model
{
    protected $table = 'peraturan_pd';
    protected $fillable  = ['judul','deskripsi','filename','create_at','update_at'];
}
