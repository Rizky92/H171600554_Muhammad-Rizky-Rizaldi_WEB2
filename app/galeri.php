<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class galeri extends Model
{
    use SoftDeletes;

    protected $fillable = ['nama', 'keterangan', 'path', 'kategori_galeri_id', 'users_id'];
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];
    protected $table = 'galeri';

    public function kategori_galeri()
    {
        return $this->belongsTo('App\kategori_galeri', 'kategori_galeri_id');
    }

    public function users()
    {
        return $this->belongsTo('App\user', 'users_id');
    }
}
