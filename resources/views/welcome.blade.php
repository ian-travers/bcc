<x-layout>
    <div class="flex p-4">
        <div class="w-1/2 px-2">
            <x-section>
                Hello
            </x-section>

            <x-flash class="mb-4">
                You are logged in
            </x-flash>

            <x-flash class="mb-4" type="error">
                Whoops ...
            </x-flash>

            <x-flash type="warning">
                Some ...
            </x-flash>
        </div>
        <div class="w-1/2 px-2 mt-2">
            <div class="mb-5">
                <a class="bg-gray-400 text-white rounded py-2 px-4 hover:bg-gray-500" href="/comments/1/edit">
                    Episode 3 + 4: Form && Form Button
                </a>
            </div>

            <x-modal
                title="Deactivate your account?"
                submit-label="Deactivate now"
                cancel-label="Not now"
            >
                <x-slot name="trigger">
                    <button
                        class="bg-gray-400 text-white rounded py-2 px-4 hover:bg-gray-500"
                        @click="on = true"
                    >
                        Episode 5: Modal
                    </button>
                </x-slot>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam eius eos molestiae nesciunt nulla
                saepe sint, vero? Blanditiis, culpa eligendi facilis fuga laboriosam maiores neque non suscipit tempore
                veritatis voluptas!
            </x-modal>
            <div class="mb-4"></div>
            <x-section>
                <div class="flex justify-end">
                    <x-dropdown alignment="right">
                        <x-slot name="trigger">
                            <button
                                class="bg-gray-400 text-white rounded py-2 px-4 hover:bg-gray-500"
                            >
                                Episode 6: Dropdown
                            </button>
                        </x-slot>

                        <x-dropdown-link href="/">One</x-dropdown-link>
                        <x-dropdown-link href="/">Two</x-dropdown-link>
                        <x-dropdown-link href="/">Three</x-dropdown-link>
                    </x-dropdown>
                </div>

                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad, assumenda consequuntur mollitia unde voluptatem? Animi commodi consectetur, cumque ea, error est impedit, maiores maxime molestiae nisi provident sit unde.

            </x-section>

            <p>Episode 9: Tabs</p>
            <x-tabs active="First">
                <x-tab name="First">First tab content goes here</x-tab>
                <x-tab name="Second">Second tab content goes here</x-tab>
                <x-tab name="Third">Third tab content goes here</x-tab>
            </x-tabs>
        </div>
    </div>

    <div class="px-8 my-4">
        <p class="mb-3">Episode 11: Google reCaptcha v.2. Click the button below to see a form with the reCaptcha. Надо кликнуть кнопку ниже.</p>
        <a
            class="bg-green-400 text-white rounded py-2 px-4 hover:bg-green-500"
            href="{{ route('comment.create') }}"
        >
            Create a comment
        </a>
    </div>
</x-layout>
