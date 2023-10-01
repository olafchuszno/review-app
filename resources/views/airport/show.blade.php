@props(['airport'])
<x-layout>

<main class="flex justify-center">

    <div class="w-2/3 gap-3 flex flex-col items-center">

        <div class="px-4 sm:px-0">
            <h3 class="text-base font-semibold leading-7 text-gray-900">{{ $airport->name }} Page</h3>
            <p class="mt-1 max-w-2xl text-sm leading-6 text-gray-500">Basic information.</p>  </div>
        <div class="mt-6 border-t border-gray-100">

        <table class="divide-y divide-gray-100">

            <x-basic_info>
                <td class="text-sm py-2 font-medium leading-6 text-gray-900">Country name</td>
                <td class="mt-1 text-sm py-2 leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $airport->countryName }}</td>
            </x-basic_info>
            <x-basic_info>
                <td class="text-sm font-medium leading-6 text-gray-900">City name</td>
                <td class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $airport->cityName }}</td>
            </x-basic_info>
            <x-basic_info>
                <td class="text-sm font-medium leading-6 text-gray-900">Airport Code</td>
                <td class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $airport->code }}</td>
            </x-basic_info>
            <x-basic_info>
                <td class="text-sm font-medium leading-6 text-gray-900">Location</td>
                <td class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">It's located <strong>{{ $airport->city ? 'Inside' : 'Outside'}}</strong> the city borders </td>
            </x-basic_info>

            <x-basic_info>
                <td class="text-sm font-medium leading-6 text-gray-900">About</td>
                <td class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">Fugiat ipsum ipsum deserunt culpa aute sint do nostrud anim incididunt cillum culpa consequat. Excepteur qui ipsum aliquip consequat sint. Sit id mollit nulla mollit nostrud in ea officia proident. Irure nostrud pariatur mollit ad adipisicing reprehenderit deserunt qui eu.</td>
            </x-basic_info>
        </dl>
    </div>
    </div>

</main>

</x-layout>