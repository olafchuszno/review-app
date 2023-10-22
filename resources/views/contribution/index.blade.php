<x-layout>

<x-main-airport :airport="$airport" :topic="$topic">

    <div class="flex flex-col w-2/3 items-center mt-8">

        @foreach ($contributions as $contribution)

            <div class="p-5 border rounded-2xl border-slate-300 bg-indigo-300 flex flex-col items-center mb-10">

                @if ($loop->first)
                    <p class="py-3 text-2xl text-slate-200 w-2/5 bg-indigo-700  rounded-full font-semibold text-center my-5">
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

            @if ($loop->first)
                <p class="px-4 py-2 text-2xl text-slate-100 w-2/5 bg-slate-500 rounded-full font-semibold text-center mb-10">
                    Other Contributions
                </p>
            @endif

        @endforeach
        
    </div>
    
</x-main-airport>

</x-layout>