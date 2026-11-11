<?php

namespace App\Filament\Resources\Mempelais;

use App\Filament\Resources\Mempelais\Pages\CreateMempelai;
use App\Filament\Resources\Mempelais\Pages\EditMempelai;
use App\Filament\Resources\Mempelais\Pages\ListMempelais;
use App\Filament\Resources\Mempelais\Pages\ViewMempelai;
use App\Filament\Resources\Mempelais\Schemas\MempelaiForm;
use App\Filament\Resources\Mempelais\Schemas\MempelaiInfolist;
use App\Filament\Resources\Mempelais\Tables\MempelaisTable;
use App\Models\Mempelai;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class MempelaiResource extends Resource
{
    protected static ?string $model = Mempelai::class;

    protected static ?string $modelLabel = 'Data Mempelai';

    protected static ?string $pluralModelLabel = 'Data Mempelai';

    protected static ?string $navigationLabel = 'Data Mempelai';

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'nama_pria';

    public static function form(Schema $schema): Schema
    {
        return MempelaiForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return MempelaiInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return MempelaisTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListMempelais::route('/'),
            'create' => CreateMempelai::route('/create'),
            'view' => ViewMempelai::route('/{record}'),
            'edit' => EditMempelai::route('/{record}/edit'),
        ];
    }
}
