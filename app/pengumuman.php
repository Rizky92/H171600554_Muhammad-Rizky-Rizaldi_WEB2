<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pengumuman extends Model
{
    protected $fillable = ['judul', 'isi', 'users_id', 'kategori_pengumuman_id'];
    protected $table = 'pengumuman';

    public function kategori_pengumuman()
    {
        return $this->belongsTo('App\kategori_pengumuman');
    }

    public function users()
    {
        return $this->belongsTo('App\user');
    }
}
