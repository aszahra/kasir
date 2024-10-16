<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('konsinyasiproduk', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_konsinyasi');
            $table->foreignId('id_produk');
            $table->integer('stok');
            $table->date('tgl_konsinyasi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('konsinyasiproduk');
    }
};
