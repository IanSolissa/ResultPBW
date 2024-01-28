<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Berita;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Tiket extends Model
{
    use HasFactory;
    protected $guarded=[];


    public function berita():BelongsTo{
        return $this->BelongsTo(Berita::class,'id_berita');
    }

    public function transaksi():HasMany{
        return $this->hasMany(Transaksi::class);
    }

}
