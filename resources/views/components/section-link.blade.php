@props(['class' => '', 'href' => '', 'requestIs' => ''])
<a href="{{ $href }}" class="{{ request()->is($requestIs) ? 'bg-primaryIndigo ' : '' }} {{ $class }} mt-1 text-xl leading-6 font-bold rounded-lg hover:bg-primaryIndigo px-2 py-1">
    {{ $slot }}
</a>