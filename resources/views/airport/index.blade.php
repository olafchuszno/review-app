@props(['airports'])
<x-layout>
    <main>
        <div class="text-center mt-16">
            <x-style.logo />

            <h1 class="text-3xl font-bold text-stone-200">
                Results for:  "{{ request('airport') }}"
            </h1>
        </div>
        <div class="flex justify-center mt-16">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8 max-w-max">
                <div class="py-2 align-middle min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200" width="820px">
                            <thead>
                                <tr class="border-slate-300 border-2">
                                    <th class="pl-4 py-4 whitespace-nowrap">Airport Code</th>
                                    <th class="py-2">Airport Name</th>
                                    <th class="py-2">Airport City</th>
                                    <th class="py-2 pr-4">Airport Country</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                @foreach ($airports as $airport)
                                <tr class="border-slate-300 border-2">
                                    <td class="py-4 ml-2 whitespace-nowrap">
                                        <div class="flex justify-center">
                                            {{ $airport->code }}
                                        </div>
                                    </td>
                                    <td class="py-4 whitespace-nowrap">
                                        <div class="flex justify-center">
                                            <a href="airports/{{ $airport->code }}/basic_info" class="text-blue-500">
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