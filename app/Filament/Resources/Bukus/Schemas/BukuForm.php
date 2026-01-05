<?php

namespace App\Filament\Resources\Bukus\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class BukuForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('kode_buku')
                    ->required(),
                TextInput::make('judul_buku')
                    ->required(),
                TextInput::make('penulis'),
                DatePicker::make('tanggal_terbit'),
                TextInput::make('kode_kategori')
                    ->required(),
            ]);
    }
}
