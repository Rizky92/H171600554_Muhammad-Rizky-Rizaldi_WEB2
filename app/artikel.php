<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class artikel extends Model
{
    use SoftDeletes;

    protected $fillable = ['judul', 'isi', 'users_id', 'kategori_artikel_id'];
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];
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
