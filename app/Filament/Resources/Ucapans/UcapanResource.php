<?php

namespace App\Filament\Resources\Ucapans;

use App\Filament\Resources\Ucapans\Pages\CreateUcapan;
use App\Filament\Resources\Ucapans\Pages\EditUcapan;
use App\Filament\Resources\Ucapans\Pages\ListUcapans;
use App\Filament\Resources\Ucapans\Pages\ViewUcapan;
use App\Filament\Resources\Ucapans\Schemas\UcapanForm;
use App\Filament\Resources\Ucapans\Schemas\UcapanInfolist;
use App\Filament\Resources\Ucapans\Tables\UcapansTable;
use App\Models\Ucapan;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class UcapanResource extends Resource
{
    protected static ?string $model = Ucapan::class;

    protected static ?string $modelLabel = 'Ucapan dan Doa';

    protected static ?string $pluralModelLabel = 'Ucapan dan Doa';

    protected static ?string $navigationLabel = 'Ucapan dan Doa';

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedChatBubbleLeftRight;

    protected static ?string $recordTitleAttribute = 'pesan';

    public static function form(Schema $schema): Schema
    {
        return UcapanForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return UcapanInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return UcapansTable::configure($table);
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
            'index' => ListUcapans::route('/'),
            'create' => CreateUcapan::route('/create'),
            'view' => ViewUcapan::route('/{record}'),
            'edit' => EditUcapan::route('/{record}/edit'),
        ];
    }
}
