<?php

namespace App\Filament\Resources\Acaras\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TimePicker;
use Filament\Schemas\Schema;

class AcaraForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('mempelai_id')
                    ->required()
                    ->numeric(),
                TextInput::make('nama_acara')
                    ->required(),
                DatePicker::make('tanggal')
                    ->required(),
                TimePicker::make('waktu_mulai')
                    ->required(),
                TimePicker::make('waktu_selesai'),
                TextInput::make('lokasi')
                    ->required(),
                Textarea::make('alamat')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }
}
