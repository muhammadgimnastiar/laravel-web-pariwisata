<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Berita extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $table = "berita";
    protected $fillable = ['judul','picture', 'content', 'kategori_id'];

    public function kategori(){
        return $this->belongsTo(Kategori::class);
    }

    public function penulis(){
        return $this->belongsToMany(Penulis::class);
    }
}
