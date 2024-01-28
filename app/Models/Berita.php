<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use App\Models\Artis;

class Berita extends Model
{
    use HasFactory;
    protected $guarded=[''];
    public function artis():BelongsTo{
        return $this->belongsTo(Artis::class,'id_artis');
    }
    public function tiket():HasMany{
        return $this->HasMany(Tiket::class);
    }

}
