<?php

namespace App\Filament\Resources\Petugas\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class PetugasForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nip_petugas')
                    ->required(),
                TextInput::make('nama_petugas')
                    ->required(),
                TextInput::make('jabatan'),
                Textarea::make('alamat_petugas')
                    ->columnSpanFull(),
            ]);
    }
}
