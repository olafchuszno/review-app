@props(['class' => 'border-b-2 border-slate-200'])
<tr class="{{ $class }} px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
    {{ $slot }}
</tr>