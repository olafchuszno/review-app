@props(['size' => '100px'])

<svg class="mx-auto aspect-auto" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" width="{{ $size }}" height="{{ $size }}" viewBox="0 0 100 100" fill="#3f51b5">
    <!-- Curved Lines -->
    <path d="M30 60 C 30 30, 70 30, 70 60" stroke="#3f51b5" stroke-width="4" fill="none" />
    
    <!-- Circles -->
    <circle cx="30" cy="60" r="5" fill="#ff9800" />
    <circle cx="70" cy="60" r="5" fill="#ff9800" />
</svg>