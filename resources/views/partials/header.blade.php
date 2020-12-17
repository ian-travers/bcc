<header class="bg-gray-700 text-white px-6 py-4 flex justify-between items-center">
    <h1 class="font-bold tracking-widest uppercase">Laracasts</h1>

    <nav>
        <a
            class="px-6 hover:underline hover:text-blue-300 {{ request()->is('/') ? 'underline text-blue-300' : '' }}"
            href="{{ route('home') }}"

        >
            Home
        </a>
        <a
            class="px-6 hover:underline hover:text-blue-300 {{ request()->is('about') ? 'underline text-blue-300' : '' }}"
            href="{{ route('about') }}"
        >
            About
        </a>
        <a
            class="px-6 hover:underline hover:text-blue-300" {{ request()->is('testimonials') ? 'underline text-blue-300' : '' }}
            href="{{ route('testimonials') }}"
        >
            Testimonials
        </a>
        <a
            class="px-6 hover:underline hover:text-blue-300 {{ request()->is('contact') ? 'underline text-blue-300' : '' }}"
            href="{{ route('contact') }}"
        >
            Contact
        </a>
    </nav>

    <x-dropdown alignment="right">
        <x-slot name="trigger">
            <button>
                <img src="https://www.placecage.com/30/30"
                     class="rounded-full border border-white"
                     alt=""
                >
            </button>
        </x-slot>

        <x-dropdown-link href="#">Account</x-dropdown-link>
        <x-dropdown-link href="#">Support</x-dropdown-link>
    </x-dropdown>
</header>

