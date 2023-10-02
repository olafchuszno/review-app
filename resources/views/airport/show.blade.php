@props(['airport'])
<x-layout>

<main class="flex justify-center">

    <div class="w-2/3 gap-3 flex flex-col items-center">

        <div class="px-4 sm:px-0">
            <h3 class="text-base font-semibold leading-7 text-gray-900">{{ $airport->name }} Page</h3>
            <p class="mt-1 max-w-2xl text-sm leading-6 text-gray-500">Basic information.</p>  </div>
        <div class="mt-6 border-t border-gray-100">

        <table class="divide-y divide-gray-100">

            
                <x-basic-info class="border-2 border-red-400 px-2">
                    <x-td-first>Warning</x-td-first>
                    <x-td-second>There is more than 1 airport in {{ $airport->cityName }}. <br>Please make sure it's the one you're after (check the unique airport code below).</x-td-second>
                </x-basic-info>
            
            <x-basic-info>
                <x-td-first>Country name</x-td-first>
                <x-td-second>{{ $airport->countryName }}</x-td-second>
            </x-basic-info>
            <x-basic-info>
                <x-td-first>City name</x-td-first>
                <x-td-second>{{ $airport->cityName }}</x-td-second>
            </x-basic-info>
            <x-basic-info>
                <x-td-first>Airport Code</x-td-first>
                <x-td-second>{{ $airport->code }}</x-td-second>
            </x-basic-info>
            <x-basic-info>
                <x-td-first>Location</x-td-first>
                <x-td-second>It's located <strong>{{ $airport->city ? 'Inside' : 'Outside'}}</strong> the city borders </x-td-first>
            </x-basic-info>

            <x-basic-info>
                <x-td-first>About</x-td-first>
                <x-td-second>Fugiat ipsum ipsum deserunt culpa aute sint do nostrud anim incididunt cillum culpa consequat. Excepteur qui ipsum aliquip consequat sint. Sit id mollit nulla mollit nostrud in ea officia proident. Irure nostrud pariatur mollit ad adipisicing reprehenderit deserunt qui eu.</x-td-second>
            </x-basic-info>
        </dl>
    </div>
    </div>

</main>

</x-layout>