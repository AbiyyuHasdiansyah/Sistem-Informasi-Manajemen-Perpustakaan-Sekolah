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
        Schema::create('detail_peminjamen', function (Blueprint $table) {
            $table->id('nomor_detail');

            $table->unsignedBigInteger('nomor_pinjam');
            $table->string('kode_buku', 10);
            $table->timestamps();

            $table->foreign('nomor_pinjam')
                ->references('nomor_pinjam')
                ->on('peminjamen')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign('kode_buku')
                ->references('kode_buku')
                ->on('bukus')
                ->onUpdate('cascade')
                ->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_peminjamen');
    }
};
