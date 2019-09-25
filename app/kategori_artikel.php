<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kategori_artikel extends Model
{
    protected $fillable = ['nama', 'users_id'];
    protected $table = 'kategori_artikel';
}
