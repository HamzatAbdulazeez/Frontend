<section class="">
    <div class="flex flex-col md:flex-row h-screen">
        <!-- Left Section -->
        <div class="w-full md:w-1/2 p-8 flex flex-col md:pl-20 md:pr-20 pl-4 pr-4 justify-center bg-white">
            <!-- Logo -->
            <div class="mb-10">
                <a href="{{route('index')}}">
                    <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1743834712/Blastily-Images/White_Black_M_Letter_Design_Business_Identity_for_Digital_Design_Company_Logo_2_juaa7p.png"
                        alt="Logo" class="h-14 w-auto" />
                </a>
            </div>

            <div class="text-center mb-6">
                <h1 class="text-2xl font-bold mb-2">Recover account</h1>
                <p class="text-gray-600 text-sm max-w-md mx-auto">Enter email address used for registration</p>
            </div>

            <!-- Registration Form -->
            <!-- Login Form -->
            <div class="max-w-md w-full mx-auto">
                <form>
                    <!-- Email Address -->
                    <div class="mb-4">
                        <input type="email" id="email" placeholder="Email address" class="w-full px-4 py-3 border border-gray-300 rounded-lg outline-none text-[#9CA3AF] font-light text-sm" required>
                    </div>

                    <!-- Sign In Button -->
                    <div class="mb-6">
                        <button type="submit" class="w-full bg-indigo-600 text-white py-3 rounded-lg hover:bg-indigo-700 transition duration-200">Continue</button>
                    </div>
                </form>

                <!-- Sign Up Link -->
                <div class="text-center text-sm">
                    <p class="text-gray-600">
                        No account yet?
                        <a href="{{route('register')}}" class="text-indigo-600 font-medium">Sign up</a>
                    </p>
                </div>
            </div>
        </div>

        <!-- Right Section - This is where you'll add your background -->
        <div class="hidden md:block w-1/2">
            <img
                src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1744225623/Frame_3384_1_epa5ma.png" class="w-full h-full object-cover"
                alt="Rotating Globe" />
        </div>
    </div>
</section>

  <!-- JavaScript for Password Toggle -->
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const togglePassword = document.getElementById('togglePassword');
      const password = document.getElementById('password');
      
      togglePassword.addEventListener('click', function() {
        // Toggle the type attribute
        const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
        password.setAttribute('type', type);
        
        // Toggle the icon
        if (type === 'password') {
          this.innerHTML = `
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
            </svg>
          `;
        } else {
          this.innerHTML = `
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21" />
            </svg>
          `;
        }
      });
    });
  </script>