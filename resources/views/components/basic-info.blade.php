@props(['border' => 'border-b-2', 'class' => 'border-raisinBlack px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0'])
<tr class="{{ $class }} {{ $border }}">
    {{ $slot }}
</tr>