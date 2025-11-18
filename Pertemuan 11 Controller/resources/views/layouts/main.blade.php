<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Tandu Tea')</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="style.css">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        yellow: {
                            100: '#fef9c3',
                            200: '#fef08a',
                            400: '#facc15',
                            500: '#eab308',
                            600: '#ca8a04',
                            700: '#a16207',
                            800: '#854d0e',
                        }
                    },
                    keyframes: {
                        'fade-in-down': {
                            '0%': { opacity: '0', transform: 'translateY(-20px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' },
                        },
                        'fade-in-up': {
                            '0%': { opacity: '0', transform: 'translateY(20px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' },
                        }
                    },
                    animation: {
                        'fade-in-down': 'fade-in-down 0.8s ease-out',
                        'fade-in-up': 'fade-in-up 0.8s ease-out 0.3s backwards',
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-yellow-50 text-gray-800 antialiased">

    <header class="bg-white/80 backdrop-blur-sm shadow-md sticky top-0 z-50 transition-all duration-300">
        <nav class="container mx-auto px-6 py-4 flex justify-between items-center">

            <a href="/" class="flex items-center space-x-3">
                <img src="img/logo.jpg" alt="Logo Tandu Tea" class="w-25 h-12">
            </a>

            <ul class="hidden md:flex items-center space-x-8">
                <li>
                    <a href="/" class="nav-link text-lg transition duration-300 pb-1 {{ request()->is('/') ? 'text-yellow-600 active border-b-2 border-yellow-600' : 'text-gray-600 hover:text-yellow-600' }}">
                        Utama
                    </a>
                </li>
                <li>
                    <a href="/produk" class="nav-link text-lg transition duration-300 pb-1 {{ request()->is('produk') ? 'text-yellow-600 active border-b-2 border-yellow-600' : 'text-gray-600 hover:text-yellow-600' }}">
                        Produk
                    </a>
                </li>
                <li>
                    <a href="/kontak" class="nav-link text-lg transition duration-300 pb-1 {{ request()->is('kontak') ? 'text-yellow-600 active border-b-2 border-yellow-600' : 'text-gray-600 hover:text-yellow-600' }}">
                        Kontak
                    </a>
                </li>
            </ul>

            <div class="md:hidden">
                <button id="mobile-menu-button" class="text-gray-800 hover:text-yellow-600 focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path></svg>
                </button>
            </div>
        </nav>

        <div id="mobile-menu" class="hidden md:hidden bg-white absolute w-full left-0 shadow-lg border-t border-gray-200">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                <a href="/" class="block text-center rounded-md px-3 py-2 text-base font-medium {{ request()->is('/') ? 'bg-yellow-100 text-yellow-800' : 'text-gray-700 hover:bg-yellow-500 hover:text-white' }}">Utama</a>
                <a href="/produk" class="block text-center rounded-md px-3 py-2 text-base font-medium {{ request()->is('produk') ? 'bg-yellow-100 text-yellow-800' : 'text-gray-700 hover:bg-yellow-500 hover:text-white' }}">Produk</a>
                <a href="/kontak" class="block text-center rounded-md px-3 py-2 text-base font-medium {{ request()->is('kontak') ? 'bg-yellow-100 text-yellow-800' : 'text-gray-700 hover:bg-yellow-500 hover:text-white' }}">Kontak</a>
            </div>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="bg-white mt-16 border-t border-gray-200">
        <div class="container mx-auto px-6 py-8">
             <div class="flex justify-center mb-6 space-x-6">
                <a href="https://www.instagram.com/tandu.tea/" class="text-gray-500 hover:text-yellow-600 transition-colors duration-300" target="_blank" rel="noopener noreferrer">
                     <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.024.06 1.378.06 3.808s-.012 2.784-.06 3.808c-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.024.048-1.378.06-3.808.06s-2.784-.012-3.808-.06c-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.048-1.024-.06-1.378-.06-3.808s.012-2.784.06-3.808c.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 016.343 2.525c.636-.247 1.363-.416 2.427-.465C9.793 2.013 10.147 2 12.315 2zm0 1.623c-2.403 0-2.748.01-3.725.058-.926.045-1.555.2-2.086.411a3.287 3.287 0 00-1.164.763c-.45.45-.67 1-.763 1.164-.21.531-.366 1.16-.411 2.086-.048.977-.058 1.322-.058 3.725s.01 2.748.058 3.725c.045.926.2 1.554.411 2.086.093.465.313.914.763 1.164.45.45 1 .67 1.164.763.531.21 1.16.366 2.086.411.977.048 1.322.058 3.725.058s2.748-.01 3.725-.058c.926-.045 1.555-.2 2.086-.411.465-.093.914-.313 1.164-.763.45-.45.67-1 .763-1.164.21-.531.366-1.16.411-2.086.048-.977.058-1.322.058-3.725s-.01-2.748-.058-3.725c-.045-.926-.2-1.555-.411-2.086-.093-.465-.313-.914-.763-1.164a3.287 3.287 0 00-1.164-.763c-.531-.21-1.16-.366-2.086-.411-.977-.048-1.322-.058-3.725-.058zM12 8.25a3.75 3.75 0 100 7.5 3.75 3.75 0 000-7.5zM12 14a2 2 0 110-4 2 2 0 010 4zm6.406-7.185a.75.75 0 100-1.5.75.75 0 000 1.5z" clip-rule="evenodd" /></svg>
                </a>
            </div>
            <p class="text-center text-gray-500">
                &copy; 2025 Tandu Tea A.S. All Rights Reserved.
            </p>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>