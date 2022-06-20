<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orangtua extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function penulis(){
        return $this->belongsTo(Orangtua::class);
    }

    

    
}
