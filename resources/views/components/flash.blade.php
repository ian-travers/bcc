@props([
    'type' => 'success'
])

<section class="{{ $type === 'success' ? 'bg-green-200' : 'bg-red-200' }} p-4">
    <div class="flex justify-between">
        <p>{{ $slot }}</p>
        <button>&times;</button>
    </div>
</section>

