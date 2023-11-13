<x-layout>

<x-main-airport :airport="$airport" :topic="$topic">

    <section class="flex flex-col w-2/3 items-center">

        @foreach ($contributions as $contribution)

            <div class="p-5 border rounded-2xl border-neutralStone bg-indigo-300 flex flex-col items-center mb-10">

                @if (request('page') == 1 && $loop->first)
                    <p class="py-3 text-2xl text-stone-200 w-2/5 bg-secondaryOrange font-bold rounded-full text-center my-5">
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

            </div>

            @if (request('page') == 1 && $loop->first)
                <p class="px-4 py-2 text-2xl text-slate-100 w-2/5 bg-slate-500 rounded-full font-semibold text-center mb-10">
                    Other Contributions
                </p>
            @endif

        @endforeach
        
    </section>

    {{ $contributions->links() }}
    
</x-main-airport>

</x-layout>