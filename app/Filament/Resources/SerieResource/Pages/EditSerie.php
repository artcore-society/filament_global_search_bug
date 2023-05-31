<?php

namespace App\Filament\Resources\SerieResource\Pages;

use App\Filament\Resources\SerieResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSerie extends EditRecord
{
    protected static string $resource = SerieResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
