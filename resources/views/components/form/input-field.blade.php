@props(['type' => 'text', 'label_class' => '', 'input_class' => '', 'name'])
<div>
    <label for="{{ $name }}" class="block text-sm font-medium leading-6 text-gray-900 {{ $label_class }}">{{ $slot }}</label>
    <div class="mt-0.5">
    <input id="{{ $name }}" name="{{ $name }}" type="{{ $type }}" {{ $attributes }} class="block w-full rounded-md border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 {{ $input_class }}">
    </div>
</div>