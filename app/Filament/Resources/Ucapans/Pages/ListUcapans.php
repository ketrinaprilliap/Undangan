<?php

namespace App\Filament\Resources\Ucapans\Pages;

use App\Filament\Resources\Ucapans\UcapanResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListUcapans extends ListRecords
{
    protected static string $resource = UcapanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
