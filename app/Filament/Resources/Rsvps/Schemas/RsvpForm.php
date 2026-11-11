<?php

namespace App\Filament\Resources\Rsvps\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class RsvpForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('tamu_id')
                    ->required()
                    ->numeric(),
                TextInput::make('acara_id')
                    ->required()
                    ->numeric(),
                Select::make('status')
                    ->options(['hadir' => 'Hadir', 'tidak_hadir' => 'Tidak hadir'])
                    ->required(),
                TextInput::make('jumlah_hadir')
                    ->required()
                    ->numeric()
                    ->default(1),
            ]);
    }
}
