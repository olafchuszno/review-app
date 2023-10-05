@if ($errors->get($name))
    <p class="text-xs text-red-500">
        {{ $errors->get($name)[0] }}
    </p>
@endif