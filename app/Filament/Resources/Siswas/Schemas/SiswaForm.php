<?php

namespace App\Filament\Resources\Siswas\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class SiswaForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nisn')
                    ->required(),
                TextInput::make('nama_siswa')
                    ->required(),
                TextInput::make('kelas')
                    ->required(),
                DatePicker::make('tanggal_lahir'),
                Select::make('jenis_kelamin')
                    ->options(['L' => 'L', 'P' => 'P']),
                Textarea::make('alamat_siswa')
                    ->columnSpanFull(),
                TextInput::make('nomor_telepon')
                    ->tel(),
            ]);
    }
}
