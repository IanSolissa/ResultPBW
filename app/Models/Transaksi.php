<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\User;
use App\Models\Tiket;
class Transaksi extends Model
{
    use HasFactory;
protected $guarded = [];

public function user():BelongsTo{
    return $this->BelongsTo(User::class,'id_user');
}
public function tiket():BelongsTo{
    return $this->BelongsTo(Tiket::class,'id_tiket');
}

}
