<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class artikel extends Model
{
    protected $fillable = ['judul', 'isi', 'users_id', 'kategori_artikel_id'];
    protected $table = 'artikel';

    public function kategori_artikel()
    {
        return $this->belongsTo('App\kategori_artikel');
    }

    public function users()
    {
        return $this->belongsTo('App\user');
    }
}
