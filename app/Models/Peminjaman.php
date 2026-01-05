<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    protected $table = 'peminjamen';

    protected $primaryKey = 'nomor_pinjam';

    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = [
        'nisn',
        'siswa.nama_siswa',
        'nomor_pinjam',
        'nip_petugas',
        'kode_buku',
        'buku.judul_buku',
        'tanggal_peminjaman_buku',
        'tanggal_pengembalian_buku',
        'status'
    ];

    public function siswa()
    {
        return $this->belongsTo(Siswa::class, 'nisn');
    }

    public function buku()
    {
        return $this->belongsTo(Buku::class, 'kode_buku');
    }

    public function getJudulBukuAttribute()
    {
        return $this->buku?->judul_buku;
    }
}
