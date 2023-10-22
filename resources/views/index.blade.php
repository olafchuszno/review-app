<x-layout>
    <main>
        <div class="mt-20">
            <x-style.logo size="150px"/>
        </div>
        <div class="py-14 px-4 mx-auto max-w-2xl rounded-full bg-primaryIndigo flex flex-col gap-7 items-center">
            <div>
                <h2 class="text-4xl font-bold text-stone-200">
                    Which airport are we looking for?
                </h2>
            </div>
            <div>
                <form action="/search" method="POST" class="flex gap-4">
                    @csrf

                    <input name="airport" placeholder="e.g. LAX or Warsaw" class="text-indigo-900 text-lg placeholder:font-bold px-3 py-1 rounded-2xl border-2 bg-slate-200" type="text">
                    <button type="submit" class="text-stone-200 font-bold px-6 py-1 rounded-2xl bg-primaryOrange">Let's go!</button>
                </form>
            </div>
        </div>
    </main>
</x-layout>