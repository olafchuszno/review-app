<x-layout>
    <x-main-airport :airport="$airport">

        <x-topic-grid>

            @foreach ($topics as $topic)
                <x-topic-link href="/airports/{{ $airport->code }}/topics/{{ $topic->name }}">{{ $topic->name }}</x-topic-link>
            @endforeach

        </x-topic-grid>
        
    </x-main-airport>
</x-layout>