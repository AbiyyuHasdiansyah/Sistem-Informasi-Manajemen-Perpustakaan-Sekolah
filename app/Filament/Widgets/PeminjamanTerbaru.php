<?php

namespace App\Filament\Widgets;

use App\Models\Peminjaman;
use Filament\Widgets\TableWidget as BaseWidget;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;

class PeminjamanTerbaru extends BaseWidget
{
    protected static ?string $heading = 'Peminjaman Terbaru';

    protected function getTableQuery(): Builder
    {
        return Peminjaman::query()
            ->with(['siswa', 'buku'])
            ->latest();
    }

    protected function getTableColumns(): array
    {
        return [
            Tables\Columns\TextColumn::make('siswa.nama_siswa',)
                ->label('Nama Siswa'),

            Tables\Columns\TextColumn::make('buku.judul_buku')
                ->label('Judul Buku'),

            Tables\Columns\TextColumn::make('tanggal_peminjaman_buku')
                ->date(),
        ];
    }
}
