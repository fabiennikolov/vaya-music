<?php

namespace App\Filament\Resources\LifestyleResource\Pages;

use App\Filament\Resources\LifestyleResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLifestyle extends EditRecord
{
    protected static string $resource = LifestyleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
