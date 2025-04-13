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

      <!-- Heading and Subheading -->
      <div class="mb-8 text-center">
        <h1 class="text-2xl font-bold mb-2">Welcome to Blastily!</h1>
        <p class="text-gray-600">Select your preferred mode of registration</p>
      </div>

      <!-- Registration Options -->
      <div class="space-y-6 flex-grow">
        <!-- User Registration -->
        <div class="border border-[#cccc] rounded-lg p-6 hover:shadow-sm cursor-pointer transition-shadow">
          <div class="flex items-center mb-4">
            <div class="bg-purple-100 p-2 rounded-full">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-purple-700" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
              </svg>
            </div>
          </div>
          <h2 class="text-xl font-bold mb-2">Register as a user</h2>
          <p class="text-gray-600 text-sm mb-4">With a user account, you can explore some of the best tips from around the world from our partners and friends. you can discover some of the most popular listings!</p>
          <div class="flex justify-end">
            <a href="{{route('users')}}">
              <button class="bg-indigo-600 text-white px-4 py-2 rounded-full flex items-center">
                Continue
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
              </button>
            </a>
          </div>
        </div>

        <!-- Partner Registration -->
        <div class="border border-[#cccc] rounded-lg p-6 hover:shadow-sm cursor-pointer transition-shadow">
          <div class="flex items-center mb-4">
            <div class="bg-purple-100 p-2 rounded-full">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-purple-700" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z" clip-rule="evenodd" />
                <path d="M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.974 24.974 0 0110 15c-2.796 0-5.487-.46-8-1.308z" />
              </svg>
            </div>
          </div>
          <h2 class="text-xl font-bold mb-2">Register as a partner</h2>
          <p class="text-gray-600 text-sm mb-4">Our partners all over the world enjoy our premium services from easy and smooth campaign process, to excellent campaign results and high sales record.</p>
          <div class="flex justify-end">
            <a href="{{route('partners')}}">
              <button class="bg-indigo-600 text-white px-4 py-2 rounded-full flex items-center">
                Continue
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
              </button>
            </a>
          </div>
        </div>
      </div>

      <!-- Sign In Link -->
      <div class="mt-8 text-center">
        <p class="text-gray-600">
          Already have an account?
          <a href="{{route('login')}}" class="text-indigo-600 font-medium">Sign in</a>
        </p>
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