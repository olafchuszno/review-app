<x-layout>
        <x-main-logo>

            <div class="gap-2 flex flex-col items-center">

                <div class="mb-20 px-4 sm:px-0 flex flex-col items-center gap-3">
                    <h1 class="text-center text-3xl font-semibold leading-7 text-gray-900 ml-2">{{ $airport->name }} Page</h1>
                    
                    <div class="flex gap-1">
                        <x-section-links :airport="$airport"/>
                    </div>
                </div>

                <x-topic-grid>

                    @foreach ($topics as $topic)
                        <x-topic-link href="">{{ $topic->name }}</x-topic-link>
                    @endforeach

                </x-topic-grid>
        
            </div>

        </x-main-logo>
</x-layout>