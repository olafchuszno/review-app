@props(['airports'])
<x-layout>
    <main>
        <ol>
            @foreach ($airports as $airport)
                <li>{{ $airport->code }}, {{ $airport->name }}, {{ $airport->cityName }}</li>
            @endforeach
        </ol>
    </main>
</x-layout>