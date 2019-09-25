<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    //
    protected $fillable = [
        'nama', 'ket', 'user_id',
    ];

    protected $table = 'kategoris';
}
