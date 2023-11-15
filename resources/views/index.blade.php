<x-layout>
    <main>
        <div class="mt-20">
            <x-style.logo size="150px"/>
        </div>
        <div class="py-14 px-4 mx-auto max-w-2xl rounded-full bg-primaryIndigo shadow-sm shadow-primaryOrange flex flex-col gap-7 items-center">
            <div>
                <h2 class="text-4xl font-bold text-stone-200">
                    Which airport are we looking for?
                </h2>
            </div>
            <div>
                <form action="/search" method="POST" class="flex gap-4">
                    @csrf

                    <input name="airport" placeholder="e.g. LAX or Warsaw" class="text-primaryIndigo text-lg font-bold placeholder:font-bold px-3 py-1 rounded-2xl bg-neutralStone" type="text">
                    <button type="submit" class="font-bold px-6 py-1 rounded-2xl bg-primaryOrange hover:bg-secondaryIndigo hover:border hover:border-neutralStone active:bg-neutralStone active:text-primaryIndigo active:ring ring-neutralStone transition">
                        Let's go!
                    </button>
                </form>
            </div>
        </div>
    </main>
</x-layout>