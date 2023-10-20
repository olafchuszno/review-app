@props(['class' => ''])
<main class="mt-1 {{ $class }}">

    <div>
        <x-style.logo />
    </div>

    {{ $slot }}

</main>