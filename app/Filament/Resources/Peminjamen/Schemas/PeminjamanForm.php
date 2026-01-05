<?php

namespace App\Filament\Resources\Peminjamen\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class PeminjamanForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nisn')
                    ->required(),
                TextInput::make('nama_siswa')
                    ->label('Nama Siswa')
                    ->required(),
                TextInput::make('nip_petugas')
                    ->required(),
                TextInput::make('judul_buku')
                    ->label('Judul Buku')
                    ->required(),
                DatePicker::make('tanggal_peminjaman_buku')
                    ->required(),
                DatePicker::make('tanggal_pengembalian_buku'),
            ]);
    }
}
