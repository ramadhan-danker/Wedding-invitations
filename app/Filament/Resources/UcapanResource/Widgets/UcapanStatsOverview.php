<?php

namespace App\Filament\Resources\UcapanResource\Widgets;

use App\Models\Ucapan;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;
use Illuminate\Support\Facades\DB;

class UcapanStatsOverview extends BaseWidget
{
    protected function getCards(): array
    {

        return [
            Card::make('Semua Ucapan', Ucapan::all()->count()),
            Card::make('Hadir', Ucapan::where('hadir', 'like', '%Saya Akan Hadir%')->count()),
            Card::make('Tidak Hadir', Ucapan::where('hadir', 'like', '%Mohon Maaf Saya tidak Hadir%')->count()),
            Card::make('Ragu Ragu', Ucapan::where('hadir', 'like', '%Saya Masih Ragu-Ragu%')->count()),
            // Card::make('Semua orang', Ucapan::where('jumlahOrang', '>', 0)->sum('jumlahOrang')),
        ];
    }
}
