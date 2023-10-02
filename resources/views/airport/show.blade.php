@props(['airport', 'other_airports'])
<x-layout>

<main class="flex justify-center">

    <div class="w-2/3 gap-3 flex flex-col items-center">

        <div class="px-4 sm:px-0">
            <h3 class="text-base font-semibold leading-7 text-gray-900">{{ $airport->name }} Page</h3>
            <p class="mt-1 max-w-2xl text-sm leading-6 text-gray-500">Basic information.</p> 
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