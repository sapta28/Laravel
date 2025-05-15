<?php

namespace App\Filament\Widgets;

use Filament\Widgets\Widget;
use App\Models\konsumsibulanan;        
use App\Models\pembayaran;     
use App\Models\pengguna;
use App\Models\tagihan;
use App\Models\user;

class DataResult extends Widget
{
    protected static string $view = 'filament.widgets.data-result';

    public function getViewData(): array
    {
        return [
            'totalKonsumsi' => konsumsibulanan::count(),
            'latestKonsumsi' => konsumsibulanan::latest()->take(5)->get(),

            'totalPembayaran' => pembayaran::count(),
            'latestPembayaran' => pembayaran::latest()->take(5)->get(),

            'totalPengguna' => pengguna::count(),
            'latestPengguna' => pengguna::latest()->take(5)->get(),

            'totalTagihan' => tagihan::count(),
            'latestTagihan' => tagihan::latest()->take(5)->get(),

            'totalUser' => user::count(),
            'latestUser' => user::latest()->take(5)->get(),
        ];
    }
}
