@props(['title' => 'Bcomponents', 'class' => null])
<div class="w-full z-40 py-4 sticky top-0 {{ $class }} bg-gray-800">
    <div class="sm:max-w-7xl mx-auto px-4 sm:px-6">
        <div class="flex justify-between items-center border-gray-200 dark:border-gray-500 md:space-x-10 ">
            <h1 class="text-2xl text-gray-100 dark:text-gray-500 cursor-pointer flex">
                <a onclick="location.href='/'">
                    {{ $title }}
                </a>
            </h1>
            <div class="flex items-center space-x-4">
                <x-theme.language-switcher :languages="$languages" />

                <button @click="isDarkMode = !isDarkMode"
                    class="bg-transparent rounded-lg p-3 border border-white dark:border-gray-200 text-gray-200 dark:text-gray-500">
                    <i :class="isDarkMode ? 'fas fa-moon' : 'fas fa-sun'" stroke="currentColor"></i>
                </button>
                <button @click="isRtl = !isRtl"
                    class="bg-transparent rounded-lg p-3 border border-white dark:border-gray-200 text-gray-200 dark:text-gray-500">
                    <i :class="isRtl ? 'fas fa-align-right' : 'fas fa-align-left'" stroke="currentColor"></i>
                </button>
            </div>
        </div>
    </div>
</div>
