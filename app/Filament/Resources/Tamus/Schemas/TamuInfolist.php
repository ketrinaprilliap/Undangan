<?php

namespace App\Filament\Resources\Tamus\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class TamuInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('nama'),
                TextEntry::make('email')
                    ->label('Email address')
                    ->placeholder('-'),
                TextEntry::make('nomor_telepon')
                    ->placeholder('-'),
                TextEntry::make('kode_undangan'),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
