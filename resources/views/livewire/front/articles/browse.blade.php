<div>
    @section('title', __('All articles'))

    <div class="z-0 flex-1 w-full ">
        <div class=" py-6 max-w-7xl mx-auto px-4">
            <div class="w-full text-center py-10">
                <h1
                    class="text-4xl font-extrabold uppercase tracking-tight font-heading text-skin-primary sm:leading-none lg:text-6xl">
                    Our Blog
                </h1>
                <p class="font-bold  text-[14px] md:text-heading-6 text-gray-600 mx-auto md:max-w-[55ch]">
                    From year to year we strive to invent the most innovative technology that is used by both
                    small enterprises and space enterprises.
                </p>

                <x-social />

            </div>
            {{-- <div class="bg-white md:block md:col-span-4 p-2 md:pb-0 mb-4"> --}}


            {{--    <div class="pb-8 pt-2">
                    <h4 class="text-skin-inverted text-base pt-4 leading-6 text-center font-medium">
                        {{ __('View mode') }}
                    </h4>
                    <div class="mt-5 flex items-center justify-center gap-2">
                    <x-view-mode mode="list" :isViewMode="$viewMode === 'list'">
                                <svg class="h-4 w-4 mr-2 /60" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M3.75 12h16.5m-16.5 3.75h16.5M3.75 19.5h16.5M5.625 4.5h12.75a1.875 1.875 0 010 3.75H5.625a1.875 1.875 0 010-3.75z" />
                                </svg>
                                {{ __('Liste') }}
                            </x-view-mode>
                            <x-view-mode mode="card" :isViewMode="$viewMode === 'card'">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="h-4 w-4 mr-2 /60">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M6 6.878V6a2.25 2.25 0 012.25-2.25h7.5A2.25 2.25 0 0118 6v.878m-12 0c.235-.083.487-.128.75-.128h10.5c.263 0 .515.045.75.128m-12 0A2.25 2.25 0 004.5 9v.878m13.5-3A2.25 2.25 0 0119.5 9v.878m0 0a2.246 2.246 0 00-.75-.128H5.25c-.263 0-.515.045-.75.128m15 0A2.25 2.25 0 0121 12v6a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 18v-6c0-.98.626-1.813 1.5-2.122" />
                                </svg>
                                {{ __('Carte') }}
                            </x-view-mode>
                    </div>
                </div>
                <div class="py-8">
                    <h4 class="text-skin-inverted text-base text-center leading-6 font-medium">
                        {{ __('Tous les tags') }}</h4>
                    <x-tags :tags="$tags" :selected-tag="$selectedTag" :showTagsColor="false" showTagsIcon /> 
                </div>
                <div class="pb-8 pt-2">

                </div>
            </div> --}}

            <div class="relative max-w-7xl mx-auto" x-data x-intersect="@this.call('loadMore')">

                <div class="lg:grid lg:grid-cols-3 lg:gap-x-5 xl:gap-x-[30px] gap-y-[50px] xl:gap-y-[87px]">
                    @forelse ($articles as $article)
                        <a class="block group" href="{{ route('articles.show', $article->slug) }}">
                            <div class="flex items-center mb-[11px]">
                                <div class="bg-gray-500 rounded-full w-[3px] h-[3px] mr-[6px]"></div><span
                                    class="uppercase text-gray-500">
                                    {{ $article->category->name }}
                                </span>
                            </div>
                            <div class="relative mb-16">
                                <div class="relative">
                                    <div class="pr-[26px] aspect-[430/275]">
                                        <img class="h-full w-full object-cover rounded-2xl z-10 relative"
                                            src="{{ $article->thumbnail }}" alt="{{ $article->title }}">
                                    </div>
                                </div>
                            </div>
                        </a>
                    @empty
                        <div
                            class="col-span-full text-center w-full group flex justify-center items-center z-10 relative flex-col lg:gap-[50px]">
                            <div class="flex-1 py-10 rounded-2xl bg-white px-6">
                                <div class="text-center mb-3">
                                    Sorry for this inconvenience no articles found
                                </div>
                                <h2 class="font-bold text-green-400 text-[25px] leading-[30px] md:text-heading-3 mb-5">
                                    Even if you are not a programmer, you can still get the best out of our
                                    work
                                </h2>
                                <p class="text-center text-gray-500 mb-[44px]">
                                    totally diffrent view of the world, and how to make the best out of it.
                                </p>
                                <div class="flex justify-center items-center gap-[15px]"><img
                                        class="h-full w-full object-cover rounded-full max-w-[55px]"
                                        src="./assets/images/avatar-11.png" alt="avatar">
                                    <div>
                                        <p class="line-clamp-2 font-bold mb-[3px] text-gray-900 text-heading-6">
                                            Zakaria Labib</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforelse
                </div>

                @if ($articles->hasMorePages())
                    <div x-data x-intersect="@this.call('loadMore')" class="mt-5 flex justify-center">
                        <p class="flex items-center">
                            {{-- <x-loader class="text-skin-primary" /> --}}
                            {{ __('Chargement...') }}
                        </p>
                    </div>
                @endif

            </div>

        </div>
    </div>

</div>
</div>
