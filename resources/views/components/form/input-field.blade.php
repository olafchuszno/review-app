@props(['type' => 'text', 'label_class' => '', 'input_class' => 'text-darkGrey placeholder:text-darkGrey', 'name', 'div_class' => '', 'error_case' => $errors->has($name) ? 'ring-red-500 ring-2' : 'focus:ring-indigo-600 ring-1'])
<div class="{{ $div_class }}">
    <label for="{{ $name }}" class="text-raisinBlack mb-1 block text-lg font-semibold leading-6 {{ $label_class }}">{{ $slot }}</label>
    <div class="mt-0.5">
        <input id="{{ $name }}" name="{{ $name }}" type="{{ $type }}" {{ $attributes }} class="{{ $input_class }} block w-full text-lg {{ $error_case }} rounded-md border-0 py-1.5 px-2 outline-none shadow-sm ring-inset font-semibold bg-darkGrey ring-neutralStone focus:ring-2 focus:ring-inset sm:text-lg sm:leading-6">
    </div>
</div>