<?php

namespace App\Filament\Resources\Mempelais\Pages;

use App\Filament\Resources\Mempelais\MempelaiResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewMempelai extends ViewRecord
{
    protected static string $resource = MempelaiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
