@props(['airports'])
<x-layout>
    <main>
        <div class="flex justify-center">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8 max-w-max">
                <div class="py-2 align-middle min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg" style="width: 600px">
                        <table class="min-w-full divide-y divide-gray-200 mx-50">
                            <thead>
                                <tr class="border-slate-300 border-2 py-3">
                                    <th>Airport Code</th>
                                    <th>Airport Name</th>
                                    <th>Airport City</th>
                                    <th>Airport Country</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                @foreach ($airports as $airport)
                                <tr class="border-slate-300 border-2">
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex justify-center">
                                            {{ $airport->code }}
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex justify-center">
                                            <a href="airports/{{ $airport->code }}" class="text-blue-500">
                                                {{ $airport->name }}
                                            </a>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex justify-center">
                                            {{ $airport->cityName }}
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
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