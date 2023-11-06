@props(['airports'])
<x-layout>
    <main>
        <div class="text-center mt-16">
            <x-style.logo />

            <h1 class="text-4xl font-bold text-primaryOrange">
                Results for:  "{{ request('airport') }}"
            </h1>
        </div>
        <div class="flex justify-center mt-10 rounded-xl flex-auto">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8 max-w-max">
                <div class="align-middle min-w-full p-2">
                    <div class="shadow overflow-hidden rounded-2xl">
                        <table class="min-w-full divide-y border-4 border-primaryIndigo" width="820px">
                            <thead>
                                <tr class="border-primaryIndigo text-lg font-bold border-4">
                                    <th class="pl-4 py-6 whitespace-nowrap">Airport Code</th>
                                    <th class="py-6">Airport Name</th>
                                    <th class="py-6">Airport City</th>
                                    <th class="py-6 pr-4">Airport Country</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                @foreach ($airports as $airport)
                                <tr class="border-primaryIndigo text-lg font-semibold border-4">
                                    <td class="py-4 ml-2 whitespace-nowrap">
                                        <div class="flex justify-center">
                                            {{ $airport->code }}
                                        </div>
                                    </td>
                                    <td class="py-4 whitespace-nowrap">
                                        <div class="flex justify-center">
                                            <a href="airports/{{ $airport->code }}/basic_info" class="text-primaryOrange">
                                                {{ $airport->name }}
                                            </a>
                                        </div>
                                    </td>
                                    <td class="py-4 whitespace-nowrap">
                                        <div class="flex justify-center">
                                            {{ $airport->cityName }}
                                        </div>
                                    </td>
                                    <td class="py-4 pr-4 whitespace-nowrap">
                                        <div class="flex justify-center">
                                            {{ $airport->countryName }}
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </main>
</x-layout>