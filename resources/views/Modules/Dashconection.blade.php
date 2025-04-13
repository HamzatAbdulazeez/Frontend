<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1743834797/Blastily-Images/White_Black_M_Letter_Design_Business_Identity_for_Digital_Design_Company_Logo_2_pqu12u.png" type="image/x-icon">
    <!-- Add PolySans font -->
    <link href="https://db.onlinewebfonts.com/c/03bd7255184e8e8ad4d2a521fa920b6c?family=PolySans+Neutral" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Blastly - Cross-Board Marketing Platform</title>
</head>

<body class="h-screen overflow-hidden">
    <div class="flex h-screen">
        <!-- Sidebar -->
        @includeIf('Modules.sidebar')

        <!-- Main Content Area -->
        <div class="flex flex-col flex-1 bg-[#F6F8FA] overflow-hidden">
            <!-- Navbar -->
            <div class="shrink-0">
                @includeIf('Modules.navbar')
            </div>

            <div class="flex-1 overflow-y-auto p-6">
                @yield('page-content')
            </div>
        </div>
    </div>
</body>
