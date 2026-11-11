<?php

namespace App\Filament\Resources\Mempelais\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class MempelaiInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('nama_pria'),
                TextEntry::make('nama_wanita'),
                TextEntry::make('foto_pria')
                    ->placeholder('-'),
                TextEntry::make('foto_wanita')
                    ->placeholder('-'),
                TextEntry::make('deskripsi')
                    ->placeholder('-')
                    ->columnSpanFull(),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
