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
        Schema::create('bukus', function (Blueprint $table) {
            $table->string('kode_buku', 10)->primary();
            $table->string('judul_buku', 150);
            $table->string('penulis', 100)->nullable();
            $table->date('tanggal_terbit')->nullable();

            $table->string('kode_kategori', 10);
            $table->timestamps();

            $table->foreign('kode_kategori')
                ->references('kode_kategori')
                ->on('kategoris')
                ->onUpdate('cascade')
                ->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bukus');
    }
};
