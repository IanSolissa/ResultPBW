<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Artis extends Model
{
    use HasFactory;
    
    protected $guarded=[];
    public function berita():HasOne{
        return $this->HasOne(Berita::class);
    }
}
