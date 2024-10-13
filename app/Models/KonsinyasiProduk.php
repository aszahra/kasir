<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KonsinyasiProduk extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_konsinyasi',
        'id_produk',
        'stok',
        'tgl_konsinyasi'
    ];

    protected $table = 'konsinyasiProduk';

    public function konsinyasi()
    {
        return $this->belongsTo(Konsinyasi::class, 'id_konsinyasi', 'id_konsinyasi');
        return $this->belongsTo(Produk::class, 'id_produk', 'id_produk');
    } 
}
