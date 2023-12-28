@props(['class' => ''])
<td class="{{ $class }} py-2 text-lg font-semibold flex items-center justify-center">
    <p class="flex justify-center items-center gap-1 hover:text-primaryOrange">
        {{ $slot }}
    </p>
</td>