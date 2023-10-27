@props(['text' => 'text-primaryOrange', 'href'])
<div class="text-2xl {{ $text }} bg-indigo-600 text-orangeLogo font-bold px-8 py-5 rounded-2xl">
    <a href="{{ $href }}">
        {{ $slot }}
    </a>
</div>