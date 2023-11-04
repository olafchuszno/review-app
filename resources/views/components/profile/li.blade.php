@props(['href' => ''])
<li class="flex justify-center gap-x-6 py-5">
    <a href="/{{ $href }}" class="text-lg font-semibold px-6 py-2 rounded-2xl leading-6 {{ request()->is($href) ? 'bg-primaryIndigo text-stone-100' : 'text-primaryOrange hover:bg-primaryIndigo hover:text-stone-100'}}">
        {{ $slot }}
    </a>
</li>