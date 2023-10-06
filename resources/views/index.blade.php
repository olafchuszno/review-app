<x-layout>
    <main>
        <div class="mt-20">
            <x-style.logo size="150px"/>
        </div>
        <div class="py-10 mx-auto max-w-xl rounded-full bg-indigo-700 flex flex-col gap-7 items-center">
            <div>
                <h2 class="text-3xl text-white">
                    Which airport are we looking for?
                </h2>
            </div>
            <div>
                <form action="/search" method="POST" class="flex gap-4">
                    @csrf

                    <input name="airport" placeholder="e.g. LAX or Warsaw" class="text-indigo-900 px-3 py-1 rounded-2xl border-2 bg-slate-200" type="text">
                    <button type="submit" class="text-indigo-500 font-bold px-6 py-1 rounded-2xl bg-slate-200 ">Let's go!</button>
                </form>
            </div>
        </div>
    </main>
</x-layout>