<x-layout>
    <x-main-logo>

        <h1 class="text-center text-primaryOrange text-3xl font-bold leading-9 tracking-tight">Contribute. With knowledge!</h1>
        
        <div class="mt-20 bg-indigo-400 rounded-2xl px-6 py-10 sm:mx-auto sm:w-full sm:max-w-md">

            <form action="/register" method="POST" enctype="multipart/form-data" class="flex flex-col gap-4">
                @csrf

                <div class="flex gap-6 justify-start align-start">

                    <p class="text-2xl text-primaryIndigo font-bold">
                        Choose the category:
                    </p>

                    <select class="text-primaryOrange bg-stone-300 rounded-2xl text-center text-lg font-bold">
                        @foreach ($topics as $topic)
                            <option value="{{ $topic->id }}">{{ $topic->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mt-2">
                    <button type="submit" class="flex w-full justify-center rounded-xl bg-primaryOrange px-3 py-1.5 text-lg font-extrabold leading-6 text-stone-100 shadow-sm hover:text-indigo-500 hover:bg-stone-200 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                        Next
                    </button>
                </div>
            </form>

        </div>

    </x-main-logo>
</x-layout>