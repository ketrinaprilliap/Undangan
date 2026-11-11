<?php

namespace App\Filament\Resources\Ucapans\Pages;

use App\Filament\Resources\Ucapans\UcapanResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditUcapan extends EditRecord
{
    protected static string $resource = UcapanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
