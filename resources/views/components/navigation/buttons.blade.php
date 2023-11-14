@props(['contributions', 'class' => ''])
<div class="{{ $class }}">
    @if ($contributions->hasPages())
        <nav role="navigation" aria-label="Pagination Navigation" class="flex justify-between gap-4">
            {{-- Previous Page Link --}}
            @if (! $contributions->onFirstPage())
                <a href="{{ $contributions->previousPageUrl() }}" rel="prev" class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-neutralStone bg-primaryIndigo leading-5 rounded-md hover:text-primaryOrange focus:outline-none focus:ring ring-neutralStone focus:border-blue-300 active:bg-neutralStone active:text-primaryIndigo transition ease-in-out duration-150">
                    {!! __('pagination.previous') !!}
                </a>
            @endif

            {{-- Next Page Link --}}
            @if ($contributions->hasMorePages())
                <a href="{{ $contributions->nextPageUrl() }}" rel="next" class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-neutralStone bg-primaryIndigo leading-5 rounded-md hover:text-primaryOrange focus:outline-none focus:ring ring-neutralStone focus:border-blue-300 active:bg-neutralStone active:text-primaryIndigo transition ease-in-out duration-150">
                    {!! __('pagination.next') !!}
                </a>
            @endif
        </nav>
    @endif
</div>