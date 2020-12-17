<x-layout>
    <div class="flex p-4">
        <div class="flex-auto">
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
        <div class="flex-auto p-4">
            <a class="bg-gray-400 text-white rounded py-2 px-4 hover:bg-gray-500" href="/comments/1/edit">
                Episode 3 + 4: Form && Form Button
            </a>

            <x-modal
                title="Deactivate your account?"
                submit-label="Deactivate now"
                cancel-label="Not now"
            >
                <x-slot name="trigger">
                    <button @click="on = true">Episode 5: Modal</button>
                </x-slot>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam eius eos molestiae nesciunt nulla saepe sint, vero? Blanditiis, culpa eligendi facilis fuga laboriosam maiores neque non suscipit tempore veritatis voluptas!
            </x-modal>
        </div>
    </div>
</x-layout>
