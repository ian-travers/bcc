<x-form method="{{ $method }}" action="{{ $action }}">
    <div>
        <button
            type="submit"
            class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500"
        >
            {{ $slot }}
        </button>
    </div>
</x-form>

