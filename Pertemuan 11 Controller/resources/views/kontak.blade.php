@extends('layouts.main')

@section('title', 'Hubungi Kami - Tandu Tea')

@section('content')
    <div class="container mx-auto px-6 py-12">
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
    </div>
@endsection