<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penulis extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function orangtua(){
        return $this->hasOne(Orangtua::class);
    }

    public function berita(){
        return $this->belongsToMany(Berita::class);
    }
}
