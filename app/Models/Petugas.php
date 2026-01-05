<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Petugas extends Model
{
    protected $table = 'petugas';

    protected $primaryKey = 'nip_petugas';

    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = [
        'nip_petugas',
        'nama_petugas',
        'jabatan',
        'alamat_petugas'
    ];
}
