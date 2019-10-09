<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class kategori_berita extends Model
{
    use SoftDeletes;

    protected $fillable = ['nama', 'users_id'];
    protected $table = 'kategori_berita';

    public function users()
    {
        return $this->belongsTo('App\user');
    }
}
