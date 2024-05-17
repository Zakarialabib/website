<div>
    @section('title', $page->title)

    <div class="bg-gray-100 text-black  isolate h-screen flex items-center">
        <div class="text-center mx-auto  max-w-3xl px-4 my-auto">
            <h1
                class="text-4xl font-extrabold uppercase tracking-tight font-heading text-skin-primary sm:leading-none lg:text-6xl">
                {{ __('Never ending journey') }}
            </h1>
            <article class="prose mt-3 text-base text-black sm:mt-5 sm:text-lg lg:text-xl">
                <p>
                    {{ __('Everything began behind a laptop screen in the late 2000s. I delved into the realms of AOL and Yahoo, explored the virtual world of Habbo, and conversed with people from across the globe at a young age') }}
                </p>
                <p>
                    {{ __("My initiation into technology stemmed from my father's business. I was inherently curious, always driven to learn, whether it was by dismantling gadgets or repairing them.") }}
                </p>
                <p>
                    {{ __('As I immersed myself in our family enterprise, which witnessed years of expansion, I found myself navigating through mobile parts, electronics, and emerging technologies. This journey eventually led me to oversee supplier chains spanning from China to Morocco.') }}
                </p>
                <p>
                    {{ __('Fueled by an unwavering passion for discovery and learning, I remain dedicated to seeking innovative solutions and avenues for growth, constantly striving to better myself for the future."') }}
                </p>
            </article>
        </div>
    </div>

    <div class="w-full bg-green-300">
        <div class="z-0 px-10 py-12 lg:py-20 text-center mx-auto max-w-7xl">
            <div class="divide-y divide-skin-base">
                <h3 class="text-black text-2xl sm:text-3xl leading-7 font-heading text-bold">
                    {{ __('Recent Posts') }}
                </h3>
                <p class="text-center mt-3 text-lg sm:text-xl leading-6">
                    {{ __('Discover the latest articles and posts, spanning various languages and topics.') }}
                </p>

                <div
                    class="grid max-w-xl gap-10 mx-auto mt-8 lg:grid-rows-3 lg:grid-flow-col lg:grid-cols-2 lg:mt-10 lg:gap-x-8 lg:max-w-none">
                    @foreach ($this->latestArticles as $article)
                        @if ($loop->first)
                            <div class="lg:row-span-3">
                                <div class="space-y-6">
                                    <a href="{{ route('articles.show', $article['slug']) }}" class="group">
                                        <div class="aspect-w-3 aspect-h-2">
                                            <img class="object-cover shadow-lg rounded-lg group-hover:opacity-75"
                                                src="{{ $article->getFirstMediaUrl('media') }}"
                                                alt="{{ $article['title'] }}" />
                                        </div>
                                    </a>
                                    <div class="space-y-4">
                                        <div>
                                            {{-- <time datetime="{{ $article->created_at->format('Y-m-d') }}"
                                                    class="font-sans text-sm leading-5  capitalize">
                                                    {{ $article->created_at->format('Y-m-d') }}
                                                </time> --}}
                                            <a href="{{ route('articles.show', $article['slug']) }}"
                                                class="mt-2 flex items-center justify-between group">
                                                <h4 class="text-lg leading-6 font-semibold font-sans ">
                                                    {{ $article['title'] }}
                                                </h4>
                                                <svg class="ml-2.5 h-5 w-5 " xmlns="http://www.w3.org/2000/svg"
                                                    fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                                    stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M13.5 6H5.25A2.25 2.25 0 003 8.25v10.5A2.25 2.25 0 005.25 21h10.5A2.25 2.25 0 0018 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" />
                                                </svg>
                                            </a>
                                            <p class="mt-1 font-normal  leading-6">
                                                {!! $article->excerpt(150) !!}
                                            </p>
                                        </div>
                                        <div class="flex items-center space-x-3">
                                            @if ($article->tags->isNotEmpty())
                                                <div class="flex items-center space-x-2">
                                                    @foreach ($article->tags as $tag)
                                                        <span
                                                            class="inline-flex items-center leading-none px-2.5 py-1.5 text-sm font-medium text-skin-inverted rounded-full border border-skin-input">
                                                            <svg class="mr-1.5 h-2 w-2 brand-{{ $tag->slug() }}"
                                                                fill="currentColor" viewBox="0 0 8 8">
                                                                <circle cx="4" cy="4" r="3" />
                                                            </svg>
                                                            {{ $tag->name() }}
                                                        </span>
                                                    @endforeach
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="lg:col-span-2">
                                <div class="space-y-4 lg:grid lg:grid-cols-3 lg:items-start lg:gap-6 lg:space-y-0">
                                    <a href="{{ route('articles.show', $article['slug']) }}" class="group">
                                        <div class="aspect-w-3 aspect-h-2">
                                            <img class="object-cover shadow-lg rounded-lg group-hover:opacity-75"
                                                src="{{ $article->getFirstMediaUrl('media') }}"
                                                alt="{{ $article['title'] }}" />
                                        </div>
                                    </a>
                                    <div class="sm:col-span-2 space-y-2">
                                        <div>
                                            <time datetime="{{ $article->created_at->format('Y-m-d') }}"
                                                class="font-sans text-sm leading-5  capitalize">
                                                {{ $article->created_at->isoFormat('LL') }}
                                            </time>
                                            <a href="{{ route('articles.show', $article['slug']) }}"
                                                class="mt-2 flex group">
                                                <h4 class="text-lg leading-6 font-semibold font-sans ">
                                                    {{ $article['title'] }}</h4>
                                            </a>
                                            <p class="mt-1 text-sm font-normal  leading-5">
                                                {!! $article->excerpt() !!}
                                            </p>
                                        </div>
                                        <div class="flex items-center space-x-3">
                                            @if ($article->tags->isNotEmpty())
                                                <div class="flex items-center space-x-2">
                                                    @foreach ($article->tags as $tag)
                                                        <span
                                                            class="inline-flex items-center leading-none px-2.5 py-1.5 text-sm font-medium text-skin-inverted rounded-full border border-skin-input">
                                                            <svg class="mr-1.5 h-2 w-2 brand-{{ $tag->slug() }}"
                                                                fill="currentColor" viewBox="0 0 8 8">
                                                                <circle cx="4" cy="4" r="3" />
                                                            </svg>
                                                            {{ $tag->name() }}
                                                        </span>
                                                    @endforeach
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>

                <div class="flex items-center justify-center mt-5">
                    <x-button primaryOutline :href="route('articles')">
                        {{ __('View all articles') }}
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="h-5 w-5 ml-1.5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                        </svg>
                    </x-button>
                </div>
            </div>
        </div>

        <hr class="mx-10 border-[1px] border-gray-200 my-10">


        @if ($settings['is_about'])
            <div class="relative bg-gray-900 px-10 pb-10" id="about">
                <div
                    class="max-w-4xl px-4 mx-auto lg:max-w-7xl xl:grid xl:grid-cols-2 xl:grid-flow-col-dense xl:gap-x-8 py-10">
                    <div class="relative py-16 xl:col-start-1">
                        <h2 class="text-5xl font-bold tracking-wide text-green-300 uppercase font-heading">
                            {{ __('About Me') }}
                        </h2>
                        <div class="mt-6 text-lg text-white">
                            <p class="mb-4">
                                With a passion for innovation and technology, I specialize in crafting custom solutions
                                using the Laravel TALL stack. My expertise extends to developing CRM and ERP systems
                                tailored to unique business needs.
                            </p>
                            <p class="mb-4">
                                💼 I excel in creating components for CRM, ERP, and e-commerce websites, leveraging the
                                power of Laravel and Livewire to deliver seamless user experiences.
                            </p>
                            <p class="mb-4">
                                🔭 Currently, I'm engrossed in a confidential project akin to MyStockMaster, pushing the
                                boundaries of what's possible in web development.
                            </p>
                            <p class="mb-4">
                                🌱 Continuously exploring emerging technologies like Rust, Svelte, and LLM agents
                                automation, I strive to stay ahead of the curve and bring fresh perspectives to my work.
                            </p>
                            <p>
                                🌟 If you appreciate my work and wish to support my endeavors, consider sponsoring me!
                                Together, we can create impactful solutions and empower communities through technology.
                            </p>
                        </div>
                        <p class="mt-8 text-3xl font-extrabold text-white">
                            {{ __('Empowering communities and pushing the boundaries of learning and communication is my mission.') }}
                        </p>
                    </div>
                </div>
            </div>
        @endif
    </div>
</div>
