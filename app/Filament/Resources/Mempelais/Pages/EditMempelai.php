<?php

namespace App\Filament\Resources\Mempelais\Pages;

use App\Filament\Resources\Mempelais\MempelaiResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditMempelai extends EditRecord
{
    protected static string $resource = MempelaiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
