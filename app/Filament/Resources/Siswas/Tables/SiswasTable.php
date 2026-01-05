<?php

namespace App\Filament\Resources\Siswas\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class SiswasTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->striped(false)
            ->heading('Data Siswa')
            ->description('Informasi siswa yang terdaftar sebagai anggota perpustakaan')
            ->columns([
                TextColumn::make('nisn')
                    ->searchable(),
                TextColumn::make('nama_siswa')
                    ->searchable(),
                TextColumn::make('kelas')
                    ->searchable(),
                TextColumn::make('tanggal_lahir')
                    ->date()
                    ->sortable(),
                TextColumn::make('jenis_kelamin'),
                TextColumn::make('nomor_telepon')
                    ->searchable(),
                Textcolumn::make('alamat_siswa'),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
