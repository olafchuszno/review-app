<a href="{{ $href }}" class="{{ request()->is($requestIs) ? 'bg-indigo-200' : '' }} mt-1 text-lg leading-6 font-bold rounded-lg text-indigo-800 hover:bg-indigo-200 px-2 py-1">
    {{ $slot }}
</a>