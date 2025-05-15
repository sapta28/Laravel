<?php

namespace App\Filament\Resources\KonsumsibulananResource\Pages;

use App\Filament\Resources\KonsumsibulananResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKonsumsibulanan extends EditRecord
{
    protected static string $resource = KonsumsibulananResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
