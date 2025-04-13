<div class="Resizer Bannersection px-4 sm:px-6">
    <div class=" grid grid-cols-1 md:grid-cols-3 gap-8">
        <!-- Left Column -->
        <div class="md:col-span-1">
            <div class="flex flex-col items-center">
                <img id="mainImage" src="https://randomuser.me/api/portraits/men/1.jpg" alt="Main" class="rounded-xl w-full mb-4">
                <div class="flex space-x-4">
                    <img onclick="changeImage(this)" src="https://randomuser.me/api/portraits/men/2.jpg" class="cursor-pointer w-16 h-16 rounded-md object-cover">
                    <img onclick="changeImage(this)" src="https://randomuser.me/api/portraits/men/3.jpg" class="cursor-pointer w-16 h-16 rounded-md object-cover">
                    <img onclick="changeImage(this)" src="https://randomuser.me/api/portraits/men/4.jpg" class="cursor-pointer w-16 h-16 rounded-md object-cover">
                    <img onclick="changeImage(this)" src="https://randomuser.me/api/portraits/men/5.jpg" class="cursor-pointer w-16 h-16 rounded-md object-cover">
                    <img onclick="changeImage(this)" src="https://randomuser.me/api/portraits/men/7.jpg" class="cursor-pointer w-16 h-16 rounded-md object-cover">
                </div>
            </div>

            <div class="bg-white p-4 rounded-lg shadow mt-6">
                <h3 class="text-lg font-semibold mb-3">Add review</h3>
                <form id="reviewForm">
                    <div class="grid grid-cols-2 gap-2 mb-4">
                        <label>Service <input type="number" class="w-full border rounded px-2 py-1" min="1" max="5"></label>
                        <label>Value <input type="number" class="w-full border rounded px-2 py-1" min="1" max="5"></label>
                        <label>Location <input type="number" class="w-full border rounded px-2 py-1" min="1" max="5"></label>
                        <label>Cleanliness <input type="number" class="w-full border rounded px-2 py-1" min="1" max="5"></label>
                    </div>
                    <input type="text" placeholder="Your name" class="w-full border rounded px-2 py-1 mb-2" required>
                    <input type="email" placeholder="Your email" class="w-full border rounded px-2 py-1 mb-2" required>
                    <textarea placeholder="Your comment" class="w-full border rounded px-2 py-1 mb-2" required></textarea>
                    <button type="submit" class="bg-purple-600 text-white w-full py-2 rounded">Submit review</button>
                </form>
            </div>
        </div>

        <!-- Right Column -->
        <div class="md:col-span-2 space-y-6">
            <div>
                <p class="text-sm uppercase text-gray-400 mb-4">Blastly Influencer</p>
                <h1 class="text-4xl font-medium mb-4">Purple Speedy</h1>
                <p class="text-black flex items-center space-x-2 mt-1 mb-4"><svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 inline-block mr-1 text-black" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13 21.314l-4.657-4.657A8 8 0 1117.657 16.657z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg> Abuja, Nigeria</p>
                <p class="bg-[#C1FF72] text-[#5A05FF] inline-block mt-2 px-6 py-2 rounded-full text-sm font-light">
                    <span class="text-[#5A05FF]"><svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 inline-block mr-1 text-[#6A6A6A]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M5 3a2 2 0 00-2 2v4.586a1 1 0 00.293.707l9.414 9.414a2 2 0 002.828 0l4.242-4.242a2 2 0 000-2.828L10.828 3.293A1 1 0 0010.121 3H5z" />
                        </svg>
                    </span> Starts from ₦4,000,000
                </p>
                <p class="mt-4 text-black leading-loose">
                    Purple Speedy is a well-known social media influencer in Nigeria, recognized for their engaging and relatable content across platforms like TikTok, and Instagram. Their content typically revolves around family life, pranks, challenges, and heartwarming moments, which resonate with a broad audience. By sharing their everyday experiences, the Seven Craft has built a strong connection with their followers, creating a sense of authenticity and relatability.
                    Their influence extends to collaborations with various brands, helping companies increase their visibility and connect with family-oriented consumers. The dynamic and entertaining content makes it a sought-after partner for brand promotions, particularly in niches related to family, lifestyle, and entertainment.
                </p>
                <button class="bg-[#5307F8] text-white px-10 py-3 rounded-full mt-4 mb-4">Request advert</button>

                <div class="mt-4 flex items-center space-x-2">
    <p class="text-black flex items-center space-x-2 px-10 py-2 mt-1 mb-4 border border-gray-500">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-[#5800FF] mr-2">
            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
        </svg>
        Facebook
    </p>

    <p class="text-black flex items-center space-x-2 px-10 py-2 mt-1 mb-4 border border-gray-500">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-[#5800FF] mr-2">
            <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
            <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
            <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
        </svg>
        Tweet
    </p>

    <p class="text-black flex items-center space-x-2 px-10 py-2 mt-1 mb-4 border border-gray-500">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-[#5800FF] mr-2">
            <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
            <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
            <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
        </svg>
        Pinterest
    </p>
</div>


            </div>

            <!-- Location Map -->
            <div>
                <h3 class="text-xl font-semibold mb-2">Location</h3>
                <iframe src="https://www.google.com/maps?q=lagos&output=embed" width="100%" height="300" class="rounded-lg border"></iframe>
            </div>
        </div>
    </div>

    <script>
        function changeImage(el) {
            const main = document.getElementById('mainImage');
            main.src = el.src;
        }

        document.getElementById('reviewForm').addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Thank you for your review!');
            this.reset();
        });
    </script>
</div>