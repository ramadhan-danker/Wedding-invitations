<?php

namespace App\Filament\Resources\UcapanResource\Pages;

use App\Filament\Resources\UcapanResource;
use App\Filament\Resources\UcapanResource\Widgets\UcapanStatsOverview;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageUcapans extends ManageRecords
{
    protected static string $resource = UcapanResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    protected function getHeaderWidgets(): array
    {
        return [
            UcapanStatsOverview::class
        ];
    }
}
