<div class="space-y-6 min-h-screen">
    <!-- KYC Alert -->
    <div class="bg-white rounded-lg border border-gray-200 p-6">
        <div class="flex items-center justify-between mb-4">
            <h2 class="font-semibold text-black">Things to do</h2>
            <button class="text-sm text-gray-500 hover:underline">Hide ⌃</button>
        </div>
        <div class="flex items-start gap-3 border border-gray-200 rounded-lg p-4">
            <div class="mt-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="51" height="51" viewBox="0 0 51 51" fill="none">
                    <rect width="51" height="51" rx="8" fill="#FBEBEC" />
                    <g clip-path="url(#clip0_127_2406)">
                        <path d="M36.2 30.6335L28.0016 16.3957C27.7967 16.0469 27.5042 15.7576 27.1531 15.5567C26.802 15.3557 26.4045 15.25 26 15.25C25.5955 15.25 25.198 15.3557 24.8469 15.5567C24.4958 15.7576 24.2033 16.0469 23.9984 16.3957L15.8 30.6335C15.6029 30.9709 15.499 31.3546 15.499 31.7454C15.499 32.1361 15.6029 32.5199 15.8 32.8572C16.0022 33.2082 16.2942 33.499 16.646 33.6998C16.9977 33.9006 17.3965 34.0043 17.8016 34.0001H34.1984C34.6031 34.0039 35.0016 33.9001 35.353 33.6993C35.7044 33.4985 35.996 33.2079 36.1981 32.8572C36.3955 32.52 36.4997 32.1364 36.5001 31.7456C36.5004 31.3549 36.3968 30.9711 36.2 30.6335ZM25.25 22.7501C25.25 22.5511 25.329 22.3604 25.4697 22.2197C25.6103 22.0791 25.8011 22.0001 26 22.0001C26.1989 22.0001 26.3897 22.0791 26.5303 22.2197C26.671 22.3604 26.75 22.5511 26.75 22.7501V26.5001C26.75 26.699 26.671 26.8897 26.5303 27.0304C26.3897 27.171 26.1989 27.2501 26 27.2501C25.8011 27.2501 25.6103 27.171 25.4697 27.0304C25.329 26.8897 25.25 26.699 25.25 26.5001V22.7501ZM26 31.0001C25.7775 31.0001 25.56 30.9341 25.375 30.8105C25.19 30.6868 25.0458 30.5111 24.9606 30.3056C24.8755 30.1 24.8532 29.8738 24.8966 29.6556C24.94 29.4374 25.0472 29.2369 25.2045 29.0796C25.3618 28.9222 25.5623 28.8151 25.7805 28.7717C25.9988 28.7283 26.2249 28.7505 26.4305 28.8357C26.6361 28.9208 26.8118 29.065 26.9354 29.25C27.059 29.4351 27.125 29.6526 27.125 29.8751C27.125 30.1734 27.0065 30.4596 26.7955 30.6706C26.5845 30.8815 26.2984 31.0001 26 31.0001Z" fill="#DB2323" />
                    </g>
                    <defs>
                        <clipPath id="clip0_127_2406">
                            <rect width="24" height="24" fill="white" transform="translate(14 13)" />
                        </clipPath>
                    </defs>
                </svg>
            </div>
            <div>
                <h3 class="font-semibold text-black mt-1 mb-2">KYC Verification Alert: Action Required</h3>
                <p class="text-sm text-gray-600">To ensure the security of your account and comply with regulatory standards, we require additional information to complete your Know Your Customer (KYC) verification.</p>
            </div>
            <div class="ml-auto">
                <span class="bg-red-100 text-red-600 text-xs px-3 py-1 rounded-full font-semibold">HIGH</span>
            </div>
        </div>
    </div>

    <!-- Dashboard Cards -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <!-- Wallet Card -->
        <div class="bg-[#BEF264] rounded-xl p-4 flex flex-col justify-between min-h-[200px] relative">
            <div>
                <h4 class="text-sm text-[#5307F8] font-semibold mb-1">Wallet Balance</h4>
                <div class="text-4xl font-bold text-[#5307F8]">₦0.00</div>
            </div>
            <div class="mt-4">
                <button class="bg-[#5307F8] text-white text-sm px-4 py-2 rounded-full">Fund wallet</button>
            </div>
            <div class="absolute bottom-2 right-2 w-32 h-auto">
                <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1744483189/Objects_hkulvd.png" alt="wallet" class="w-full h-full object-cover" />
            </div>
        </div>

        <!-- Total Listings Card -->
        <div class="bg-white rounded-xl p-4 relative min-h-[200px]">
            <h4 class="text-sm font-medium text-black">Total Listings</h4>
            <div class="text-4xl font-bold mt-2">200</div>
            <div class="absolute bottom-2 right-2 w-48 h-auto">
                <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1744483188/Frame_4051_l8kt7h.png" alt="listings" class="w-full h-full object-cover" />
            </div>
        </div>

        <!-- Pending Listings Card -->
        <div class="bg-white rounded-xl p-4 relative min-h-[200px]">
            <h4 class="text-sm font-medium text-black">Pending Listings</h4>
            <div class="text-4xl font-bold mt-2">44</div>
            <div class="absolute bottom-2 right-2 w-38 h-auto">
                <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1744483189/Group_1664_hjpmlp.png" alt="pie chart" class="w-full h-full object-cover" />
            </div>
        </div>
    </div>

    <!-- Partner Banner -->
    <div class="bg-[#C1FF72] rounded-xl flex flex-col md:flex-row justify-between items-center px-6 py-8 overflow-hidden relative">
        <div class="max-w-md z-10">
            <h2 class="text-2xl font-bold text-black mb-2">Join our partners all over the world</h2>
            <p class="text-black mb-16">List AdSpace on Blastily and share revenue with Blastily.</p>
            <button class="bg-[#5307F8] text-white px-4 py-2 rounded-full hover:bg-[#5307F8]">Become a partner</button>
        </div>
        <div class="absolute bottom-0 right-0 md:static md:w-78 w-32 h-32 md:h-auto z-0">
            <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1744483761/Frame_1_dimofw.png" alt="globe" class="w-full h-full object-cover" />
        </div>
    </div>
    {{-- Charts --}}
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="bg-white p-4 rounded">
            <div class="flex justify-between items-center">
                <h3 class="font-semibold">Performance</h3>
                <div class="text-xs space-x-2">
                    <button class="text-gray-600">1D</button>
                    <button class="text-gray-600">1M</button>
                    <button class="text-gray-600">1Y</button>
                    <button class="text-gray-600">Max</button>
                </div>
            </div>
            <div class="relative h-[300px]">
                <canvas id="barChart" class="w-full"></canvas>
            </div>
        </div>
        <div class="bg-white p-4 rounded">
            <h3 class="font-semibold mb-4">Contacts buckets</h3>
            <div class="relative h-[300px]">
                <canvas id="doughnutChart" class="w-full mx-auto"></canvas>
            </div>
        </div>
    </div>

    {{-- Total Performance --}}
    <div class="bg-white p-4 rounded">
        <div class="flex justify-between items-center mb-4">
            <h3 class="font-semibold">Total Performance</h3>
            <div class="text-xs space-x-2">
                <button class="text-gray-600">1D</button>
                <button class="text-gray-600">1M</button>
                <button class="text-gray-600">1Y</button>
                <button class="text-gray-600">Max</button>
            </div>
        </div>
        <div class="relative h-[300px]">
            <canvas id="totalBarChart" class="w-full"></canvas>
        </div>
    </div>
    <!-- Header -->
    <div class="flex justify-between items-center bg-white p-4 rounded">
        <h3 class="font-semibold">Recent Bookings</h3>
        <a href="#" class="text-[#5800FF] hover:text-indigo-800 text-sm underline">View all</a>
    </div>
    <div class="bg-white p-4 rounded">
        <div class="hidden md:block overflow-x-auto">
            <table class="w-full">
                <thead class="bg-gray-50 text-left">
                    <tr>
                        <th class="px-6 py-4 text-sm font-light text-black">NAME</th>
                        <th class="px-6 py-4 text-sm font-light text-black">LIST TYPE</th>
                        <th class="px-6 py-4 text-sm font-light text-black">DURATION</th>
                        <th class="px-6 py-4 text-sm font-light text-black">AMOUNT</th>
                        <th class="px-6 py-4 text-sm font-light text-black">REQUEST DATE</th>
                        <th class="px-6 py-4 text-sm font-light text-black">STATUS</th>
                    </tr>
                </thead>
                <tbody id="desktopTableBody">
                   
                </tbody>
            </table>
        </div>

        <!-- Mobile Cards (visible only on mobile) -->
        <div class="md:hidden" id="mobileCardsContainer">
            
        </div>
    </div>
