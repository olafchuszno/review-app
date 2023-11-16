@props(['object', 'class' => ''])
<div class="{{ $class }}">
    @if ($object->hasPages())
        <nav role="navigation" aria-label="Pagination Navigation" class="flex justify-between gap-4">
            {{-- Previous Page Link --}}
            @if (! $object->onFirstPage())
                <a href="{{ $object->previousPageUrl() }}" rel="prev" class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-neutralStone bg-primaryIndigo leading-5 rounded-md hover:text-primaryOrange focus:outline-none focus:ring ring-neutralStone focus:border-blue-300 active:bg-neutralStone active:text-primaryIndigo transition ease-in-out duration-150">
                    {!! __('pagination.previous') !!}
                </a>
            @endif

            {{-- Next Page Link --}}
            @if ($object->hasMorePages())
                <a href="{{ $object->nextPageUrl() }}" rel="next" class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-neutralStone bg-primaryIndigo leading-5 rounded-md hover:text-primaryOrange focus:outline-none focus:ring ring-neutralStone focus:border-blue-300 active:bg-neutralStone active:text-primaryIndigo transition ease-in-out duration-150">
                    {!! __('pagination.next') !!}
                </a>
            @endif
        </nav>
    @endif
</div>