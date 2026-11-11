<?php

namespace App\Filament\Resources\Tamus\Pages;

use App\Filament\Resources\Tamus\TamuResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewTamu extends ViewRecord
{
    protected static string $resource = TamuResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
