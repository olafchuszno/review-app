@props(['href' => ''])
<li class="flex justify-center text-center -mb-0.5">
    <a href="/{{ $href }}" class="text-md w-full rounded-2xl py-2 font-bold leading-6 bg-primaryIndigo {{ request()->is($href) ? 'text-primaryOrange bg-secondaryIndigo shadow-sm shadow-primaryIndigo border-primaryIndigo border-2' : 'text-stone-300  hover:text-primaryOrange hover:bg-secondaryIndigo hover:border-2 hover:border-primaryIndigo hover:shadow-sm hover:shadow-primaryIndigo'}}">
        {{ $slot }}
    </a>
</li>