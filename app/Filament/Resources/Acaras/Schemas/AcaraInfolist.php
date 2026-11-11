<?php

namespace App\Filament\Resources\Acaras\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class AcaraInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('mempelai_id')
                    ->numeric(),
                TextEntry::make('nama_acara'),
                TextEntry::make('tanggal')
                    ->date(),
                TextEntry::make('waktu_mulai')
                    ->time(),
                TextEntry::make('waktu_selesai')
                    ->time()
                    ->placeholder('-'),
                TextEntry::make('lokasi'),
                TextEntry::make('alamat')
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
