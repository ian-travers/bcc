@props(['alignment' => 'left'])

@php
    $alignmentClasses = [
        'left' => 'left-0',
        'right' => 'right-0'
    ];
@endphp

<div class="relative" x-data="{ open: false }" @click.away="open = false">
    <span @click="open = !open">
        {{ $trigger }}
    </span>
    <div
        class="{{ $alignmentClasses[$alignment] }} absolute z-20 text-black bg-white rounded shadow-md mt-1 py-2 w-40"
        x-show="open"
        x-transition:enter="transition transform duration-300"
        x-transition:enter-start="opacity-0 scale-50"
        x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition transform duration-300"
        x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-50"
    >
        {{ $slot }}
    </div>
</div>

