<?php

namespace App\Filament\Resources\Bukus\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class BukusTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->striped()
            ->heading('Daftar Buku Perpustakaan')
            ->description('Data koleksi buku yang tersedia di perpustakaan sekolah')
            ->columns([
                TextColumn::make('kode_buku')
                    ->searchable(),
                TextColumn::make('judul_buku')
                    ->searchable(),
                TextColumn::make('penulis')
                    ->searchable(),
                TextColumn::make('tanggal_terbit')
                    ->date()
                    ->sortable(),
                TextColumn::make('kode_kategori')
                    ->searchable(),
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
