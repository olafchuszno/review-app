<x-layout>
    <x-main-airport :airport="$airport" class="flex flex-col items-center">

        <div>
            <h1 class="text-primaryIndigo text-2xl font-bold px-4 py-2 rounded-2xl bg-neutralIndigo">
                Here you can share your information about {{ $topic->name }}
            </h1>
        </div>

        <div class="bg-primaryIndigo py-14 px-20 mt-10 mb-10 rounded-2xl sm:mx-auto sm:w-full sm:max-w-lg">

            <form action="/airports/{{$airport->code}}/contribute" method="POST" class="flex flex-col gap-2">
                @csrf

                @foreach ($questions as $question)
                    <p class="text-xl text-stone-100 font-bold m-0 p-0">
                        {{ $question->body }}
                    </p>

                    <textarea name="{{ $question->id }}" class="mb-6 px-4 py-2 text-lg text-secondaryOrange rounded-3xl" required></textarea>
                @endforeach


                <div class="mt-2">
                    <button type="submit" class="flex w-full justify-center rounded-2xl bg-primaryOrange px-3 py-3 text-md font-extrabold leading-6 text-stone-100 shadow-sm hover:text-indigo-500 hover:bg-stone-200 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                        Contribute!
                    </button>
                </div>
            </form>

        </div>

    </x-main-logo>
</x-layout>