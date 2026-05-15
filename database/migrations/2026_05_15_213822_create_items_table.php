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
    Schema::create('items', function (Blueprint $table) {
        $table->id();
        $table->string('nama_barang');
        $table->text('deskripsi');
        $table->string('kategori');
        $table->string('kondisi'); // Contoh: Sangat Bagus, Layak Pakai
        $table->string('kontak_pemilik'); // Nomor WA atau Email
        $table->timestamps();
    });
}
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
