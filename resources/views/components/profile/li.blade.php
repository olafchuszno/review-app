@props(['href' => ''])
<li class="flex justify-center text-center -mb-0.5">
    <a href="/{{ $href }}" class="text-md w-full rounded-2xl py-2 font-bold leading-6 bg-primaryIndigo {{ request()->is($href) ? 'text-primaryOrange' : 'text-stone-300  hover:text-primaryOrange'}}">
        {{ $slot }}
    </a>
</li>