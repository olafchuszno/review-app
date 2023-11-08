@props(['width' => '100px', 'class' => ''])
<img src="{{ asset('storage/' . auth()->user()->avatar) }}" 
    alt="user's avatar picture"
    width="{{ $width }}"
    class="{{ $class }} rounded-full p-0.5 hover:border-2 hover:border-primaryOrange"
/>