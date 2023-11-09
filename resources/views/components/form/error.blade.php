@if ($errors->get($name))
    <p class="bg-stone-300 border-2 border-red-500 font-bold px-2 py-1.5 rounded-2xl text-center text-md text-red-500">
        {{ $errors->first($name) }}
    </p>
@endif