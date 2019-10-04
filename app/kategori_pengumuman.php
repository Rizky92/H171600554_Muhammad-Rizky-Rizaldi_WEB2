<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kategori_pengumuman extends Model
{
    protected $fillable = ['nama', 'users_id'];
    protected $table = 'kategori_pengumuman';

    public function users()
    {
        return $this->belongsTo('App\user');
    }
}
