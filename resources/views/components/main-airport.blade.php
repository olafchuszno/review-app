<x-main-logo class="flex flex-col items-center mt-6 mb-20">

    <div class="px-4 sm:px-0 flex flex-col items-center gap-4 mb-10">
        <h1 class="text-center text-primaryOrange text-4xl font-bold leading-7 ml-2">{{ $airport->name }} Page</h1>
        
        <div class="flex gap-1">
            <x-section-links :airport="$airport"/>

            @if (isset($topic))
                <x-section-link href="" requestIs="*/topics*">{{ $topic->name }}</x-section-link>
            @endif
        </div>
    </div>

    {{ $slot }}
    
</x-main-logo>