@props(['href' => URL::previous(), 'size' => '16px'])
<div class="flex gap-1 items-center mt-4">
    <x-style.back-arrow size="{{ $size }}" />
    <a href="{{ $href }}" class="font-semibold text-lg">
        back
    </a>
</div>