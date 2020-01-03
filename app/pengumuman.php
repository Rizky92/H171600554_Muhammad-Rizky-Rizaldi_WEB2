<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class pengumuman extends Model
{
    use SoftDeletes;

    protected $fillable = ['judul', 'isi', 'users_id', 'kategori_pengumuman_id'];
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];
    protected $table = 'pengumuman';

    public function kategori_pengumuman()
    {
        return $this->belongsTo('App\kategori_pengumuman', 'kategori_pengumuman_id');
    }

    public function users()
    {
        return $this->belongsTo('App\user', 'users_id');
    }
}
