<x-layout>
    <x-section>
        <form
            class="max-w-sm mx-auto mt-2"
            method="post"
            action="/comments"
            x-data
            @submit.prevent="$dispatch('recaptcha')"
            @recaptcha-complete.window="$el.submit()"
        >
            @csrf
            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-gray-700" for="body">Body</label>
                <textarea class="border border-gray-400 p-2 w-full"
                          name="body"
                          id="body"
                          required
                ></textarea>

                @error('body')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>

            <x-recaptcha></x-recaptcha>

            <div class="mb-6">
                <button
                    type="submit"
                    class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500"
                >
                    Submit
                </button>
            </div>
            <ul>
                @if($errors->any())
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                @endif
            </ul>
        </form>
    </x-section>
</x-layout>

