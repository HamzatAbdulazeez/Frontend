<div class="flex min-h-screen relative">
    <!-- Sidebar -->
    <aside id="sidebar" class="fixed z-40 top-0 left-0 h-full w-64 bg-white transform -translate-x-full md:translate-x-0 md:relative md:flex transition-transform duration-300 ease-in-out">
        <div class="w-full p-4">
            <!-- Logo -->
            <div class="flex items-center justify-center mb-6">
                <img
                    src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1743834712/Blastily-Images/White_Black_M_Letter_Design_Business_Identity_for_Digital_Design_Company_Logo_2_juaa7p.png"
                    alt="Logo"
                    class="w-32 h-auto" />
            </div>
            <!-- Company Dropdown -->
            <div class="space-y-3">
                <div class="flex items-center justify-between mb-2 cursor-pointer" onclick="toggleDropdown('codefixbug')">
                    <div class="flex items-center space-x-2">
                        <div class="bg-lime-300 text-sm font-bold w-7 h-7 flex items-center justify-center rounded-full">C</div>
                        <span class="text-sm font-medium text-black">CodeFixBug Limi...</span>
                    </div>
                    <svg class="w-4 h-4 stroke-current text-gray-500" fill="none" viewBox="0 0 24 24">
                        <path d="M19 9l-7 7-7-7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>

                <!-- Dropdown Content -->
                <div id="dropdown-codefixbug" class="ml-10 mt-1 hidden text-sm text-gray-700 space-y-3">
                    <a href="#" class="block hover:text-[#5307F8] mt-3">Codefixbug Limited</a>
                    <a href="#" class="block hover:text-[#5307F8]">Paystack</a>
                    <a href="#" class="block hover:text-[#5307F8] mb-4">Veevee Limited</a>
                </div>
            </div>

            <!-- Nav Links -->
            <nav class="space-y-3">
                <a href="{{route('welcome')}}" class="flex items-center space-x-3 px-4 py-2 rounded-full text-gray-800 hover:bg-purple-50 hover:text-[#5307F8] transition group" onclick="setActive(this)">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 group-hover:text-[#5307F8]" viewBox="0 0 24 24" fill="none">
                        <path d="M10.5 19.9V4.1C10.5 2.6 9.86 2 8.27 2H4.23C2.64 2 2 2.6 2 4.1V19.9C2 21.4 2.64 22 4.23 22H8.27C9.86 22 10.5 21.4 10.5 19.9Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M22 10.9V4.1C22 2.6 21.36 2 19.77 2H15.73C14.14 2 13.5 2.6 13.5 4.1V10.9C13.5 12.4 14.14 13 15.73 13H19.77C21.36 13 22 12.4 22 10.9Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M22 19.9V18.1C22 16.6 21.36 16 19.77 16H15.73C14.14 16 13.5 16.6 13.5 18.1V19.9C13.5 21.4 14.14 22 15.73 22H19.77C21.36 22 22 21.4 22 19.9Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <span>Dashboard</span>
                </a>

                <!-- Blastily listing -->
                <div class="space-y-1">
                    <div class="bg-[#5307F8] text-white px-4 py-2 rounded-full flex items-center justify-between cursor-pointer" onclick="toggleDropdown('blastily')">
                        <div class="flex items-center space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 group-hover:text-[#5307F8]" viewBox="0 0 24 24" fill="none">
                                <path d="M22 11V17C22 21 21 22 17 22H7C3 22 2 21 2 17V7C2 3 3 2 7 2H8.5C10 2 10.33 2.44 10.9 3.2L12.4 5.2C12.78 5.7 13 6 14 6H17C21 6 22 7 22 11Z" stroke="white" stroke-width="1.5" stroke-miterlimit="10" />
                                <path d="M8 2H17C19 2 20 3 20 5V6.38" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <span>Blastily listing</span>
                        </div>
                        <svg class="w-4 h-4 stroke-current" fill="none" viewBox="0 0 24 24">
                            <path d="M19 9l-7 7-7-7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>

                    <!-- Dropdown Content -->
                    <div id="dropdown-blastily" class="ml-10 mt-1 hidden text-sm text-gray-700 space-y-3">
                        <a href="#" class="block hover:text-[#5307F8] mt-3">Models</a>
                        <a href="#" class="block hover:text-[#5307F8]">Influencers</a>
                        <a href="#" class="block hover:text-[#5307F8]">Billboards</a>
                        <a href="#" class="block hover:text-[#5307F8]">News</a>
                        <a href="#" class="block hover:text-[#5307F8]">Blogs</a>
                        <a href="#" class="block hover:text-[#5307F8]">Cinema</a>
                        <a href="#" class="block hover:text-[#5307F8]">Television</a>
                        <a href="#" class="block hover:text-[#5307F8]">Radio</a>
                        <a href="#" class="block hover:text-[#5307F8]">Podcasts</a>
                        <a href="#" class="block hover:text-[#5307F8]">Events</a>
                        <a href="#" class="block hover:text-[#5307F8]">Vehicles</a>
                    </div>
                </div>


                <!-- Manage bookings -->
                <div class="space-y-1">
                    <button class="w-full flex items-center justify-between px-4 py-2 text-gray-800 hover:text-[#5307F8] hover:bg-purple-50 rounded-full transition group" onclick="toggleDropdown('bookings')">
                        <div class="flex items-center space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 group-hover:text-[#5307F8]" viewBox="0 0 24 24" fill="none">
                                <path d="M8 2V5" stroke="black" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M16 2V5" stroke="black" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M3.5 9.08984H20.5" stroke="black" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M22 19C22 19.75 21.79 20.46 21.42 21.06C20.73 22.22 19.46 23 18 23C16.99 23 16.07 22.63 15.37 22C15.06 21.74 14.79 21.42 14.58 21.06C14.21 20.46 14 19.75 14 19C14 16.79 15.79 15 18 15C19.2 15 20.27 15.53 21 16.36C21.62 17.07 22 17.99 22 19Z" stroke="black" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M16.4414 18.9995L17.4314 19.9895L19.5614 18.0195" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M21 8.5V16.36C20.27 15.53 19.2 15 18 15C15.79 15 14 16.79 14 19C14 19.75 14.21 20.46 14.58 21.06C14.79 21.42 15.06 21.74 15.37 22H8C4.5 22 3 20 3 17V8.5C3 5.5 4.5 3.5 8 3.5H16C19.5 3.5 21 5.5 21 8.5Z" stroke="black" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M11.9945 13.6992H12.0035" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M8.29529 13.6992H8.30427" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M8.29529 16.6992H8.30427" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <span>Manage bookings</span>
                        </div>
                        <svg class="w-4 h-4 stroke-current text-gray-500 group-hover:text-[#5307F8]" fill="none" viewBox="0 0 24 24">
                            <path d="M19 9l-7 7-7-7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    <div id="dropdown-bookings" class="ml-10 mt-1 hidden text-sm text-gray-700 space-y-3">
                        <a href="#" class="block hover:text-[#5307F8] mt-3">Upcoming</a>
                        <a href="#" class="block hover:text-[#5307F8]">Past</a>
                    </div>
                </div>

                <!-- Contact -->
                <div class="space-y-1">
                    <button class="w-full flex items-center justify-between px-4 py-2 text-gray-800 hover:text-[#5307F8] hover:bg-purple-50 rounded-full transition group" onclick="toggleDropdown('contact')">
                        <div class="flex items-center space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 group-hover:text-[#5307F8]" viewBox="0 0 24 24" fill="none">
                                <path d="M21.9292 6.76099L18.5592 20.291C18.3192 21.301 17.4192 22.001 16.3792 22.001H3.23915C1.72915 22.001 0.649169 20.5209 1.09917 19.0709L5.30916 5.55103C5.59916 4.61103 6.46917 3.96094 7.44917 3.96094H19.7492C20.6992 3.96094 21.4892 4.54094 21.8192 5.34094C22.0092 5.77094 22.0492 6.26099 21.9292 6.76099Z" stroke="black" stroke-width="1.5" stroke-miterlimit="10" />
                                <path d="M16 22H20.78C22.07 22 23.08 20.91 22.99 19.62L22 6" stroke="black" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M9.67969 6.38049L10.7197 2.06055" stroke="black" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M16.3789 6.39075L17.3189 2.05078" stroke="black" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M7.69922 12H15.6992" stroke="black" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M6.69922 16H14.6992" stroke="black" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <span>Contact</span>
                        </div>
                        <svg class="w-4 h-4 stroke-current text-gray-500 group-hover:text-[#5307F8]" fill="none" viewBox="0 0 24 24">
                            <path d="M19 9l-7 7-7-7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    <div id="dropdown-contact" class="ml-10 mt-1 hidden text-sm text-gray-700 space-y-3">
                        <a href="#" class="block hover:text-[#5307F8] mt-3">Messages</a>
                        <a href="#" class="block hover:text-[#5307F8]">Support</a>
                    </div>
                </div>

                <!-- Surveys -->
                <a href="#" class="flex items-center space-x-3 px-4 py-2 rounded-full text-gray-800 hover:text-[#5307F8] hover:bg-purple-50 transition group" onclick="setActive(this)">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 group-hover:text-[#5307F8]" viewBox="0 0 24 24" fill="none">
                        <path d="M9.02 2.84016L3.63 7.04016C2.73 7.74016 2 9.23016 2 10.3602V17.7702C2 20.0902 3.89 21.9902 6.21 21.9902H17.79C20.11 21.9902 22 20.0902 22 17.7802V10.5002C22 9.29016 21.19 7.74016 20.2 7.05016L14.02 2.72016C12.62 1.74016 10.37 1.79016 9.02 2.84016Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M16.5 11.5L12.3 15.7L10.7 13.3L7.5 16.5" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M14.5 11.5H16.5V13.5" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <span>Surveys</span>
                </a>

                <!-- Wallet transactions -->
                <a href="#" class="flex items-center space-x-3 px-4 py-2 rounded-full text-gray-800 hover:text-[#5307F8] hover:bg-purple-50 transition group" onclick="setActive(this)">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 group-hover:text-[#5307F8]" viewBox="0 0 24 24" fill="none">
                        <path d="M18.04 13.55C17.62 13.96 17.38 14.55 17.44 15.18C17.53 16.26 18.52 17.05 19.6 17.05H21.5V18.24C21.5 20.31 19.81 22 17.74 22H6.26C4.19 22 2.5 20.31 2.5 18.24V11.51C2.5 9.44001 4.19 7.75 6.26 7.75H17.74C19.81 7.75 21.5 9.44001 21.5 11.51V12.95H19.48C18.92 12.95 18.41 13.17 18.04 13.55Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M2.5 12.4093V7.83937C2.5 6.64937 3.23 5.58933 4.34 5.16933L12.28 2.16933C13.52 1.69933 14.85 2.61936 14.85 3.94936V7.74934" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M22.5588 13.9692V16.0292C22.5588 16.5792 22.1188 17.0292 21.5588 17.0492H19.5988C18.5188 17.0492 17.5288 16.2592 17.4388 15.1792C17.3788 14.5492 17.6188 13.9592 18.0388 13.5492C18.4088 13.1692 18.9188 12.9492 19.4788 12.9492H21.5588C22.1188 12.9692 22.5588 13.4192 22.5588 13.9692Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M7 12H14" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <span>Wallet transactions</span>
                </a>
            </nav>
        </div>
    </aside>

    <!-- Mobile Toggle Button -->
    <div class="md:hidden fixed top-4 left-4 z-50">
        <button id="toggleSidebarBtn" class="text-[#5307F8] text-3xl">☰</button>
    </div>

    <!-- Overlay for mobile -->
    <div id="overlay" class="fixed inset-0 z-30 hidden md:hidden" onclick="closeSidebar()"></div>
</div>

<!-- JavaScript -->
<script>
    // Toggle Sidebar for mobile
    const sidebar = document.getElementById('sidebar');
    const overlay = document.getElementById('overlay');
    const toggleBtn = document.getElementById('toggleSidebarBtn');

    toggleBtn.addEventListener('click', () => {
        sidebar.classList.toggle('-translate-x-full');
        overlay.classList.toggle('hidden');
    });

    function closeSidebar() {
        sidebar.classList.add('-translate-x-full');
        overlay.classList.add('hidden');
    }

    // Toggle Dropdowns
    function toggleDropdown(id) {
        const el = document.getElementById('dropdown-' + id);
        el.classList.toggle('hidden');
    }

    // Set active class on links
    function setActive(element) {
        const links = document.querySelectorAll('nav a');
        links.forEach(link => {
            link.classList.remove('text-[#5307F8]', 'bg-purple-50');
        });
        element.classList.add('text-[#5307F8]', 'bg-purple-50');
    }
</script>