<div class="flex h-screen bg-gray-100 text-white dark:text-black dark:bg-gray-900">
    <!-- Sidebar -->
    <div class="w-64 flex-shrink-0 bg-gray-800 pt-6 pb-2 text-center overflow-hidden">
        <a href="#" class="block mx-auto w-12 h-12 rounded-full bg-white"></a>
        <div class="mt-4 text-white">Menu</div>
        <ul class="mt-6 px-3 space-y-2">
            <li>
                <a href="#" class="text-gray-300 hover:text-blue-500 dark:hover:text-white focus:text-blue-500 focus:outline-none focus:shadow-outline-blue">
                    Dashboard
                </a>
            </li>
            <li>
                <a href="#" class="text-gray-300 hover:text-blue-500 dark:hover:text-white focus:text-blue-500 focus:outline-none focus:shadow-outline-blue">
                    Team
                </a>
            </li>
            <li>
                <a href="#" class="text-gray-300 hover:text-blue-500 dark:hover:text-white focus:text-blue-500 focus:outline-none focus:shadow-outline-blue">
                    Projects
                </a>
            </li>
            <li>
                <a href="#" class="text-gray-300 hover:text-blue-500 dark:hover:text-white focus:text-blue-500 focus:outline-none focus:shadow-outline-blue">
                    Calendar
                </a>
            </li>
        </ul>
    </div>
    
    <!-- Main Content -->
    <div class="flex flex-col flex-grow bg-gray-900 text-white overflow-hidden">
        <header class="bg-gray-800 py-4 px-6">
            <h1 class="text-2xl font-semibold">Dashboard</h1>
        </header>
        
        <main role="main" class="flex-grow overflow-y-auto">
            <div class="container px-6 mx-auto grid sm:grid-cols-1 md:grid-cols-3 gap-6 mt-4">
                <div class="bg-gray-800 rounded-lg shadow p-4 flex flex-col ">
                    <p class="font-medium text-2xl tracking-wide">
                        <p>Total Profit</p> 
                        <span class="text-green-500 dark:text-green-300">$2,168</span>
                    </p>
                </div>
                <div class="bg-gray-800 rounded-lg shadow p-4 flex flex-col ">
                    <p class="font-medium text-2xl tracking-wide">
                        <p>Total Sales</p> 
                        <span class="text-green-500 dark:text-green-300">$2,168</span>
                    </p>
                </div>
                <div class="bg-gray-800 rounded-lg shadow p-4 flex flex-col ">
                    <p class="font-medium text-2xl tracking-wide">
                        <p>Total Purchases</p> 
                        <span class="text-green-500 dark:text-green-300">$2,168</span>
                    </p>
                </div>
                <!-- More cards go here -->
            </div>
        </main>
    </div>
</div>
