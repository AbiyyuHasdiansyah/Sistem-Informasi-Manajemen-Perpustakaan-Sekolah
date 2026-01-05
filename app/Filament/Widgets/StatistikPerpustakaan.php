<?php

namespace App\Filament\Widgets;

use App\Models\Buku;
use App\Models\Siswa;
use App\Models\Peminjaman;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatistikPerpustakaan extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Buku', Buku::count()),
            Stat::make('Total Siswa', Siswa::count()),
            Stat::make('Peminjaman Aktif', 
                Peminjaman::whereNotNull('tanggal_peminjaman_buku')->count()
            ),
        ];
    }
}
