@props(['class' => 'border-b-2 border-stone-200 px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0'])
<tr class="{{ $class }}">
    {{ $slot }}
</tr>