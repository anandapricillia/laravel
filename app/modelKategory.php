<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class modelKategory extends Model
{
    protected $table = 'kategori';
    protected $fillable = [
 
        'nama_kategory',
        'remarks'
    ];
}