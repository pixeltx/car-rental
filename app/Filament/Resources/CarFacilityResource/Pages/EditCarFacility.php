<?php

namespace App\Filament\Resources\CarFacilityResource\Pages;

use App\Filament\Resources\CarFacilityResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCarFacility extends EditRecord
{
    protected static string $resource = CarFacilityResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function mutateFormDataBeforeFill(array $data): array
    {
        $data['images'] = $this->record->images->pluck('image')->toArray();
        return $data;
    }
}
