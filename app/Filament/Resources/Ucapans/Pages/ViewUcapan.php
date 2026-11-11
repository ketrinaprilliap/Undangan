<?php

namespace App\Filament\Resources\Ucapans\Pages;

use App\Filament\Resources\Ucapans\UcapanResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewUcapan extends ViewRecord
{
    protected static string $resource = UcapanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
