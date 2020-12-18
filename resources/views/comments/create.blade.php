<x-layout>
    <x-section>
        <x-form class="max-w-sm mx-auto mt-2" method="post" action="/comments">
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

            <div class="mb-6">
                <button
                    type="submit"
                    class="g-recaptcha bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500"
                    data-sitekey="{{ config('services.recaptcha.key') }}"
                    data-callback='onSubmit'
                >
                    Submit
                </button>
            </div>
        </x-form>
    </x-section>
</x-layout>

