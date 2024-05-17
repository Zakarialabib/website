<div>
    <div class="py-4 mx-auto px-6">
        <p class="text-capitalized text-center uppercase text-gray-500 tracking-tight mb-6">
            {{ __('Receive the latest offers by subscribing to our newsletter.') }}
        </p>
        <div class="grid grid-cols-1 gap-4 items-center justify-center max-w-md mx-auto">
        <form wire:submit="store">
            <div class="bg-white flex items-center justify-between py-2 rounded-full shadow-lg mx-2">
                <input type="email" wire:model="email" id="email" name="email" autocomplete="email"
                    placeholder="{{ __('Enter your email') }}" value="{{ old('email') }}"
                    class="@error('email') is-invalid @enderror py-4 flex-grow bg-transparent border border-transparent focus:border-green-500 text-base text-gray-700 px-4 rounded-[55px] transition duration-300 focus:outline-none focus:ring focus:ring-green-300" />
                <button type="submit" class="rounded-full bg-green-900 grid place-items-center w-[56px] h-[56px]"
                    type="submit">
                    <i class="fas fa-arrow-right text-white"></i>
                </button>
            </div>
            <x-input-error :messages="$errors->get('email')" for="email" class="text-center mt-2" />
        </form>
        </div>
    </div>
</div>
