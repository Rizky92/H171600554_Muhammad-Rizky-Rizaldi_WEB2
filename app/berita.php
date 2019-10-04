<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class berita extends Model
{
    protected $fillable = ['judul', 'isi', 'users_id', 'kategori_berita_id'];
    protected $table = 'berita';

    public function kategori_berita()
    {
        return $this->belongsTo('App\kategori_berita');
    }

    public function users()
    {
        return $this->belongsTo('App\user');
    }
}
