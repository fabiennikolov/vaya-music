<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SoonResource\Pages;
use App\Filament\Resources\SoonResource\RelationManagers;
use App\Models\Soon;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\App;

class SoonResource extends Resource
{
    protected static ?string $model = Soon::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title'),
                TextInput::make('description'),
                DatePicker::make('date')->native(false),
                SpatieMediaLibraryFileUpload::make('image')
                ->maxSize(102400)
                ->image()
                ->imageEditor()
                ->disk(App::environment('production') ? 'media' : 'public')
                ->directory('public/storage')
                ->collection('soon')
                ->label('Снимка'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title'),
                TextColumn::make('description'),
                TextColumn::make('date'),
                SpatieMediaLibraryImageColumn::make('image')->collection('soon'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
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
            'index' => Pages\ListSoons::route('/'),
            'create' => Pages\CreateSoon::route('/create'),
            'edit' => Pages\EditSoon::route('/{record}/edit'),
        ];
    }
}
