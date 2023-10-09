<?php

namespace App\Filament\Resources\DemandeurResource\Pages;

use App\Filament\Resources\DemandeurResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDemandeurs extends ListRecords
{
    protected static string $resource = DemandeurResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
