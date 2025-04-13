<header class="w-full bg-white px-4 py-4 flex flex-col md:flex-row md:items-center md:justify-between gap-3 md:gap-0 z-20">
    <!-- Left Section: Page Title & Mobile Toggle -->
    <div class="flex items-center justify-between w-full md:w-auto">
        <div class="items-center gap-3 md:block hidden">
            <div>
                <h2 class="text-lg font-semibold text-gray-800">Listing - News</h2>
                <p class="text-sm text-gray-500">What will you like us to blast for you?</p>
            </div>
        </div>
    </div>

    <!-- Right Section: Dropdowns, Bell, Avatar -->
    <div class="flex items-center justify-end gap-4 w-full md:w-auto relative">
        <!-- Online Blast Dropdown -->
        <div class="relative group">
            <button onclick="toggleDropdown('online')" class="text-sm flex items-center gap-1 text-gray-700 hover:text-purple-600">
                <span class="w-2 h-2 rounded-full bg-purple-600"></span> Online blast
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path d="M19 9l-7 7-7-7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </button>
            <div id="dropdown-online" class="dropdown hidden absolute shadow-xs  bg-white right-0 mt-2 w-40 bg-whiterounded z-30">
                <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-100">Influencers</a>
                <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-100">Blogs</a>
                <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-100">Podcasts</a>
                <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-100">Email Marketing
                (Coming soon)</a>
                <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-100">PPC 
                (Coming soon)</a>
                <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-100">Google Ads
                (Coming soon)</a>
                <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-100">YouTube Ads
                (Coming soon)</a>
            </div>
        </div>

        <!-- Offline Blast Dropdown -->
        <div class="relative group">
            <button onclick="toggleDropdown('offline')" class="text-sm flex items-center gap-1 text-gray-700 hover:text-purple-600">
                <span class="w-2 h-2 rounded-full bg-red-600"></span> Offline blast
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path d="M19 9l-7 7-7-7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </button>
            <div id="dropdown-offline" class="dropdown hidden absolute shadow-xs right-0 mt-2 w-40 bg-white rounded z-30">
                <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-100">Billboards</a>
                <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-100">News</a>
                <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-100">Cinema</a>
                <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-100">Television</a>
                <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-100">Radio</a>
                <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-100">Event</a>
                <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-100">Vehicle</a>
            </div>
        </div>

        <!-- Notification Bell -->
        <button class="text-gray-700 hover:text-purple-600">
            <svg class="w-5 h-5 " fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path d="M15 17h5l-1.405-1.405M18 14.158V11a6 6 0 00-4-5.659M6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </button>

        <!-- Avatar with Dropdown -->
        <div class="relative">
            <button class="w-8 h-8 rounded-full bg-purple-100 flex items-center justify-center text-sm font-bold text-purple-700" onclick="toggleDropdown('avatar')">
                A
            </button>
            <div id="dropdown-avatar" class="dropdown hidden absolute right-0 shadow-xs mt-2 w-40 bg-white rounded z-30">
                <p class="block px-4 py-3 text-sm hover:bg-gray-100 cursor-pointer">
                    Akuete Emmanuel <small>akuete@gmail.com</small>
                </p>
                <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-100">Profile</a>
                <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-100">Settings</a>
                <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-100">Logout</a>
            </div>
        </div>
    </div>

    <!-- Dropdown Script -->
    <script>
        function toggleDropdown(target) {
            const dropdown = document.getElementById('dropdown-' + target);
            dropdown.classList.toggle('hidden');
        }
    </script>
</header>