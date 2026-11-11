<?php

namespace App\Filament\Resources\Acaras\Pages;

use App\Filament\Resources\Acaras\AcaraResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewAcara extends ViewRecord
{
    protected static string $resource = AcaraResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
