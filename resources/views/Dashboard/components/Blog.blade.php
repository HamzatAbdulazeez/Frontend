<body class="bg-gray-50 space-y-6">
    <!-- Hero Banner -->
    <div class="bg-[#C1FF72] rounded-lg p-8 mb-6 relative overflow-hidden">
        <div class="w-full md:w-1/2 z-10 relative">
            <h1 class="text-3xl font-bold text-gray-900 mb-2">Blast on our multiple blog channels</h1>
            <p class="text-gray-800 mb-6">List AdSpace on Blastify and share revenue with Blastily.</p>
            <button class="bg-indigo-600 text-white px-6 py-2 rounded-full font-medium hover:bg-indigo-700 transition">Publish article</button>
        </div>
        <div class="absolute right-0 bottom-0 w-1/2 h-full">
            <div class="bg-purple-500 w-full h-full transform translate-y-12 rounded-tl-full"></div>
        </div>
    </div>

    <!-- Publications Section -->
    <div class="mb-6 flex justify-between items-center bg-white p-4 rounded">
        <h2 class="text-2xl font-bold text-gray-800">Your publications</h2>
        <div class="flex items-center">
            <span class="mr-2 text-gray-600">Status:</span>
            <div class="inline-flex rounded-md">
                <button class="px-3 py-2 border border-gray-300 bg-white text-gray-700 rounded-l-md">All</button>
                <button class="px-3 py-2  text-gray-700">Newest</button>
                <button class="px-3 py-2 border border-gray-300 bg-white text-gray-700 rounded-r-md">Oldest</button>
            </div>
        </div>
    </div>

    <!-- Blog Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6" id="blogGrid">
        
    </div>

    <script>
        // Sample blog post data
        const blogPosts = [{
                id: 1,
                title: "Future of Payment with PayNext!",
                company: "CODEFIXBUG LIMITED",
                date: "OCT 15, 2024",
                excerpt: "In today's fast-paced world, convenience and security are paramount when it comes to managing your finances. That's where PayNext comes in—your go-to solution for secure and efficient payments.",
                image: "https://res.cloudinary.com/ddj0k8gdw/image/upload/v1744547464/Rectangle_647_1_kummg8.jpg"
            },
            {
                id: 2,
                title: "Future of Payment with PayNext!",
                company: "CODEFIXBUG LIMITED",
                date: "OCT 15, 2024",
                excerpt: "In today's fast-paced world, convenience and security are paramount when it comes to managing your finances. That's where PayNext comes in—your go-to solution for secure and efficient payments.",
                image: "https://res.cloudinary.com/ddj0k8gdw/image/upload/v1744547464/Rectangle_647_1_kummg8.jpg"
            },
            {
                id: 3,
                title: "Future of Payment with PayNext!",
                company: "CODEFIXBUG LIMITED",
                date: "OCT 15, 2024",
                excerpt: "In today's fast-paced world, convenience and security are paramount when it comes to managing your finances. That's where PayNext comes in—your go-to solution for secure and efficient payments.",
                image: "https://res.cloudinary.com/ddj0k8gdw/image/upload/v1744547464/Rectangle_647_1_kummg8.jpg"
            },
            {
                id: 4,
                title: "Future of Payment with PayNext!",
                company: "CODEFIXBUG LIMITED",
                date: "OCT 15, 2024",
                excerpt: "In today's fast-paced world, convenience and security are paramount when it comes to managing your finances. That's where PayNext comes in—your go-to solution for secure and efficient payments.",
                image: "https://res.cloudinary.com/ddj0k8gdw/image/upload/v1744547464/Rectangle_647_1_kummg8.jpg"
            },
            {
                id: 5,
                title: "Future of Payment with PayNext!",
                company: "CODEFIXBUG LIMITED",
                date: "OCT 15, 2024",
                excerpt: "In today's fast-paced world, convenience and security are paramount when it comes to managing your finances. That's where PayNext comes in—your go-to solution for secure and efficient payments.",
                image: "https://res.cloudinary.com/ddj0k8gdw/image/upload/v1744547464/Rectangle_647_1_kummg8.jpg"
            },
            {
                id: 6,
                title: "Future of Payment with PayNext!",
                company: "CODEFIXBUG LIMITED",
                date: "OCT 15, 2024",
                excerpt: "In today's fast-paced world, convenience and security are paramount when it comes to managing your finances. That's where PayNext comes in—your go-to solution for secure and efficient payments.",
                image: "https://res.cloudinary.com/ddj0k8gdw/image/upload/v1744547464/Rectangle_647_1_kummg8.jpg"
            }
        ];

        // Function to render blog posts
        function renderBlogPosts() {
            const grid = document.getElementById('blogGrid');

            blogPosts.forEach(post => {
                const card = document.createElement('div');
                card.className = 'bg-white rounded-lg overflow-hidden flex flex-col h-full';

                // Image container - maintain aspect ratio
                const imageContainer = document.createElement('div');
                imageContainer.className = 'relative pb-[60%] overflow-hidden';

                const image = document.createElement('img');
                image.className = 'absolute w-full h-full object-cover';
                image.src = post.image;
                image.alt = post.title;

                imageContainer.appendChild(image);
                card.appendChild(imageContainer);

                // Content
                const content = document.createElement('div');
                content.className = 'p-4 flex flex-col flex-grow';

                // Company and date
                const metaInfo = document.createElement('div');
                metaInfo.className = 'flex justify-between items-center mb-2 text-sm text-gray-500';

                const company = document.createElement('span');
                company.className = 'font-medium';
                company.textContent = post.company;

                const date = document.createElement('span');
                date.textContent = post.date;

                metaInfo.appendChild(company);
                metaInfo.appendChild(date);
                content.appendChild(metaInfo);

                // Title
                const title = document.createElement('h3');
                title.className = 'text-xl font-bold mb-2 text-gray-800';
                title.textContent = post.title;
                content.appendChild(title);

                // Excerpt
                const excerpt = document.createElement('p');
                excerpt.className = 'text-gray-600 text-sm line-clamp-3';
                excerpt.textContent = post.excerpt;
                content.appendChild(excerpt);

                card.appendChild(content);
                grid.appendChild(card);
            });
        }

        // Initialize the page
        document.addEventListener('DOMContentLoaded', () => {
            renderBlogPosts();
        });
    </script>
</body>

</html>