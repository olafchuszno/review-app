@props(['airport', 'other_airports'])
<x-layout>

<main class="flex flex-col items-center justify-center mt-1">

    <div class="flex justify-center">
        <svg class="mx-auto aspect-auto" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" width="100px" height="100px" viewBox="0 0 100 100" fill="#3f51b5">
            <!-- Curved Lines -->
            <path d="M30 60 C 30 30, 70 30, 70 60" stroke="#3f51b5" stroke-width="4" fill="none" />
            
            <!-- Circles -->
            <circle cx="30" cy="60" r="5" fill="#ff9800" />
            <circle cx="70" cy="60" r="5" fill="#ff9800" />
        </svg>
    </div>

    <div class="w-2/3 gap-2 flex flex-col items-center">

        <div class="px-4 sm:px-0 flex flex-col items-center gap-3">
            <h1 class="text-center text-3xl font-semibold leading-7 text-gray-900 ml-2">{{ $airport->name }} Page</h1>
            
            <div class="flex gap-1">
                <a href="/airports/{{ $airport->code }}/basic_info" class="{{ request()->is('airports/*basic_info') ? 'bg-indigo-200' : '' }} mt-1 text-lg leading-6 font-bold rounded-lg text-indigo-800 hover:bg-indigo-200 px-2 py-1">
                    Basic info.
                </a>
                <a href="/airports/{{ $airport->code }}/main_topics" class="{{ request()->is('airports/*main_topics') ? 'bg-indigo-200' : '' }} mt-1 text-lg leading-6 font-bold rounded-lg text-indigo-800 hover:bg-indigo-200 px-2 py-1">Main topics.</a>
            </div>
        </div>

        <div class="mt-6 border-t border-gray-100">
            <table class="divide-y divide-gray-100">

                @if ($airport->numAirports > 1)
                    <x-basic-info class="border-2 border-red-400 px-2">
                        <x-td-first>Warning</x-td-first>
                        <x-td-second>There is more than 1 airport in {{ $airport->cityName }}. <br>
                            Please make sure it's the one you're after (check the unique airport code below). <br>
                            Other Airports in the area:
                            @foreach ($other_airports as $other_airport)
                                <a href="{{ $other_airport->code }}"
                                    class="text-blue-500"
                                >{{ $other_airport->code }}</a>
                            @endforeach
                    
                    </x-td-second>
                    </x-basic-info>
                @endif
                
                <x-basic-info>
                    <x-td-first>Airport Code</x-td-first>
                    <x-td-second>{{ $airport->code }}</x-td-second>
                </x-basic-info>
                <x-basic-info>
                    <x-td-first>City name / City code</x-td-first>
                    <x-td-second>{{ $airport->cityName }} / {{ $airport->cityCode }}</x-td-second>
                </x-basic-info>
                <x-basic-info>
                    <x-td-first>Country name / Country code</x-td-first>
                    <x-td-second>{{ $airport->countryName }} / {{ $airport->countryCode }}</x-td-second>
                </x-basic-info>
                <x-basic-info>
                    <x-td-first>Location</x-td-first>
                    <x-td-second>It's located <strong>{{ $airport->city ? 'Inside' : 'Outside'}}</strong> the city borders. <br>
                    Pay attention to the full city name, as it can be distant from the actual city center. </x-td-first>
                </x-basic-info>
                <x-basic-info>
                    <x-td-first>Important </x-td-first>
                    <x-td-second> <strong>Airport Code</strong> and <strong>City Code</strong> are two different things.<br>
                        The code you will use when booking plane tickets is the <strong>Airport Code.</strong> </x-td-second>
                </x-basic-info>
            </table>
        </div>
    
        

    </div>
    
</main>

</x-layout>