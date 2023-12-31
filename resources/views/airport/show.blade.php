@props(['airport', 'other_airports'])
<x-layout>

    <x-main-airport :airport="$airport">

        <div class="mt-4 p-5 bg-primaryIndigo rounded-2xl">
            <table>

                @if ($other_airports_num != 0)
                <x-basic-info class="border-2 border-red-400 px-2">
                    <x-td-first>Warning</x-td-first>
                    <x-td-second>There is more than 1 airport in {{ $airport->cityName }}. <br>
                        Please make sure it's the one you're after (check the unique airport code below). <br>
                        Other Airports in the area:
                        @foreach ($other_airports as $other_airport)
                        <strong>
                            {{ $other_airport->name }} (
                            <a href="/airports/{{ $other_airport->code }}/basic_info" class="text-blue-500">
                                {{ $other_airport->code }}
                            </a>)
                        </strong>

                        @if (! $loop->last)
                        ,
                        @endif

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
                <x-basic-info border="">
                    <x-td-first>Important </x-td-first>
                    <x-td-second> <strong>Airport Code</strong> and <strong>City Code</strong> are two different things.<br>
                        The code you will use when booking plane tickets is the <strong>Airport Code.</strong> </x-td-second>
                </x-basic-info>
            </table>
        </div>

    </x-main-airport>

</x-layout>