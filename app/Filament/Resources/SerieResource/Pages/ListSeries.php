<?php

namespace App\Filament\Resources\SerieResource\Pages;

use App\Filament\Resources\SerieResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSeries extends ListRecords
{
    protected static string $resource = SerieResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
