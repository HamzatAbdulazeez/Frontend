<section class="">
    <div class="flex flex-col md:flex-row h-screen">
        <!-- Left Section -->
        <div class="w-full md:w-1/2 p-8 flex flex-col md:pl-20 md:pr-20 pl-4 pr-4 justify-center bg-white">
            <!-- Logo -->
            <div class="">
                <a href="{{route('index')}}">
                    <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1743834712/Blastily-Images/White_Black_M_Letter_Design_Business_Identity_for_Digital_Design_Company_Logo_2_juaa7p.png"
                        alt="Logo" class="h-14 w-auto" />
                </a>
            </div>

            <div class="text-center mb-6">
                <h1 class="text-2xl font-bold mb-2">Register as a user</h1>
                <p class="text-gray-600 text-sm max-w-md mx-auto">Explore some of the best tips from around the world from our partners and friends.</p>
            </div>

            <!-- Registration Form -->
            <div class="flex-grow max-w-md mx-auto w-full">
                <form class="space-y-4">
                    <!-- First Name -->
                    <div>
                        <input type="text" placeholder="First name" class="w-full px-4 py-3 border border-gray-300 rounded-lg outline-none text-[#9CA3AF] font-light text-sm" required>
                    </div>

                    <!-- Last Name -->
                    <div>
                        <input type="text" placeholder="Last name" class="w-full px-4 py-3 border border-gray-300 rounded-lg outline-none text-[#9CA3AF] font-light text-sm" required>
                    </div>

                    <!-- Email Address -->
                    <div>
                        <input type="email" placeholder="Email address" class="w-full px-4 py-3 border border-gray-300 rounded-lg outline-none text-[#9CA3AF] font-light text-sm" required>
                    </div>

                    <!-- Phone Number -->
                    <div>
                        <input type="tel" placeholder="Phone number" class="w-full px-4 py-3 border border-gray-300 rounded-lg outline-none text-[#9CA3AF] font-light text-sm" required>
                    </div>

                    <!-- Password -->
                    <div>
                        <input type="password" placeholder="Password" class="w-full px-4 py-3 border border-gray-300 rounded-lg outline-none text-[#9CA3AF] font-light text-sm" required>
                    </div>

                    <!-- Confirm Password -->
                    <div>
                        <input type="password" placeholder="Confirm password" class="w-full px-4 py-3 border border-gray-300 rounded-lg outline-none text-[#9CA3AF] font-light text-sm" required>
                    </div>

                    <!-- Register Button -->
                    <div>
                        <button type="submit" class="w-full bg-indigo-600 text-white py-3 rounded-full hover:bg-indigo-700 transition duration-200">Register</button>
                    </div>
                </form>

                <!-- Sign In Link -->
                <div class="mt-6 text-center text-sm">
                    <p class="text-gray-600">
                        Already have an account?
                        <a href="{{route('login')}}" class="text-indigo-600 font-medium">Sign in</a>
                    </p>
                </div>

                <!-- Terms Agreement -->
                <div class="mt-6 text-center text-sm text-gray-500">
                    <p>
                        By signing up for a Blastily account, you agree to our
                        <br>
                        <a href="#" class="text-gray-800 font-medium">Privacy Policy</a> and
                        <a href="#" class="text-gray-800 font-medium">Terms of Service</a>
                    </p>
                </div>
            </div>
        </div>

        <!-- Right Section - This is where you'll add your background -->
        <div class="hidden md:block w-1/2">
            <img
                src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1744222902/Frame_3381_1_l8ciav.png" class="w-full h-full object-cover"
                alt="Rotating Globe" />
        </div>
    </div>
</section>