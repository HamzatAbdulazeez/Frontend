<style>
    .step-active {
        border-bottom: 3px solid #000;
        color: #000;
        font-weight: 600;
    }

    .step-inactive {
        border-bottom: 1px solid #ccc;
        color: #777;
    }

    .channel-card {
        transition: all 0.2s ease;
    }

    .channel-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
    }

    .card-selected {
        border: 2px solid #4299e1;
        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
    }
</style>
<div class="space-y-6 min-h-screen">
    <div class="bg-white p-4 rounded">
        <!-- Progress Steps -->
        <div class="grid grid-cols-3 mb-12">
            <div id="step1" class="px-8 py-4 step-active">
                <p class="text-sm mb-1">1. Channels</p>
                <p class="text-xs text-gray-500">Select blogging channel to publish article</p>
            </div>
            <div id="step2" class="px-8 py-4 step-inactive">
                <p class="text-sm mb-1">2. Details</p>
                <p class="text-xs text-gray-500">Fill in article details</p>
            </div>
            <div id="step3" class="px-8 py-4 step-inactive">
                <p class="text-sm mb-1">3. Payment</p>
                <p class="text-xs text-gray-500">Select payment method</p>
            </div>
        </div>

        <!-- Content sections -->
        <div id="content-step1" class="block">
            <!-- Channels Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Legit.ng -->
                <div class="channel-card rounded-lg overflow-hidden bg-emerald-500 cursor-pointer" data-channel="legit">
                    <div class="h-40 flex items-center justify-center p-6">
                        <div class="bg-yellow-300 py-2 px-6 rounded">
                            <span class="text-blue-800 font-bold text-2xl">Legit.ng</span>
                        </div>
                    </div>
                    <div class="bg-white p-4">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <span class="font-semibold">Legit.ng</span>
                                <span class="ml-2 bg-green-100 text-green-800 text-xs px-1 rounded-full flex items-center">
                                    <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                </span>
                            </div>
                            <div class="flex items-center">
                                <span class="text-yellow-500">★</span>
                                <span class="text-sm ml-1">4.93</span>
                            </div>
                        </div>
                        <div class="flex items-center text-xs text-gray-500 mt-2">
                            <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                            </svg>
                            Nigeria
                        </div>
                        <div class="text-sm font-semibold mt-2">₦1,500,000<span class="text-xs text-gray-500 font-normal">/month</span></div>
                    </div>
                </div>

                <!-- TechCrunch -->
                <div class="channel-card rounded-lg overflow-hidden bg-green-400 cursor-pointer" data-channel="techcrunch">
                    <div class="h-40 flex items-center justify-center">
                        <span class="text-white font-bold text-3xl">TechCrunch</span>
                    </div>
                    <div class="bg-white p-4">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <span class="font-semibold">Techcrunch</span>
                            </div>
                            <div class="flex items-center">
                                <span class="text-yellow-500">★</span>
                                <span class="text-sm ml-1">4.93</span>
                            </div>
                        </div>
                        <div class="flex items-center text-xs text-gray-500 mt-2">
                            <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                            </svg>
                            Nigeria
                        </div>
                        <div class="text-sm font-semibold mt-2">₦2,000,000<span class="text-xs text-gray-500 font-normal">/month</span></div>
                    </div>
                </div>

                <!-- Tech Cabal -->
                <div class="channel-card rounded-lg overflow-hidden bg-red-500 cursor-pointer" data-channel="techcabal">
                    <div class="h-40 flex items-center justify-center">
                        <div class="text-white font-bold text-5xl">tc</div>
                    </div>
                    <div class="bg-white p-4">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <span class="font-semibold">Tech Cabal</span>
                                <span class="ml-2 bg-green-100 text-green-800 text-xs px-1 rounded-full flex items-center">
                                    <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                </span>
                            </div>
                            <div class="flex items-center">
                                <span class="text-yellow-500">★</span>
                                <span class="text-sm ml-1">4.93</span>
                            </div>
                        </div>
                        <div class="flex items-center text-xs text-gray-500 mt-2">
                            <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                            </svg>
                            Nigeria
                        </div>
                        <div class="text-sm font-semibold mt-2">₦2,000,000<span class="text-xs text-gray-500 font-normal">/month</span></div>
                    </div>
                </div>

                <!-- Nairaland -->
                <div class="channel-card rounded-lg overflow-hidden bg-green-800 cursor-pointer" data-channel="nairaland">
                    <div class="h-40 flex items-center justify-center">
                        <div class="text-white font-bold text-6xl">₦</div>
                    </div>
                    <div class="bg-white p-4">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <span class="font-semibold">Nairaland</span>
                                <span class="ml-2 bg-green-100 text-green-800 text-xs px-1 rounded-full flex items-center">
                                    <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                </span>
                            </div>
                            <div class="flex items-center">
                                <span class="text-yellow-500">★</span>
                                <span class="text-sm ml-1">4.93</span>
                            </div>
                        </div>
                        <div class="flex items-center text-xs text-gray-500 mt-2">
                            <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                            </svg>
                            Nigeria
                        </div>
                        <div class="text-sm font-semibold mt-2">₦1,500,000<span class="text-xs text-gray-500 font-normal">/month</span></div>
                    </div>
                </div>

                <!-- Second row (duplicated for demonstration) -->
                <div class="channel-card rounded-lg overflow-hidden bg-red-500 cursor-pointer" data-channel="techcabal2">
                    <div class="h-40 flex items-center justify-center">
                        <div class="text-white font-bold text-5xl">tc</div>
                    </div>
                    <div class="bg-white p-4">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <span class="font-semibold">Tech Cabal</span>
                                <span class="ml-2 bg-green-100 text-green-800 text-xs px-1 rounded-full flex items-center">
                                    <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                </span>
                            </div>
                            <div class="flex items-center">
                                <span class="text-yellow-500">★</span>
                                <span class="text-sm ml-1">4.93</span>
                            </div>
                        </div>
                        <div class="flex items-center text-xs text-gray-500 mt-2">
                            <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                            </svg>
                            Nigeria
                        </div>
                        <div class="text-sm font-semibold mt-2">₦2,000,000<span class="text-xs text-gray-500 font-normal">/month</span></div>
                    </div>
                </div>

                <div class="channel-card rounded-lg overflow-hidden bg-green-800 cursor-pointer" data-channel="nairaland2">
                    <div class="h-40 flex items-center justify-center">
                        <div class="text-white font-bold text-6xl">₦</div>
                    </div>
                    <div class="bg-white p-4">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <span class="font-semibold">Nairaland</span>
                                <span class="ml-2 bg-green-100 text-green-800 text-xs px-1 rounded-full flex items-center">
                                    <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                </span>
                            </div>
                            <div class="flex items-center">
                                <span class="text-yellow-500">★</span>
                                <span class="text-sm ml-1">4.93</span>
                            </div>
                        </div>
                        <div class="flex items-center text-xs text-gray-500 mt-2">
                            <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                            </svg>
                            Nigeria
                        </div>
                        <div class="text-sm font-semibold mt-2">₦1,500,000<span class="text-xs text-gray-500 font-normal">/month</span></div>
                    </div>
                </div>

                <div class="channel-card rounded-lg overflow-hidden bg-emerald-500 cursor-pointer" data-channel="legit2">
                    <div class="h-40 flex items-center justify-center p-6">
                        <div class="bg-yellow-300 py-2 px-6 rounded">
                            <span class="text-blue-800 font-bold text-2xl">Legit.ng</span>
                        </div>
                    </div>
                    <div class="bg-white p-4">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <span class="font-semibold">Legit.ng</span>
                                <span class="ml-2 bg-green-100 text-green-800 text-xs px-1 rounded-full flex items-center">
                                    <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                </span>
                            </div>
                            <div class="flex items-center">
                                <span class="text-yellow-500">★</span>
                                <span class="text-sm ml-1">4.93</span>
                            </div>
                        </div>
                        <div class="flex items-center text-xs text-gray-500 mt-2">
                            <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                            </svg>
                            Nigeria
                        </div>
                        <div class="text-sm font-semibold mt-2">₦1,500,000<span class="text-xs text-gray-500 font-normal">/month</span></div>
                    </div>
                </div>

                <div class="channel-card rounded-lg overflow-hidden bg-green-400 cursor-pointer" data-channel="techcrunch2">
                    <div class="h-40 flex items-center justify-center">
                        <span class="text-white font-bold text-3xl">TechCrunch</span>
                    </div>
                    <div class="bg-white p-4">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <span class="font-semibold">Techcrunch</span>
                            </div>
                            <div class="flex items-center">
                                <span class="text-yellow-500">★</span>
                                <span class="text-sm ml-1">4.93</span>
                            </div>
                        </div>
                        <div class="flex items-center text-xs text-gray-500 mt-2">
                            <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                            </svg>
                            Nigeria
                        </div>
                        <div class="text-sm font-semibold mt-2">₦2,000,000<span class="text-xs text-gray-500 font-normal">/month</span></div>
                    </div>
                </div>
            </div>

            <!-- Continue Button -->
            <div class="mt-10 flex justify-end">
                <button id="btn-to-step2" class="bg-[#5307F8] text-white py-2 px-6 rounded hover:bg-blue-700 outline-none transition">
                    Continue
                </button>
            </div>
        </div>

        <!-- Step 2 - Details Section (Hidden initially) -->
        <div id="content-step2" class="hidden">
            <div class="">
                <h2 class="text-xl font-semibold mb-6">Article Details</h2>

                <!-- Options for Manual Entry or Generate with AI -->
                <div id="article-options" class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <!-- Manual Entry Option -->
                    <div id="manual-entry-option" class="border border-blue-200 rounded-lg p-6 cursor-pointer hover:bg-blue-50 transition">
                        <div class="flex items-center mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" fill="none">
                                <rect width="48" height="48" rx="6" fill="#C1FF72" />
                                <path d="M32.3845 20.4531C33.2929 19.5447 33.6389 18.2162 32.8635 17.1906C32.5689 16.8041 32.248 16.4384 31.9031 16.0961C31.5606 15.7511 31.1947 15.4302 30.8081 15.1356C29.7829 14.3608 28.4545 14.7062 27.5456 15.6151L20.3095 22.8508C20.0545 23.1058 19.8796 23.4287 19.8454 23.7878C19.7864 24.3967 19.7324 25.5339 19.8557 27.2997C19.8712 27.5182 19.9651 27.7237 20.12 27.8786C20.2749 28.0334 20.4805 28.1271 20.699 28.1425C22.4643 28.2662 23.602 28.2119 24.2109 28.1533C24.5695 28.1186 24.8929 27.9442 25.1479 27.6892L32.3845 20.4531Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M31.2877 21.5494C31.02 20.9564 30.4402 19.9509 29.2439 18.7547C28.0481 17.5584 27.0422 16.9791 26.4492 16.7109" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M32.903 23.5312C32.9053 23.8345 32.9062 24.1467 32.9062 24.4688C32.9062 27.6853 32.7881 29.9559 32.6733 31.4025C32.5781 32.6006 31.6627 33.5156 30.465 33.6103C29.0184 33.7256 26.7478 33.8438 23.5312 33.8438C20.3147 33.8438 18.0441 33.7256 16.5975 33.6108C15.3994 33.5156 14.4844 32.6002 14.3897 31.4025C14.2739 29.9559 14.1562 27.6853 14.1562 24.4688C14.1562 21.2522 14.2744 18.9816 14.3892 17.535C14.4844 16.3369 15.3994 15.4219 16.5975 15.3272C18.0441 15.2114 20.3147 15.0938 23.5312 15.0938C23.8533 15.0938 24.1655 15.0952 24.4688 15.097" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold mb-2">Manual Entry</h3>
                        <p class="text-sm text-gray-600">
                            You can manually type or paste your article contents. We have made provision for formatting so you can style the contents into your desired style using styles like bold, italics, underline and linking.
                        </p>
                    </div>

                    <!-- Generate with AI Option -->
                    <div id="generate-ai-option" class="border border-purple-200 rounded-lg p-6 cursor-pointer hover:bg-purple-50 transition">
                        <div class="flex items-center mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" fill="none">
                                <rect width="48" height="48" rx="6" fill="#CCB5FD" />
                                <path d="M23.6739 33.9326L18.8984 34.3465L19.3123 29.5709L29.2454 19.7016C29.3936 19.55 29.5707 19.4295 29.7661 19.3473C29.9615 19.265 30.1715 19.2227 30.3835 19.2227C30.5956 19.2227 30.8055 19.265 31.001 19.3473C31.1965 19.4295 31.3735 19.55 31.5217 19.7016L33.5433 21.7391C33.6925 21.8871 33.8109 22.0632 33.8918 22.2572C33.9726 22.4511 34.0142 22.6592 34.0142 22.8693C34.0142 23.0795 33.9726 23.2876 33.8918 23.4815C33.8109 23.6755 33.6925 23.8516 33.5433 23.9996L23.6739 33.9326Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M13.7329 19.1256C13.1828 19.0283 13.1828 18.2254 13.7329 18.128C15.7256 17.7755 17.3106 16.2321 17.7432 14.2228L17.7763 14.0688C17.8953 13.516 18.6694 13.5126 18.7932 14.0643L18.8334 14.2438C19.282 16.2435 20.8674 17.7739 22.8546 18.1255C23.4075 18.2233 23.4075 19.0304 22.8546 19.1282C20.8674 19.4797 19.282 21.0101 18.8334 23.0099L18.7932 23.1894C18.6694 23.7411 17.8953 23.7377 17.7763 23.1849L17.7432 23.0308C17.3106 21.0216 15.7256 19.4781 13.7329 19.1256Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold mb-2">Generate with AI</h3>
                        <p class="text-sm text-gray-600">
                            Just have to input the prompts, and the article will be generated with Artificial Intelligence (AI). You can also edit the generated result.
                        </p>
                    </div>
                </div>

                <!-- Form (Hidden Initially) -->
                <div id="article-form" class="hidden">
                    <form>
                        <div class="mb-6">
                            <label class="block text-gray-700 text-sm font-medium mb-2" for="title">Article Title</label>
                            <input type="text" id="title" class="w-full px-3 py-3 border border-gray-300 rounded-md outline-none">
                        </div>
                        <div class="mb-6">
                            <label class="block text-gray-700 text-sm font-medium mb-2" for="description">Description</label>
                            <textarea id="description" rows="4" class="w-full px-3 py-3 border border-gray-300 rounded-md outline-none"></textarea>
                        </div>
                        <div class="mb-6">
                            <label class="block text-gray-700 text-sm font-medium mb-2" for="category">Category</label>
                            <select id="category" class="w-full px-3 py-3 border border-gray-300 rounded-md outline-none">
                                <option>Business</option>
                                <option>Technology</option>
                                <option>Entertainment</option>
                                <option>Sports</option>
                                <option>Health</option>
                            </select>
                        </div>
                        <div class="mb-6">
                            <label class="block text-gray-700 text-sm font-medium mb-2" for="tags">Tags (comma separated)</label>
                            <input type="text" id="tags" class="w-full px-3 py-3 border border-gray-300 rounded-md outline-none">
                        </div>
                    </form>
                </div>
            </div>

            <!-- Navigation Buttons -->
            <div class="mt-10 flex justify-between">
                <button id="btn-to-step1" class="bg-gray-200 text-gray-800 py-2 px-6 rounded hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-opacity-50 transition">
                    Back
                </button>
                <button id="btn-to-step3" class="bg-[#5307F8] text-white py-2 px-6 rounded hover:bg-blue-700 outline-none transition">
                    Continue
                </button>
            </div>
        </div>

        <!-- Step 3 - Payment Section (Hidden initially) -->
        <div id="content-step3" class="hidden">
            <div class="bg-white">
                <svg xmlns="http://www.w3.org/2000/svg" width="auto" height="356" viewBox="0 0 1336 356" fill="none">
                    <rect width="1336" height="356" fill="#BFA0F7" />
                    <path d="M483.68 212V143.84H512.288C515.36 143.84 518.176 144.48 520.736 145.76C523.296 147.04 525.536 148.736 527.456 150.848C529.376 152.96 530.848 155.328 531.872 157.952C532.896 160.576 533.408 163.264 533.408 166.016C533.408 169.792 532.544 173.408 530.816 176.864C529.152 180.256 526.752 183.008 523.616 185.12C520.544 187.232 516.96 188.288 512.864 188.288H494.432V212H483.68ZM494.432 178.784H512.192C514.24 178.784 516.032 178.24 517.568 177.152C519.104 176 520.288 174.464 521.12 172.544C522.016 170.624 522.464 168.448 522.464 166.016C522.464 163.52 521.952 161.312 520.928 159.392C519.904 157.472 518.56 156 516.896 154.976C515.296 153.888 513.536 153.344 511.616 153.344H494.432V178.784ZM543.493 212V143.84H573.157C576.229 143.84 579.045 144.48 581.605 145.76C584.165 147.04 586.373 148.736 588.229 150.848C590.149 152.96 591.621 155.328 592.645 157.952C593.733 160.576 594.277 163.264 594.277 166.016C594.277 169.024 593.733 171.904 592.645 174.656C591.557 177.408 589.989 179.776 587.941 181.76C585.957 183.744 583.621 185.184 580.933 186.08L596.965 212H584.869L570.085 188.288H554.245V212H543.493ZM554.245 178.784H573.061C575.045 178.784 576.805 178.208 578.341 177.056C579.877 175.904 581.093 174.368 581.989 172.448C582.885 170.464 583.333 168.32 583.333 166.016C583.333 163.648 582.821 161.536 581.797 159.68C580.773 157.76 579.429 156.224 577.765 155.072C576.165 153.92 574.405 153.344 572.485 153.344H554.245V178.784ZM606.961 212V143.84H617.713V212H606.961ZM628.798 177.44C628.798 173.28 629.534 169.216 631.006 165.248C632.478 161.216 634.622 157.568 637.438 154.304C640.318 150.976 643.806 148.352 647.902 146.432C651.998 144.448 656.638 143.456 661.822 143.456C667.966 143.456 673.278 144.864 677.758 147.68C682.238 150.432 685.566 153.984 687.742 158.336L679.294 164C678.014 161.248 676.382 159.072 674.398 157.472C672.478 155.872 670.366 154.752 668.062 154.112C665.822 153.472 663.614 153.152 661.438 153.152C657.854 153.152 654.718 153.888 652.03 155.36C649.342 156.768 647.07 158.656 645.214 161.024C643.422 163.392 642.046 166.048 641.086 168.992C640.19 171.936 639.742 174.88 639.742 177.824C639.742 181.088 640.286 184.256 641.374 187.328C642.462 190.336 643.966 193.024 645.886 195.392C647.87 197.696 650.206 199.52 652.894 200.864C655.582 202.208 658.526 202.88 661.726 202.88C663.902 202.88 666.174 202.496 668.542 201.728C670.91 200.96 673.086 199.776 675.07 198.176C677.118 196.512 678.718 194.336 679.87 191.648L688.798 196.736C687.39 200.128 685.182 203.008 682.174 205.376C679.23 207.744 675.902 209.536 672.19 210.752C668.542 211.968 664.926 212.576 661.342 212.576C656.542 212.576 652.158 211.584 648.19 209.6C644.222 207.552 640.798 204.864 637.918 201.536C635.038 198.144 632.798 194.368 631.198 190.208C629.598 185.984 628.798 181.728 628.798 177.44ZM698.743 212V143.84H709.495V212H698.743ZM735.651 163.808V212H724.899V143.84H733.731L772.323 193.088V143.936H783.171V212H773.763L735.651 163.808ZM826.333 212.48C821.853 212.48 817.661 211.552 813.757 209.696C809.853 207.84 806.429 205.28 803.484 202.016C800.605 198.752 798.333 195.04 796.669 190.88C795.069 186.72 794.269 182.304 794.269 177.632C794.269 172.96 795.069 168.576 796.669 164.48C798.333 160.384 800.605 156.736 803.484 153.536C806.429 150.336 809.853 147.84 813.757 146.048C817.725 144.256 822.045 143.36 826.717 143.36C833.181 143.36 838.621 144.736 843.037 147.488C847.517 150.176 850.877 153.76 853.117 158.24L844.861 164.192C843.069 160.48 840.509 157.696 837.181 155.84C833.917 153.984 830.333 153.056 826.429 153.056C823.229 153.056 820.317 153.728 817.693 155.072C815.069 156.416 812.797 158.272 810.877 160.64C809.021 162.944 807.613 165.6 806.653 168.608C805.693 171.552 805.213 174.656 805.213 177.92C805.213 181.376 805.757 184.608 806.845 187.616C807.933 190.624 809.469 193.28 811.453 195.584C813.437 197.824 815.773 199.584 818.461 200.864C821.149 202.144 824.061 202.784 827.197 202.784C830.909 202.784 834.429 201.856 837.757 200C841.149 198.08 844.317 195.232 847.26 191.456V202.4C841.309 209.12 834.333 212.48 826.333 212.48ZM846.205 185.504H831.901V177.536H855.229V212H846.205V185.504Z" fill="black" />
                </svg>
                <h2 class="text-xl font-semibold mb-6">Payment Method</h2>
                <div class="space-y-4">
                    <div class="border border-gray-200 rounded-lg p-4 cursor-pointer hover:bg-gray-50">
                        <div class="flex items-center">
                            <input type="radio" name="payment" id="payment-card" class="h-4 w-4 text-[#5307F8] focus:ring-blue-500">
                            <label for="payment-card" class="ml-3 block text-gray-700">
                                <span class="font-medium">Credit/Debit Card</span>
                            </label>
                        </div>
                    </div>
                    <div class="border border-gray-200 rounded-lg p-4 cursor-pointer hover:bg-gray-50">
                        <div class="flex items-center">
                            <input type="radio" name="payment" id="payment-bank" class="h-4 w-4 text-[#5307F8] focus:ring-blue-500">
                            <label for="payment-bank" class="ml-3 block text-gray-700">
                                <span class="font-medium">Bank Transfer</span>
                            </label>
                        </div>
                    </div>
                    <div class="border border-gray-200 rounded-lg p-4 cursor-pointer hover:bg-gray-50">
                        <div class="flex items-center">
                            <input type="radio" name="payment" id="payment-wallet" class="h-4 w-4 text-[#5307F8] focus:ring-blue-500" checked>
                            <label for="payment-wallet" class="ml-3 block text-gray-700">
                                <span class="font-medium">Wallet Balance</span>
                                <span class="text-sm text-green-600 block mt-1">Available: ₦5,250,000</span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Navigation Buttons -->
            <div class="mt-10 flex justify-between">
                <button id="btn-to-step2-from-3" class="bg-gray-200 text-gray-800 py-2 px-6 rounded hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-opacity-50 transition">
                    Back
                </button>
                <button id="btn-submit" class="bg-[#5307F8] text-white py-2 px-6 rounded hover:bg-blue-700 outline-none transition">
                    Submit & Pay
                </button>
            </div>
        </div>
    </div>

    <script>
        // Select all step elements and content sections
        const steps = [
            document.getElementById('step1'),
            document.getElementById('step2'),
            document.getElementById('step3')
        ];

        const contents = [
            document.getElementById('content-step1'),
            document.getElementById('content-step2'),
            document.getElementById('content-step3')
        ];

        // Navigation buttons
        const btnToStep2 = document.getElementById('btn-to-step2');
        const btnToStep1 = document.getElementById('btn-to-step1');
        const btnToStep3 = document.getElementById('btn-to-step3');
        const btnToStep2FromStep3 = document.getElementById('btn-to-step2-from-3');
        const btnSubmit = document.getElementById('btn-submit');

        // Channel cards
        const channelCards = document.querySelectorAll('.channel-card');

        // Function to switch between steps
        function goToStep(stepIndex) {
            // Update step styling
            steps.forEach((step, index) => {
                if (index === stepIndex) {
                    step.classList.remove('step-inactive');
                    step.classList.add('step-active');
                } else {
                    step.classList.remove('step-active');
                    step.classList.add('step-inactive');
                }
            });

            // Show/hide content sections
            contents.forEach((content, index) => {
                if (index === stepIndex) {
                    content.classList.remove('hidden');
                    content.classList.add('block');
                } else {
                    content.classList.remove('block');
                    content.classList.add('hidden');
                }
            });
        }

        // Channel selection
        channelCards.forEach(card => {
            card.addEventListener('click', () => {
                // Remove selection from all cards
                channelCards.forEach(c => c.classList.remove('card-selected'));
                // Add selection to clicked card
                card.classList.add('card-selected');
            });
        });

        // Button event listeners
        btnToStep2.addEventListener('click', () => goToStep(1));
        btnToStep1.addEventListener('click', () => goToStep(0));
        btnToStep3.addEventListener('click', () => goToStep(2));
        btnToStep2FromStep3.addEventListener('click', () => goToStep(1));

        btnSubmit.addEventListener('click', () => {
            alert('Your article has been submitted for publication!');
        });
        // Article options and form
        const manualEntryOption = document.getElementById('manual-entry-option');
        const generateAIOption = document.getElementById('generate-ai-option');
        const articleOptions = document.getElementById('article-options');
        const articleForm = document.getElementById('article-form');

        // Show the form when either option is clicked
        manualEntryOption.addEventListener('click', () => {
            articleOptions.classList.add('hidden');
            articleForm.classList.remove('hidden');
            articleForm.classList.add('block');
        });

        generateAIOption.addEventListener('click', () => {
            articleOptions.classList.add('hidden');
            articleForm.classList.remove('hidden');
            articleForm.classList.add('block');
        });
    </script>
</div>