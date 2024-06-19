<?php

namespace App\Filament\Resources\LifestyleResource\Pages;

use App\Filament\Resources\LifestyleResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLifestyles extends ListRecords
{
    protected static string $resource = LifestyleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