</div>

<script>
    // Booking data
    const bookings = [{
            name: "Tech Cabal",
            listType: "News",
            duration: "4 days",
            amount: "40,000.00",
            requestDate: "October 27, 2024 2:36 PM",
            status: "PENDING"
        },
        {
            name: "Vanguard News",
            listType: "News",
            duration: "3 days",
            amount: "3,000.00",
            requestDate: "October 27, 2024 2:35 PM",
            status: "PENDING"
        },
        {
            name: "BRT",
            listType: "Vehicle",
            duration: "1 day",
            amount: "-90,000.00",
            requestDate: "October 27, 2024 2:34 PM",
            status: "PENDING"
        },
        {
            name: "Genesis Cinema",
            listType: "Cinema",
            duration: "1 day",
            amount: "0.00",
            requestDate: "October 27, 2024 2:33 PM",
            status: "PENDING"
        },
        {
            name: "Radio CJSW 90.9 FM",
            listType: "Radio",
            duration: "1 day",
            amount: "0.00",
            requestDate: "October 27, 2024 2:33 PM",
            status: "PENDING"
        }
    ];

    // Function to render desktop table
    function renderDesktopTable() {
        const tableBody = document.getElementById('desktopTableBody');

        bookings.forEach((booking, index) => {
            const row = document.createElement('tr');
            row.className = index % 2 === 0 ? 'bg-purple-50' : 'bg-white';

            // Define cell content and classes
            const cells = [{
                    value: booking.name,
                    class: 'font-light text-gray-800'
                },
                {
                    value: booking.listType,
                    class: 'text-gray-500'
                },
                {
                    value: booking.duration,
                    class: 'text-gray-500'
                },
                {
                    value: booking.amount,
                    class: parseFloat(booking.amount.replace(',', '')) < 0 ? 'text-red-600' : 'text-gray-700'
                },
                {
                    value: booking.requestDate,
                    class: 'text-gray-500'
                },
                {
                    value: booking.status,
                    class: ''
                }
            ];

            cells.forEach((cell, i) => {
                const td = document.createElement('td');
                td.className = 'px-6 py-4 ' + cell.class;

                if (i === 5) { // Status column
                    const statusSpan = document.createElement('span');
                    statusSpan.className = 'text-orange-500 bg-orange-100 px-3 py-2 rounded-full text-sm';
                    statusSpan.textContent = cell.value;
                    td.appendChild(statusSpan);
                } else {
                    td.textContent = cell.value;
                }

                row.appendChild(td);
            });

            tableBody.appendChild(row);
        });
    }

    // Function to render mobile cards
    function renderMobileCards() {
        const container = document.getElementById('mobileCardsContainer');

        bookings.forEach((booking, index) => {
            const card = document.createElement('div');
            card.className = `${index % 2 === 0 ? 'bg-purple-50' : 'bg-white'} rounded-lg mb-4 overflow-hidden`;

            // Create the content structure
            const fields = [{
                    label: 'NAME',
                    value: booking.name,
                    valueClass: 'font-medium text-gray-800'
                },
                {
                    label: 'LIST TYPE',
                    value: booking.listType,
                    valueClass: 'text-gray-500'
                },
                {
                    label: 'DURATION',
                    value: booking.duration,
                    valueClass: 'text-gray-500'
                },
                {
                    label: 'AMOUNT',
                    value: booking.amount,
                    valueClass: parseFloat(booking.amount.replace(',', '')) < 0 ? 'text-red-600' : 'text-gray-700'
                },
                {
                    label: 'REQUEST DATE',
                    value: booking.requestDate,
                    valueClass: 'text-gray-500'
                },
                {
                    label: 'STATUS',
                    value: booking.status,
                    valueClass: 'text-orange-500 bg-orange-100 px-3 py-1 rounded-full text-sm font-medium inline-block'
                }
            ];

            fields.forEach((field, i) => {
                const fieldDiv = document.createElement('div');
                fieldDiv.className = 'flex justify-between items-center px-4 py-3';
                if (i === fields.length - 1) {
                    fieldDiv.classList.remove('border-b');
                }

                const labelSpan = document.createElement('span');
                labelSpan.className = 'text-sm font-medium text-gray-600';
                labelSpan.textContent = field.label;

                const valueSpan = document.createElement('span');
                valueSpan.className = field.valueClass;
                valueSpan.textContent = field.value;

                fieldDiv.appendChild(labelSpan);
                fieldDiv.appendChild(valueSpan);
                card.appendChild(fieldDiv);
            });

            container.appendChild(card);
        });
    }

    // Initialize the table
    document.addEventListener('DOMContentLoaded', () => {
        renderDesktopTable();
        renderMobileCards();
    });
</script>