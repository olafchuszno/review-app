@props(['class' => '', 'href'])

<a href="{{ $href }}" class="text-2xl {{ $class }} bg-primaryIndigo text-white font-bold px-8 py-5 rounded-2xl hover:bg-neutralStone hover:text-primaryIndigo">
    {{ $slot }}
</a>