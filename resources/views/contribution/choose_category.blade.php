<x-layout>
    <x-main-logo>

        <h1 class="text-center text-primaryOrange text-3xl font-bold leading-9 tracking-tight">Contribute. With knowledge!</h1>
        
        <div class="mt-20 bg-indigo-400 rounded-3xl px-6 py-10 sm:mx-auto sm:w-full sm:max-w-lg">

            <form action="/airports/{{$airport->code}}/contribute" method="POST" enctype="multipart/form-data" class="flex items-center flex-col gap-4">
                @csrf

                <div class="flex gap-6 justify-start align-start">

                    <p class="text-2xl text-indigo-400 bg-secondaryIndigo font-bold rounded-2xl px-5 py-2">
                        Choose the category:
                    </p>

                    <select class="text-indigo-400 bg-secondaryIndigo px-3 rounded-2xl text-center text-lg font-extrabold">
                        @foreach ($topics as $topic)
                            <option value="{{ $topic->id }}">{{ $topic->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mt-2">
                    <button type="submit" class="bg-primaryOrange text-indigo-600 px-14 py-2 rounded-xl text-lg font-extrabold leading-6 shadow-sm hover:text-indigo-500 hover:bg-stone-200 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                        Next
                    </button>
                </div>
            </form>

        </div>

    </x-main-logo>
</x-layout>