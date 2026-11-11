<?php

namespace App\Filament\Resources\Galeris\Schemas;

use App\Models\Mempelai;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Schema;

class GaleriForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('mempelai_id')
                    ->label('Mempelai')
                    ->options(
                        Mempelai::all()->mapWithKeys(function ($mempelai) {
                            return [
                                $mempelai->id => $mempelai->nama_pria . ' & ' . $mempelai->nama_wanita,
                            ];
                        })
                    )
                    ->required()
                    ->searchable(),

                TextInput::make('judul')
                    ->label('Judul Foto')
                    ->placeholder('Contoh: Foto Prewedding 1'),

                FileUpload::make('foto')
    ->label('Upload Foto')
    ->acceptedFileTypes([
        'image/jpeg',
        'image/png',
        'image/webp',
    ])
    ->image()
    ->disk('public')
    ->directory('galeri')
    ->imageEditor()
    ->required(),
                Textarea::make('deskripsi')
                    ->label('Deskripsi')
                    ->columnSpanFull(),
            ]);
    }
}