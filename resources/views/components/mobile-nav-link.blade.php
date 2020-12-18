@props(['route'])

@php
    $classes = request()->routeIs($route) ? 'bg-blue-500' : '';
@endphp

<a href="{{ route($route) }}" {{ $attributes->merge(['class' => "block p-1 rounded {$classes}"]) }}>
    {{ $slot }}
</a>

