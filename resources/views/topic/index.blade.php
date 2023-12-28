<x-layout>
    <x-main-airport :airport="$airport">

        <h1 class="text-primaryIndigo text-2xl font-bold mb-12 px-5 py-2 rounded-2xl bg-raisinBlack">
            What information are you looking for?
        </h1>

        <x-topic-grid>

            @foreach ($topics as $topic)
            <x-topic-link href="/airports/{{ $airport->code }}/topics/{{ $topic->name }}">
                {{ $topic->name }}
            </x-topic-link>
            @endforeach

        </x-topic-grid>

    </x-main-airport>
</x-layout>