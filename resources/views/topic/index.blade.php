<x-layout>
    <main class="mt-1">

        <div>
            <x-style.logo />
        </div>

        <div class="gap-2 flex flex-col items-center">

            <div class="mb-20 px-4 sm:px-0 flex flex-col items-center gap-3">
                <h1 class="text-center text-3xl font-semibold leading-7 text-gray-900 ml-2">{{ $airport->name }} Page</h1>
                
                <div class="flex gap-1">
                    <a href="/airports/{{ $airport->code }}/basic_info" class="{{ request()->is('airports/*basic_info') ? 'bg-indigo-200' : '' }} mt-1 text-lg leading-6 font-bold rounded-lg text-indigo-800 hover:bg-indigo-200 px-2 py-1">
                        Basic info.
                    </a>
                    <a href="/airports/{{ $airport->code }}/main_topics" class="{{ request()->is('airports/*main_topics') ? 'bg-indigo-200' : '' }} mt-1 text-lg leading-6 font-bold rounded-lg text-indigo-800 hover:bg-indigo-200 px-2 py-1">Main topics.</a>
                </div>
            </div>

            <x-topic-grid>

                @foreach ($topics as $topic)
                    <x-topic-link href="">{{ $topic->name }}</x-topic-link>
                @endforeach

            </x-topic-grid>
    
        

        </div>
        
    </main>

</x-layout>