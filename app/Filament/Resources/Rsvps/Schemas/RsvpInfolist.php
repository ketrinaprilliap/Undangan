<?php

namespace App\Filament\Resources\Rsvps\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class RsvpInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('tamu_id')
                    ->numeric(),
                TextEntry::make('acara_id')
                    ->numeric(),
                TextEntry::make('status')
                    ->badge(),
                TextEntry::make('jumlah_hadir')
                    ->numeric(),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
