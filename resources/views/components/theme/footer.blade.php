<footer class="w-full mt-auto bg-gray-800 text-white">
    <div class="px-6 py-6">
        <div class="grid gap-y-10 gap-x-4 sm:grid-cols-2 lg:grid-cols-3 items-center text-center justify-center">
            <div class="relative items-center align-middle text-center justify-center">
                <ul class="flex flex-col gap-3 font-bold items-center justify-between text-center ">
                    <img loading="lazy" src="{{ asset('images/logo-white.svg') }}" alt="zakarialabib"
                        class="h-45 w-45 justify-items-center">
                </ul>
                <x-social />
            </div>

            <div class="relative items-center align-middle text-center justify-center">
                <p class="mb-5 text-lg font-extrabold text-grey-500 ">
                    {{ __('Footer Section 1') }}
                </p>
                <div class="flex flex-col gap-y-4">
                    {{-- @foreach ($footer_1 as $index => $item)
                        <a href="{{ $item['url'] }}" @if ($item['new_window']) target="__blank" @endif
                            class="text-base font-normal text-white hover:text-red-600 dark:hover:text-red-900 hover:underline focus:underline uppercase">
                            {{ $item['label'] }}
                        </a>
                    @endforeach --}}
                </div>
            </div>
            <div class="relative items-center align-middle text-center justify-center">
                <p class="mb-5 text-lg font-extrabold text-grey-500 ">
                    {{ __('Footer Section 2') }}
                </p>
                <div class="flex flex-col gap-y-4">
                    {{-- @foreach ($footer_2 as $index => $item)
                        <a href="{{ $item['url'] }}" @if ($item['new_window']) target="__blank" @endif
                            class="text-base font-normal text-white hover:text-red-600  dark:hover:text-red-900 hover:underline focus:underline uppercase">
                            {{ $item['label'] }}
                        </a>
                    @endforeach --}}
                </div>
            </div>
        </div>
    </div>

    <div class="bg-gray-900 text-white py-2 border-t-2 border-transparent">
        <div class="px-6">
            <div class="flex flex-col items-center justify-between text-center font-bold  md:flex-row">
                <div>
                    Copyright© <span class="curr-year">
                        {{ date('Y') }} -
                    </span>
                    <a href="javascript:"
                        class="underline text-green-300 hover:text-blue-600 focus:text-blue-600 transition ease-in-out">
                        {{ settings('site_title') ?? 'Zakaria Labib' }} </a>
                </div>
                <div>
                    <span>Need Help ?</span>
                    <a href="/" target="__blank" class="text-white underline hover:text-red-900">
                        Get in touch with us
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>
