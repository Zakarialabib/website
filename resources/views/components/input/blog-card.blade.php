@props(['blog'])
<div class="flex flex-col items-center text-center py-4 px-2 border-green-300 border rounded-2xl">
    <a href="{{ route('front.blogPage', $blog->slug) }}" class="cursor-pointer my-auto py-10">
        <img alt="{{ $blog->title }}" src="{{ $blog->getFirstMediaUrl('blog') }}"
            onerror="this.onerror=null;this.remove();" class="max-w-full h-auto align-middle mb-4" />
        <h3 class="text-2xl leading-none font-bold mb-6">{{ $blog->title }}</h3>
       
        <div class="items-center bg-green-600 inline-flex py-1 px-3 border-green-300 border rounded-3xl text-white">
            <span class="mr-3">{{ __('Read more') }}</span><svg fill="currentColor" viewbox="0 0 12 8"
                class="h-3 w-3">
                <path d="m6.5 5.1-5.1 5.2L0 8.9l3.7-3.8L0 1.4 1.4 0" fill="currentColor">
                </path>
            </svg>
        </div>
    </a>
</div>
