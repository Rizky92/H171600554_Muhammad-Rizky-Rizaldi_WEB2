<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
USE Illuminate\Database\Eloquent\SoftDeletes;

class pengumuman extends Model
{
    use SoftDeletes;

    protected $fillable = ['judul', 'isi', 'users_id', 'kategori_pengumuman_id'];
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];
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
