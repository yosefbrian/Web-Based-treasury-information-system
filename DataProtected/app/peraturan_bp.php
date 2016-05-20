<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class peraturan_bp extends Model
{
    protected $table = 'peraturan_bp';
    protected $fillable  = ['judul','deskripsi','filename','create_at','update_at'];
}
