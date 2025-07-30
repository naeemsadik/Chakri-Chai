<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=emerald&shade=500">
    <title>Chakri Chai</title>

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-gray-100">
            
    <nav class="bg-white shadow-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
                    <img class="h-8 w-auto" src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=emerald&shade=500" alt="Chakri Chai Logo">
                    <span class="ml-2 text-xl font-bold text-emerald-600">Chakri Chai</span>
                </div>

                <!-- Desktop Menu -->
                <div class="hidden sm:flex space-x-8">
                    <a href="{{ route('home') }}" class="text-gray-700 hover:text-emerald-600 font-medium">Home</a>
                </div>

                <!-- User/Profile Dropdown Placeholder -->
                <div class="hidden sm:flex items-center space-x-4">
                    <button type="button" class="bg-emerald-400 text-gray-100 px-3 py-1 rounded hover:bg-emerald-500">
                        Login
                    </button>
                </div>

                <!-- Mobile Hamburger -->
                <div class="sm:hidden">
                    <button id="mobile-menu-button" type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-600 hover:text-emerald-600 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-emerald-600">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="sm:hidden hidden px-4 pb-4">
            <a href="{{ route('home') }}" class="block px-3 py-2 rounded-md text-gray-700 hover:text-emerald-600 font-medium">Home</a>
            
        </div>
    </nav>


    <main>
        {{ $slot }}
    </main>
</html>