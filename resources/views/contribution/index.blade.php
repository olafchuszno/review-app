<x-layout>

    <x-main-airport :airport="$airport" :topic="$topic">

        <section class="flex flex-col w-2/3 items-center">

            <div class="mb-4">
                <x-navigation.buttons :object="$contributions" />
            </div>

            @foreach ($contributions as $contribution)

            <div class="p-5 border rounded-2xl border-neutralStone bg-indigo-300 flex flex-col items-center mb-10">

                @if ((request('page') == 1 || request('page') == null) && $loop->first)
                <p class="py-3 text-2xl text-stone-200 w-2/5 bg-primaryIndigo font-bold rounded-full text-center my-5">
                    The most relevant contribution
                </p>
                @endif

                <table class="divide-y divide-gray-100 text-indigo-800 mt-2">

                    @foreach ($contribution->answers as $answer)
                    <x-basic-info class="{{ $loop->last ? '' : 'border-b-2 border-indigo-200' }}">
                        <x-td-first>{{ $answer->question->body }}</x-td-first>
                        <x-td-second>{{ $answer->body }}</x-td-second>
                    </x-basic-info>
                    @endforeach

                </table>
                <form action="{$contribution->id}" method="POST" class="min-w-full mt-2">
                    @method('store')
                    <button type="submit" class="flex items-center gap-1 justify-start max-w-min bg-indigo-800 px-2 py-1 rounded-2xl">
                        <p class="text-indigo-300 font-bold text-xl">Like</p>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="#A5B4FC" width="20" height="20" viewBox="0 0 24 24">
                            <path d="M15.653 19.415c-1.162 1.141-2.389 2.331-3.653 3.585-6.43-6.381-12-11.147-12-15.808 0-4.005 3.098-6.192 6.281-6.192 2.197 0 4.434 1.042 5.719 3.248 1.279-2.195 3.521-3.238 5.726-3.238 3.177 0 6.274 2.171 6.274 6.182 0 1.269-.424 2.546-1.154 3.861l-1.483-1.484c.403-.836.637-1.631.637-2.377 0-2.873-2.216-4.182-4.274-4.182-3.257 0-4.976 3.475-5.726 5.021-.747-1.54-2.484-5.03-5.72-5.031-2.315-.001-4.28 1.516-4.28 4.192 0 3.442 4.742 7.85 10 13l2.239-2.191 1.414 1.414zm7.347-5.415h-3v-3h-2v3h-3v2h3v3h2v-3h3v-2z" />
                        </svg>
                    </button>
            </div>
            </div>

            @endforeach

        </section>

        {{ $contributions->links() }}

    </x-main-airport>

</x-layout>