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
        Schema::create('peminjamen', function (Blueprint $table) {
            $table->id('nomor_pinjam');
            $table->string('nisn', 20);
            $table->string('nama_siswa', 100);
            $table->string('nip_petugas', 20);
            $table->string('kode_buku', 10);
            $table->string('judul_buku', 150);
            $table->date('tanggal_peminjaman_buku');
            $table->date('tanggal_pengembalian_buku')->nullable();
            $table->timestamps();

            $table->foreign('nisn')
                ->references('nisn')
                ->on('siswas')
                ->onUpdate('cascade')
                ->onDelete('restrict'); 

            $table->foreign('nip_petugas')
                ->references('nip_petugas')
                ->on('petugas')
                ->onUpdate('cascade')
                ->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peminjamen');
    }
};
