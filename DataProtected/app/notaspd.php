<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class notaspd extends Model
{
    protected $table = 'notaspd';
    protected $fillable  = ['judul','deskripsi','filename', 'tanggal_pengiriman', 'tanggal_st','created_at','updated_at'];
}
