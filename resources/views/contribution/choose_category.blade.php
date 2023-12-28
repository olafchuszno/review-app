<x-layout>
    <x-main-airport :airport="$airport">

        <h1 class="text-primaryIndigo text-2xl font-bold mb-12 px-4 py-2 rounded-2xl bg-raisinBlack">
            Choose the category of your contribution
        </h1>

        <x-topic-grid>

            @foreach ($topics as $topic)
            <x-topic-link text="text-primaryOrange" href="/airports/{{ $airport->code }}/contribute/{{ $topic->name }}">
                {{ $topic->name }}
            </x-topic-link>
            @endforeach

        </x-topic-grid>

    </x-main-airport>
</x-layout>