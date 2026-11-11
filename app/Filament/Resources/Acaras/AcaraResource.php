<?php

namespace App\Filament\Resources\Acaras;

use App\Filament\Resources\Acaras\Pages\CreateAcara;
use App\Filament\Resources\Acaras\Pages\EditAcara;
use App\Filament\Resources\Acaras\Pages\ListAcaras;
use App\Filament\Resources\Acaras\Pages\ViewAcara;
use App\Filament\Resources\Acaras\Schemas\AcaraForm;
use App\Filament\Resources\Acaras\Schemas\AcaraInfolist;
use App\Filament\Resources\Acaras\Tables\AcarasTable;
use App\Models\Acara;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class AcaraResource extends Resource
{
    protected static ?string $model = Acara::class;

    protected static ?string $modelLabel = 'Data Acara';

    protected static ?string $pluralModelLabel = 'Data Acara';

    protected static ?string $navigationLabel = 'Data Acara';

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedCalendarDays;

    protected static ?string $recordTitleAttribute = 'nama_acara';

    public static function form(Schema $schema): Schema
    {
        return AcaraForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return AcaraInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return AcarasTable::configure($table);
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
            'index' => ListAcaras::route('/'),
            'create' => CreateAcara::route('/create'),
            'view' => ViewAcara::route('/{record}'),
            'edit' => EditAcara::route('/{record}/edit'),
        ];
    }
}
