<div x-data="{ open: false }" @click.away="open = false">
    <span @click="open = !open">
        {{ $trigger }}
    </span>
    <div class="bg-white rounded shadow-md mt-1 py-2 w-40" x-show="open">
        {{ $slot }}
    </div>
</div>

