@props(['product'])
<div itemprop="itemListElement" itemscope itemtype="https://schema.org/Product">
    <div itemprop="brand" content="{{ $product->brand }}"></div>
    <div itemprop="sku" content="{{ $product->code }}"></div>
    <div itemprop="description" content="{{ $product->description }}"></div>

    <div class="mb-5 bg-white rounded-xl shadow-2xl sm:w-full relative">
        <div class="relative text-left">
            <a href="{{ route('front.product', $product->slug) }}"
                class="flex mx-auto mb-4 h-[180px] lg:h-[250px] rounded-t-lg"
                style="background-image: url('{{ $product->getFirstMediaUrl('local_files') }}');
                background-position: center;background-size: cover;">
                <meta itemprop="image" content="{{ $product->getFirstMediaUrl('local_files') }}" />
            </a>

            @if ($product->discount_price && $product->discount != 0)
                <div class="absolute top-0 right-0 mb-3 p-2 bg-red-500 rounded-bl-lg">
                    <span class="text-white font-bold text-sm">
                        - {{ $product->discount }}%
                    </span>
                </div>
            @endif
        </div>
        <div class="px-2 pb-4 text-left">
            @if ($product->category)
                <div
                    class="absolute top-3.5 md:top-5 3xl:top-7 ltr:left-3.5 rtl:right-3.5 ltr:md:left-5 rtl:md:right-5 ltr:3xl:left-7 rtl:3xl:right-7 flex flex-col gap-y-1 items-start">
                    <span
                        class="bg-indigo-600 text-white text-10px md:text-xs leading-5 rounded-md inline-block px-1.5 sm:px-1.5 xl:px-2 py-0.5 sm:py-1">
                        <p><span class="hidden sm:inline">{{ $product->category->name }}</span></p>
                    </span>
                </div>
            @endif
            <div class="w-full flex-none text-sm flex items-center justify-center text-gray-600 py-2">
                @if ($product->status === \App\Enums\Status::ACTIVE)
                    <div class="text-xs font-medium">
                        <span class="text-green-500">● {{ __('In Stock') }}</span>
                    </div>
                @else
                    <div class="text-xs font-medium">
                        <span class="text-red-500">●
                            {{ __('Out of Stock') }}</span>
                    </div>
                @endif

            </div>

            <a href="{{ route('front.product', $product->slug) }}">
                <h4 class="block text-center mb-2 text-md md:text-sm font-bold font-heading text-green-900 hover:text-green-600 uppercase"
                    itemprop="name">
                    {{ Str::limit($product->name, 40) }}</h4>
            </a>

            <div itemprop="offers" itemscope itemtype="https://schema.org/Offer">
                <p class="text-center text-black hover:text-green-800 font-bold text-md mt-2"><span
                        itemprop="price">{{ formatCurrency($product->price) }}</span>

                    @if ($product->discount_price && $product->discount != 0)
                        <del class="ml-4 text-black">{{ formatCurrency($product->discount_price) }} DH </del>
                    @endif
                </p>

                <meta itemprop="priceValidUntil" content="{{ now()->addWeek()->toIso8601String() }}">
                <meta itemprop="priceCurrency" content="MAD">
                <meta itemprop="availability"
                    content="{{ $product->status ? 'https://schema.org/InStock' : 'https://schema.org/OutOfStock' }}">
            </div>

            <div class="flex justify-center">
                <a class="my-2 block bg-green-500 hover:bg-green-800 text-center text-white font-bold text-xs py-2 px-4 rounded-md uppercase cursor-pointer tracking-wider hover:shadow-lg transition ease-in duration-300"
                    href="{{ route('front.product', $product->slug) }}">
                    {{ __('Read more') }}
                </a>
            </div>
        </div>
    </div>
</div>
