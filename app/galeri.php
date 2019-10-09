<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class galeri extends Model
{
    protected $fillable = ['nama', 'keterangan', 'path', 'kategori_galeri_id'];
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];
    protected $table = 'galeri';

    public function kategori_galeri()
    {
        return $this->belongsTo('App\kategori_galeri');
    }

    public function users()
    {
        return $this->belongsTo('App\user');
    }
}
