<?php

namespace App\Filament\Resources\Mempelais\Pages;

use App\Filament\Resources\Mempelais\MempelaiResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListMempelais extends ListRecords
{
    protected static string $resource = MempelaiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
