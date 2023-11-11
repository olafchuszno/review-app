<x-main-logo class="flex flex-col items-center mt-6 mb-20">

    <section class="px-4 sm:px-0 flex flex-col items-center gap-4 mb-10">
        <x-h1-so>
            {{ $airport->name }} Page
        </x-h1-so>
        
        <div class="flex gap-1">
            <x-section-links :airport="$airport"/>

            @if (isset($topic))
                <x-section-link href="" requestIs="*/topics*">{{ $topic->name }}</x-section-link>
            @endif
        </div>
    </section>

    {{ $slot }}
    
</x-main-logo>