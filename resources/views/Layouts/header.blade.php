<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>Navigation Bar</title>
</head>
<!-- Header -->
<header id="header" x-data="{ mobileOpen: false }" x-cloak class="fixed top-0 w-full z-50 transition-bg bg-transparent py-2">
    <div class="Resizer px-4 sm:px-6">
        <div class="flex justify-between items-center h-16">
            <!-- Logo -->
            <div class="flex-shrink-0 pr-3">
                <a href="{{route('index')}}">
                    <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1743834712/Blastily-Images/White_Black_M_Letter_Design_Business_Identity_for_Digital_Design_Company_Logo_2_juaa7p.png"
                        alt="Logo" class="h-14 w-auto" />
                </a>
            </div>

            <!-- Desktop Nav -->
            <nav class="hidden md:flex items-center space-x-12 text-black font-medium">
                <a href="{{route('index')}}" class="hover:text-[#5800FF]">Home</a>
                <a href="{{route('about')}}" class="hover:text-[#5800FF]">About us</a>
                <!-- <a href="{{route('testimonials')}}" class="hover:text-[#5800FF]">Testimonials</a> -->
                <a href="{{route('index')}}" class="hover:text-[#5800FF]">Blog</a>
                <a href="{{route('contact')}}" class="hover:text-[#5800FF]">Contact us</a>
                <a href="#" class="hover:text-[#5800FF]">List Ad Space</a>
            </nav>

            <!-- CTA Buttons -->
            <div class="hidden md:flex items-center space-x-4">
                <a href="{{route('login')}}">
                    <button class="px-6 py-2 border border-[#5800FF] rounded-full text-[#5800FF] hover:bg-purple-50 transition">Log in</button>
                </a>
                <a href="{{route('register')}}">
                    <button class="px-6 py-2 bg-[#5800FF] text-white rounded-full hover:bg-purple-700 transition">Start blasting</button>
                </a>
            </div>

            <!-- Hamburger Menu Button -->
            <div class="md:hidden">
                <button @click="mobileOpen = true" class="text-[#5800FF] focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Flyout Menu -->
    <div x-show="mobileOpen" class="fixed inset-0 z-40 flex" aria-modal="true"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0">

        <!-- Overlay -->
        <div class="fixed inset-0 bg-opacity-30" @click="mobileOpen = false"></div>

        <!-- Slide Panel -->
        <div class="ml-auto w-3/4 max-w-sm bg-white shadow-xl p-6 flex flex-col space-y-6"
            x-transition:enter="transition ease-out duration-300 transform"
            x-transition:enter-start="translate-x-full"
            x-transition:enter-end="translate-x-0"
            x-transition:leave="transition ease-in duration-200 transform"
            x-transition:leave-start="translate-x-0"
            x-transition:leave-end="translate-x-full">

            <!-- Close button -->
            <div class="flex justify-end">
                <button @click="mobileOpen = false" class="text-gray-500 hover:text-[#5800FF]">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <!-- Links -->
            <nav class="flex flex-col space-y-4 font-medium text-black">
                <a href="{{route('index')}}" class="hover:text-[#5800FF]">Home</a>
                <a href="{{route('about')}}" class="hover:text-[#5800FF]">About us</a>
                <a href="{{route('index')}}" class="hover:text-[#5800FF]">Blog</a>
                <a href="{{route('contact')}}" class="hover:text-[#5800FF]">Contact us</a>
                <a href="#" class="hover:text-[#5800FF]">List Ad Space</a>
            </nav>

            <!-- Mobile CTA -->
            <div class="pt-4 flex flex-col space-y-3">
                <a href=" {{route('login')}}">
                    <button class="px-6 py-2 border border-[#5800FF] rounded-full text-[#5800FF] hover:bg-purple-50 transition">Log in</button>
                </a>
                <a href=" {{route('register')}}">
                    <button class="px-6 py-2 bg-[#5800FF] text-white rounded-full hover:bg-purple-700 transition">Start blasting</button>
                </a>
            </div>
        </div>
    </div>
</header>

</html>