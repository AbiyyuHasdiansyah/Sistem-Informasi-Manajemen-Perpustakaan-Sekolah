<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetailPeminjaman extends Model
{
    protected $table = 'detailpeminjamen';

    protected $fillable = [
        'nomor_detail',
        'nomor_pinjam',
        'kode_buku'
    ];
}
