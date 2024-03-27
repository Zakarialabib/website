<div>
    <h2 class="text-xl font-bold mb-4 text-indigo-700">Subscribe to our Newsletter</h2>
    <input type="email" wire:model.defer="email" placeholder="Your Email"
        class="w-full p-2 border border-gray-300 rounded mb-4" />
    <button type="submit"
        class="bg-indigo-600 hover:bg-indigo-70	an inline-flex items-center justify-center rounded font-bold uppercase text-white px-5 py-2 focus:outline-none">Subscribe</button>
</div>
@props(['title', 'placeholder', 'buttonText'])

<div {{ $attributes }}>
    <h2 class="text-xl font-bold mb-4 text-indigo-700">{{ $title }}</h2>
    <x-input type="email" wire:model="email" placeholder="{{ $placeholder }}" />
    <button type="submit"
        class="bg-indigo-600 hover:bg-indigo-700 inline-flex items-center justify-center rounded font-bold uppercase text-white px-5 py-2 focus:outline-none">{{ $buttonText }}</button>
</div>
