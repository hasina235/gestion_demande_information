<?php

namespace App\Filament\App\Resources\DemandeResource\Pages;

use App\Filament\App\Resources\DemandeResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDemande extends EditRecord
{
    protected static string $resource = DemandeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
