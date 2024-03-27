@props(['href' => null, 'logo' => '', 'name' => null, 'color' => 'gray'])
<section class="py-5 px-6 bg-{{ $color }}-200 shadow">
    <nav class="flex items-center justify-between px-3">
        <a href="{{ $href ?? '/' }}" class="text-xl font-semibold dark:text-gray-100">
            <img class="w-24 h-auto" src="{{ $logo }}" alt="Site Logo">
            <span class="sr-only">{{ $name ?? 'logo' }}</span>
        </a>

        <div class="flex gap-4 items-center">
            {{ $slot }}
        </div>
    </nav>
</section>
