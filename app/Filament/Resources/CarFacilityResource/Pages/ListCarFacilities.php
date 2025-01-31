<?php

namespace App\Filament\Resources\CarFacilityResource\Pages;

use App\Filament\Resources\CarFacilityResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCarFacilities extends ListRecords
{
    protected static string $resource = CarFacilityResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
