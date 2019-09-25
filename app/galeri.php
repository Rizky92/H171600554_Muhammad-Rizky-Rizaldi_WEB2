<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class galeri extends Model
{
    protected $fillable = ['nama', 'keterangan', 'path', 'kategori_galeri_id'];
    protected $table = 'galeri';
}
