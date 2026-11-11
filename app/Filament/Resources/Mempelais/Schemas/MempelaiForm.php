<?php

namespace App\Filament\Resources\Mempelais\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Schema;

class MempelaiForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama_pria')
                    ->label('Nama Mempelai Pria')
                    ->required(),

                TextInput::make('nama_wanita')
                    ->label('Nama Mempelai Wanita')
                    ->required(),

                FileUpload::make('foto_pria')
                    ->label('Upload Foto Pria')
                    ->acceptedFileTypes([
                        'image/jpeg',
                        'image/png',
                        'image/webp',
                    ])
                    ->image()
                    ->disk('public')
                    ->directory('mempelai')
                    ->imageEditor(),

                FileUpload::make('foto_wanita')
                    ->label('Upload Foto Wanita')
                    ->acceptedFileTypes([
                        'image/jpeg',
                        'image/png',
                        'image/webp',
                    ])
                    ->image()
                    ->disk('public')
                    ->directory('mempelai')
                    ->imageEditor(),

                Textarea::make('deskripsi')
                    ->label('Deskripsi Pasangan')
                    ->columnSpanFull(),
            ]);
    }
}
