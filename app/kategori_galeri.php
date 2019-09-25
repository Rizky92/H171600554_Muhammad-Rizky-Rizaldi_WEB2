<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kategori_galeri extends Model
{
    protected $fillable = ['nama', 'users_id'];
    protected $table = 'kategori_galeri';
}
