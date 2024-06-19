<?php

namespace App\Filament\Resources\SoonResource\Pages;

use App\Filament\Resources\SoonResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSoons extends ListRecords
{
    protected static string $resource = SoonResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
