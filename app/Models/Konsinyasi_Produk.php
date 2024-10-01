<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Konsinyasi_Produk extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_konsinyasi',
        'id_produk',
        'id_konsinyasi',
        'id_konsinyasi',
    ];
    
    protected $table = 'konsinyasi_produk';
}
