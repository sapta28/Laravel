<?php

namespace App\Filament\Pages;

use Filament\Pages\Dashboard as BaseDashboard;
use App\Filament\Widgets\DataResult;

class Dashboard extends BaseDashboard
{
    protected function getHeaderWidgets(): array
    {
        return [
            DataResult::class,
        ];
    }
}
