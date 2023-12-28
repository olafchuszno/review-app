@props(['href' => ''])
<li class="flex justify-center text-center -mb-0.5">
    <a href="/{{ $href }}" class="text-md w-full rounded-2xl py-2 font-bold leading-6 bg-primaryIndigo {{ request()->is($href) ? 'text-primaryIndigo bg-raisinBlack shadow-sm shadow-primaryIndigo border-primaryIndigo border-2' : 'text-raisinBlack  hover:text-primaryIndigo hover:bg-raisinBlack hover:shadow-sm hover:shadow-primaryIndigo'}}">
        {{ $slot }}
    </a>
</li>