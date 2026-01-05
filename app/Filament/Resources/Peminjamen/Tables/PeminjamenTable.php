<?php

namespace App\Filament\Resources\Peminjamen\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class PeminjamenTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->heading('Data Peminjaman Buku')
            ->description('Daftar transaksi peminjaman dan pengembalian buku')
            ->columns([
                TextColumn::make('nisn')
                    ->searchable(),
                TextColumn::make('siswa.nama_siswa')
                    ->label('Nama Siswa')
                    ->searchable(),
                TextColumn::make('nip_petugas')
                    ->searchable(),
                TextColumn::make('buku.judul_buku')
                    ->label('Judul Buku')
                    ->searchable(),
                TextColumn::make('tanggal_peminjaman_buku')
                    ->date()
                    ->sortable(),
                TextColumn::make('tanggal_pengembalian_buku')
                    ->date()
                    ->sortable(),
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
