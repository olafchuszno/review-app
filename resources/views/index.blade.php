<x-layout>
    <main class="mt-30 py-10 mx-auto max-w-xl gap-3 rounded-3xl bg-slate-400 flex flex-col gap-7 items-center">
            <div>
                <h2 class="text-3xl text-white">
                    Which airport are we looking for?
                </h2>
            </div>
            <div>
                <form action="/airports" method="GET" class="flex gap-4">
                    @csrf

                    <input name="airport" placeholder="e.g. LAX or Warsaw" class="text-indigo-900 px-3 py-1 rounded-2xl border-2 bg-slate-200" type="text">
                    <button type="submit" class="bg-slate-700 text-slate-100 px-6 py-1 rounded-2xl bg-slate-200 ">Let's go!</button>
                </form>
            </div>
    </main>
</x-layout>