@if ($errors->get($name))
    <p class="text-lg font-bold text-secondaryOrange text-center">
        {{ $errors->get($name)[0] }}
    </p>
@endif