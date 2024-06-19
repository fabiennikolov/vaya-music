<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LifestyleResource\Pages;
use App\Filament\Resources\LifestyleResource\RelationManagers;
use App\Models\Lifestyle;
use Filament\Forms;
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

class LifestyleResource extends Resource
{
    protected static ?string $model = Lifestyle::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('description'),
                SpatieMediaLibraryFileUpload::make('image')
                ->maxSize(102400)
                ->image()
                ->imageEditor()
                ->disk(App::environment('production') ? 'media' : 'public')
                ->directory('public/storage')
                ->collection('lifestyle')
                ->label('Снимка'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('description'),
                SpatieMediaLibraryImageColumn::make('image')
                ->collection('lifestyle'),
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
            'index' => Pages\ListLifestyles::route('/'),
            'create' => Pages\CreateLifestyle::route('/create'),
            'edit' => Pages\EditLifestyle::route('/{record}/edit'),
        ];
    }
}
