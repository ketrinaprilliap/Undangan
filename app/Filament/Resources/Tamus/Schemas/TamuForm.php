<?php

namespace App\Filament\Resources\Tamus\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class TamuForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama')
                    ->required(),
                TextInput::make('email')
                    ->label('Email address')
                    ->email(),
                TextInput::make('nomor_telepon')
                    ->tel(),
                TextInput::make('kode_undangan')
                    ->required(),
            ]);
    }
}
