@props(['class' => '', 'heading'])
<main class="mt-1 {{ $class }}">
    <section>

        <div class="-mb-2">
            <x-style.logo />
        </div>

        <x-h1-so>
            {{ $heading }}
        </x-h1-so>
    </section>

    {{ $slot }}

</main>