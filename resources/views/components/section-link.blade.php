<a href="{{ $href }}" class="{{ request()->is($requestIs) ? 'bg-indigo-200 text-indigo-700' : '' }} mt-1 text-xl leading-6 font-bold rounded-lg hover:bg-indigo-200 hover:text-indigo-800 px-2 py-1">
    {{ $slot }}
</a>