<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $table = 'bukus';

    protected $primaryKey = 'kode_buku';

    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = [
        'kode_buku',
        'judul_buku',
        'penulis',
        'tanggal_terbit',
        'kode_kategori'
    ];
}
