<x-layout>
    <x-main-logo heading="Update your contribution" class="flex flex-col items-center">

        @if ($answers->count())
        <section class="bg-primaryIndigo text-center py-14 px-20 mt-10 mb-10 rounded-2xl sm:mx-auto sm:w-full sm:max-w-4xl">

            @if ($errors->any())
            <div class="flex justify-center">
                @foreach ($errors->all() as $error)
                <p class="text-2xl font-bold w-2/3 bg-primaryOrange text-center text-stone-100 px-6 py-2 mb-6 rounded-2xl">
                    {{ $error }}
                </p>
                @endforeach
            </div>
            @endif

            <form action="/my/contributions/{{$contribution->id}}/edit" method="POST" class="flex flex-wrap justify-evenly items-end gap-8">
                @method('PATCH')
                @csrf

                @foreach ($answers as $answer)
                <div class="mb-8 flex flex-col gap-3 sm:max-w-xs sm:w-full">
                    <p class="text-xl text-stone-100 font-bold m-0 p-0">
                        {{ $answer->question->body }}
                    </p>

                    <textarea name="answer[{{ $answer->question->id }}]" class="px-4 py-2 text-lg text-secondaryOrange bg-stone-100 rounded-3xl" required>{{ old("answer[{$answer->question->id}]") ?? $answer->body }}
                    </textarea>
                    <x-form.error name="answer[{{ $answer->question->id }}]" />
                </div>
                @endforeach


                <div class="mt-2">
                    <button type="submit" class="flex w-full justify-center rounded-2xl bg-primaryOrange px-3 py-3 text-md font-extrabold leading-6 text-stone-100 shadow-sm hover:text-indigo-500 hover:bg-stone-200 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                        Contribute!
                    </button>
                </div>
            </form>
        </section>
        @endif

    </x-main-logo>
</x-layout>