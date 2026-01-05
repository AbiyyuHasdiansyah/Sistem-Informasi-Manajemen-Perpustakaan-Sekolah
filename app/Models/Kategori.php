<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = 'kategoris';

    protected $primaryKey = 'kode_kategori';

    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = [
        'nama_kategori',
        'kode_kategori'
    ];
}
