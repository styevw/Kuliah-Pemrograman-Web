
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hubungi Kami - Tandu Tea</title>
    
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
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-yellow-50 text-gray-800 antialiased">

    <header class="bg-white/80 backdrop-blur-sm shadow-md sticky top-0 z-50 transition-all duration-300">
        <nav class="container mx-auto px-6 py-4 flex justify-between items-center">
            <a href="index" class="flex items-center space-x-3">
                <img src="img/logo.jpg" alt="Logo Tandu Tea" class="w-25 h-12">
            </a>
            <ul class="hidden md:flex items-center space-x-8">
                <li><a href="index" class="nav-link text-lg text-gray-600 hover:text-yellow-600 transition duration-300 pb-1">Utama</a></li>
                <li><a href="produk" class="nav-link text-lg text-gray-600 hover:text-yellow-600 transition duration-300 pb-1">Produk</a></li>
                <li><a href="kontak" class="nav-link text-lg text-gray-600 hover:text-yellow-600 transition duration-300 pb-1 active">Kontak</a></li>
            </ul>
            <div class="md:hidden">
                <button id="mobile-menu-button" class="text-gray-800 hover:text-yellow-600 focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path></svg>
                </button>
            </div>
        </nav>
        <div id="mobile-menu" class="hidden md:hidden bg-white absolute w-full left-0 shadow-lg border-t border-gray-200">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                <a href="index" class="block text-center rounded-md px-3 py-2 text-base font-medium text-gray-700 hover:bg-yellow-500 hover:text-white transition duration-300">Utama</a>
                <a href="produk" class="block text-center rounded-md px-3 py-2 text-base font-medium text-gray-700 hover:bg-yellow-500 hover:text-white transition duration-300">Produk</a>
                <a href="kontak" class="block text-center rounded-md px-3 py-2 text-base font-medium text-gray-700 bg-yellow-100 text-yellow-800">Kontak</a>
            </div>
        </div>
    </header>

    <main class="container mx-auto px-6 py-12">
        <div class="text-center mb-16">
            <h1 class="text-5xl md:text-6xl font-display font-bold text-gray-900">Hubungi Kami</h1>
            <p class="text-xl text-gray-600 mt-3">Kami senang mendengar dari Anda. Kunjungi kami atau kirimkan pesan.</p>
        </div>

        <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-12">
      
            <div class="space-y-8">
              
                <div class="bg-white p-6 rounded-2xl shadow-lg flex items-start space-x-5 group">
                    <div class="flex-shrink-0 bg-yellow-100 p-4 rounded-full group-hover:bg-yellow-200 transition-colors duration-300">
                        <svg class="w-8 h-8 text-yellow-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-2xl font-semibold text-gray-900 font-display">Alamat Kedai</h3>
                        <a href="https://www.google.com/maps/place/Tandu+Tea+%26+Coffee/@-2.5242394,121.363745,19z/data=!4m15!1m8!3m7!1s0x2d9065364013f99d:0xd583fc564ecacab3!2sTandu+Tea+%26+Coffee!8m2!3d-2.5240923!4d121.3638255!10e5!16s%2Fg%2F11jnkwz143!3m5!1s0x2d9065364013f99d:0xd583fc564ecacab3!8m2!3d-2.5240923!4d121.3638255!16s%2Fg%2F11jnkwz143?entry=ttu&g_ep=EgoyMDI1MDkyNC4wIKXMDSoASAFQAw%3D%3D" target="_blank" rel="noopener noreferrer" class="text-gray-700 mt-1 hover:text-yellow-700 transition-colors duration-300 block">
                            Jl. Danau Matano, Sorowako,<br>
                            Kab. Luwu Timur, Sulawesi Selatan
                        </a>
                    </div>
                </div>

         
                <div class="bg-white p-6 rounded-2xl shadow-lg flex items-start space-x-5 group">
                    <div class="flex-shrink-0 bg-yellow-100 p-4 rounded-full group-hover:bg-yellow-200 transition-colors duration-300">
                        <svg class="w-8 h-8 text-yellow-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                           <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 6.75z" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-2xl font-semibold text-gray-900 font-display">Telepon</h3>
                        <a href="https://wa.me/6281241118286" target="_blank" rel="noopener noreferrer" class="text-gray-700 mt-1 hover:text-yellow-700 transition-colors duration-300 block">
                            +62 812-4111-8286
                        </a>
                    </div>
                </div>

                 <div class="bg-white p-6 rounded-2xl shadow-lg flex items-start space-x-5 group">
                    <div class="flex-shrink-0 bg-yellow-100 p-4 rounded-full group-hover:bg-yellow-200 transition-colors duration-300">
                       <svg class="w-8 h-8 text-yellow-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                         <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                       </svg>
                    </div>
                    <div>
                        <h3 class="text-2xl font-semibold text-gray-900 font-display">Jam Buka</h3>
                        <p class="text-gray-700 mt-1">
                            Setiap Hari: <strong>10:00 - 22:00 WITA</strong>
                        </p>
                    </div>
                </div>
            </div>

       
            <div class="rounded-2xl shadow-lg overflow-hidden">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3986.388839077977!2d121.36125051475567!3d-2.524087998188154!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d9065364013f99d%3A0xd583fc564ecacab3!2sTandu%20Tea%20%26%20Coffee!5e0!3m2!1sen!2sid!4v1668586326079!5m2!1sen!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="min-h-[450px] md:min-h-full"></iframe>
            </div>
        </div>
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

