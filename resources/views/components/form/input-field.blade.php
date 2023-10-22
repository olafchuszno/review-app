@props(['type' => 'text', 'label_class' => '', 'input_class' => 'text-indigo-700 placeholder:text-indigo-700', 'name'])
<div>
    <label for="{{ $name }}" class="text-neutralStone mb-1 block text-lg font-semibold leading-6 {{ $label_class }}">{{ $slot }}</label>
    <div class="mt-0.5">
    <input id="{{ $name }}" name="{{ $name }}" type="{{ $type }}" {{ $attributes }} class="{{ $input_class }} block w-full text-lg rounded-md bg-neutralStone border-0 py-1.5 px-2 shadow-sm ring-1 ring-inset font-semibold ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-lg sm:leading-6">
    </div>
</div>