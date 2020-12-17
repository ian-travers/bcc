@props([
    'type' => 'success',
    'colors' => [
        'success' => 'bg-green-200',
        'error' => 'bg-red-200',
        'warning' => 'bg-orange-200',
    ]
])

<section {{ $attributes->merge(['class' => "{$colors[$type]} p-4"]) }}>
    <div class="flex justify-between">
        <p>{{ $slot }}</p>
        <button>&times;</button>
    </div>
</section>

