<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Serviceitem extends Model
{
    use HasFactory;

    protected $fillable = [
        'no_plat',
        'tanggal',
        'jasa',
        'barang'
    ];

}
