<x-layout>

<x-main-logo heading="Your contributions!">

    <section class="flex flex-col items-center">

        <div>
        @if ($contributions->hasPages())
            <nav role="navigation" aria-label="Pagination Navigation" class="flex justify-between gap-4">
                {{-- Previous Page Link --}}
                @if ($contributions->onFirstPage())
                    <span class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-500 bg-primaryIndigo border border-gray-300 cursor-default leading-5 rounded-md">
                        {!! __('pagination.previous') !!}
                    </span>
                @else
                    <a href="{{ $contributions->previousPageUrl() }}" rel="prev" class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-primaryIndigo border border-gray-300 leading-5 rounded-md hover:text-gray-500 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
                        {!! __('pagination.previous') !!}
                    </a>
                @endif

                {{-- Next Page Link --}}
                @if ($contributions->hasMorePages())
                    <a href="{{ $contributions->nextPageUrl() }}" rel="next" class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-primaryIndigo border border-gray-300 leading-5 rounded-md hover:text-gray-500 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
                        {!! __('pagination.next') !!}
                    </a>
                @else
                    <span class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-500 bg-primaryIndigo border border-gray-300 cursor-default leading-5 rounded-md">
                        {!! __('pagination.next') !!}
                    </span>
                @endif
            </nav>
            @endif
        </div>

        <div class="flex flex-col w-2/3 items-center mt-8">

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
            
        </div>



        <div class="flex items-center">
            {{ $contributions->links() }}
        </div>

    </section>
    
</x-main-airport>

</x-layout>