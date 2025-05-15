<x-filament::widget>
    <x-filament::card>
        <h2 class="text-xl font-bold mb-4">📊 Data Result</h2>

        {{-- Konsumsi Bulanan --}}
        <p>Total Konsumsi Bulanan: <strong>{{ $totalKonsumsi }}</strong></p>
        <ul class="list-disc ml-5 mt-1">
            @foreach ($latestKonsumsi as $item)
                <li>{{ $item->id }} - {{ $item->created_at }}</li>
            @endforeach
        </ul>

        {{-- Pembayaran --}}
        <p class="mt-4">Total Pembayaran: <strong>{{ $totalPembayaran }}</strong></p>
        <ul class="list-disc ml-5 mt-1">
            @foreach ($latestPembayaran as $item)
                <li>{{ $item->id }} - {{ $item->created_at }}</li>
            @endforeach
        </ul>

        {{-- Pengguna --}}
        <p class="mt-4">Total Pengguna: <strong>{{ $totalPengguna }}</strong></p>
        <ul class="list-disc ml-5 mt-1">
            @foreach ($latestPengguna as $item)
                <li>{{ $item->nama ?? $item->id }}</li>
            @endforeach
        </ul>

        {{-- Tagihan --}}
        <p class="mt-4">Total Tagihan: <strong>{{ $totalTagihan }}</strong></p>
        <ul class="list-disc ml-5 mt-1">
            @foreach ($latestTagihan as $item)
                <li>{{ $item->id }} - {{ $item->status ?? '-' }}</li>
            @endforeach
        </ul>

        {{-- User --}}
        <p class="mt-4">Total User: <strong>{{ $totalUser }}</strong></p>
        <ul class="list-disc ml-5 mt-1">
            @foreach ($latestUser as $item)
                <li>{{ $item->name ?? $item->email ?? $item->id }}</li>
            @endforeach
        </ul>

    </x-filament::card>
</x-filament::widget>
