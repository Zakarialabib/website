<div class="flex min-h-screen bg-blue-800 text-white">
    <aside
        class="w-64 md:w-72 xl:w-80 flex flex-col flex-grow bg-blue-80xl:w-1/5 sm:shadow-lg rounded-r-xl pt-6
        pb-8">
        <div class="flex items-center justify-between mx-4">
            <a href="/" class="text-white text-2xl font-bold">
                Logo
            </a>
            <button @click="isOpen=!isOpen" type="button"
                class="block text-gray-700
                hover:text-gray-500 focus:text-gray-900 outline-none focus:outline-none">
                <svg viewBox="0 0 24 24" class="w-6 h-6 fill-current text-white mt-1">
                    <path d="M4 5a1 1 0 0 1 1-1v12l7.983-8H13a1 1 0 0 1 1 1v6h2V5a3 3 0 1 0-6 0v4.5h-2V5z" />
                </svg>
            </button>
            <p class="xl:block hidden pb-8 text-white mt-4">Menu</s>
            <ul class="list-none p-0">
                <li> <a href="#"
                        class="text-gray-500 hover:text-blue-700 font-semibold block py-1.5 transition
                            duration-300 ease-in-out rounded-lg pl-8 pr-4 mb-2">Dashboard
                    </a>
                </li>
                <li><a href="#"
                        class="text-gray-500 hover:textxl:block hidden text-blue-700 font-semibold block
                            py-1.5 transition duration-300 ease-in-out rounded-lg pl-8 pr-4 mb-2">Contacts
                    </a>
                </li>
                <li><a href="#"
                        class="text-gray-500 hover:text-blue-700 font-semibold block py-1.5 transition
                            durationxl:block hidden duration-300 ease-in-out rounded-lg pl-8 pr-4 mb-2">Leads
                    </a>
                </li>
                <li><a href="#"
                        class="text-gray-500 hover:text-blue-700 font-semibold block py-1.5 transition
                            duration-300 ease-in-out rounded-lg pl-8 pr-4 mb-2">Opportunities
                    </a>
                </li>
                <li><a href="#"
                        class="text-gray-500 hover:text-blue-700 font-semibold block py-1.5 transition
                            duration-300 ease-in-out rounded-lg pl-8 pr-4 mb-2">Reports
                    </a>
                </li>
            </ul>
        </div>
    </aside>
</div>
