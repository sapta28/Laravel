<?php

namespace App\Filament\Resources\KonsumsibulananResource\Pages;

use App\Filament\Resources\KonsumsibulananResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKonsumsibulanans extends ListRecords
{
    protected static string $resource = KonsumsibulananResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
