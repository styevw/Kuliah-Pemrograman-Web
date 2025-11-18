@extends('layouts.main')

@section('title', 'Menu Kami - Tandu Tea')

@section('content')
    <div class="container mx-auto px-6 py-12">
        <div class="text-center mb-16">
            <h1 class="text-5xl md:text-6xl font-display font-bold text-gray-900">Menu Andalan Kami</h1>
            <p class="text-xl text-gray-600 mt-3">Menyajikan kesegaran teh pilihan untuk Anda</p>
        </div>

        <div class="mt-12">
            <h2 class="text-4xl font-display font-bold text-center text-gray-800 border-b-2 border-yellow-500 pb-4 mb-12">Varian Rasa</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
        
                <div class="bg-white rounded-xl shadow-lg overflow-hidden group transform hover:-translate-y-2 transition-all duration-300 hover:shadow-2xl flex flex-col text-center">
                    <div class="relative">
                        <img src="img/thaitea.jpg" alt="Thai Tea" class="w-full h-56 object-cover group-hover:scale-110 transition-transform duration-300">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        <div class="absolute top-3 right-3 bg-yellow-500 text-white text-xs font-bold px-3 py-1 rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-300 -translate-y-2 group-hover:translate-y-0">
                            Paling Laris
                        </div>
                    </div>
                    <div class="p-6 flex flex-col flex-grow">
                        <h3 class="text-xl font-bold text-gray-900 group-hover:text-yellow-700 transition-colors duration-300">Thai Tea</h3>
                        <p class="text-gray-600 mt-2 text-sm flex-grow">Racikan teh susu spesial andalan kami dengan rasa yang otentik.</p>
                        <p class="mt-4 text-2xl font-bold text-yellow-600">Rp 10.000</p>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-lg overflow-hidden group transform hover:-translate-y-2 transition-all duration-300 hover:shadow-2xl flex flex-col text-center">
                    <div class="relative">
                        <img src="img/lemonlecy.jpg" alt="Lemon Tea" class="w-full h-56 object-cover group-hover:scale-110 transition-transform duration-300">
                    </div>
                    <div class="p-6 flex flex-col flex-grow">
                        <h3 class="text-xl font-bold text-gray-900 group-hover:text-yellow-700 transition-colors duration-300">Lemon Tea</h3>
                        <p class="text-gray-600 mt-2 text-sm flex-grow">Perpaduan teh dan lemon yang menyegarkan dahaga.</p>
                        <p class="mt-4 text-2xl font-bold text-yellow-600">Rp 10.000</p>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-lg overflow-hidden group transform hover:-translate-y-2 transition-all duration-300 hover:shadow-2xl flex flex-col text-center">
                    <div class="relative">
                        <img src="img/lemonlecy.jpg" alt="Lecy Tea" class="w-full h-56 object-cover group-hover:scale-110 transition-transform duration-300">
                    </div>
                    <div class="p-6 flex flex-col flex-grow">
                        <h3 class="text-xl font-bold text-gray-900 group-hover:text-yellow-700 transition-colors duration-300">Lecy Tea</h3>
                        <p class="text-gray-600 mt-2 text-sm flex-grow">Kesegaran teh dengan manisnya buah leci asli dan menyegarkan.</p>
                        <p class="mt-4 text-2xl font-bold text-yellow-600">Rp 10.000</p>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-lg overflow-hidden group transform hover:-translate-y-2 transition-all duration-300 hover:shadow-2xl flex flex-col text-center">
                    <div class="relative">
                        <img src="img/milo.jpg" alt="Milo" class="w-full h-56 object-cover group-hover:scale-110 transition-transform duration-300">
                    </div>
                    <div class="p-6 flex flex-col flex-grow">
                        <h3 class="text-xl font-bold text-gray-900 group-hover:text-yellow-700 transition-colors duration-300">Milo</h3>
                        <p class="text-gray-600 mt-2 text-sm flex-grow">Minuman cokelat Milo favorit semua kalangan, disajikan dingin.</p>
                        <p class="mt-4 text-2xl font-bold text-yellow-600">Rp 10.000</p>
                    </div>
                </div>
                
                <div class="bg-white rounded-xl shadow-lg overflow-hidden group transform hover:-translate-y-2 transition-all duration-300 hover:shadow-2xl flex flex-col text-center">
                    <div class="relative">
                        <img src="img/coklat.jpg" alt="Cokelat" class="w-full h-56 object-cover group-hover:scale-110 transition-transform duration-300">
                    </div>
                    <div class="p-6 flex flex-col flex-grow">
                        <h3 class="text-xl font-bold text-gray-900 group-hover:text-yellow-700 transition-colors duration-300">Cokelat</h3>
                        <p class="text-gray-600 mt-2 text-sm flex-grow">Rasa cokelat klasik yang pekat dan nikmat.</p>
                        <p class="mt-4 text-2xl font-bold text-yellow-600">Rp 10.000</p>
                    </div>
                </div>
                
                <div class="bg-white rounded-xl shadow-lg overflow-hidden group transform hover:-translate-y-2 transition-all duration-300 hover:shadow-2xl flex flex-col text-center">
                    <div class="relative">
                        <img src="img/vanilla.jpg" alt="Vanilla" class="w-full h-56 object-cover group-hover:scale-110 transition-transform duration-300">
                    </div>
                    <div class="p-6 flex flex-col flex-grow">
                        <h3 class="text-xl font-bold text-gray-900 group-hover:text-yellow-700 transition-colors duration-300">Vanilla</h3>
                        <p class="text-gray-600 mt-2 text-sm flex-grow">Rasa vanilla yang lembut dan manis, cocok untuk bersantai.</p>
                        <p class="mt-4 text-2xl font-bold text-yellow-600">Rp 10.000</p>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-lg overflow-hidden group transform hover:-translate-y-2 transition-all duration-300 hover:shadow-2xl flex flex-col text-center">
                    <div class="relative">
                        <img src="img/milktea.jpg" alt="Milk Tea" class="w-full h-56 object-cover group-hover:scale-110 transition-transform duration-300">
                    </div>
                    <div class="p-6 flex flex-col flex-grow">
                        <h3 class="text-xl font-bold text-gray-900 group-hover:text-yellow-700 transition-colors duration-300">Milk Tea</h3>
                        <p class="text-gray-600 mt-2 text-sm flex-grow">Perpaduan teh hitam dan susu yang klasik dan creamy.</p>
                        <p class="mt-4 text-2xl font-bold text-yellow-600">Rp 10.000</p>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-lg overflow-hidden group transform hover:-translate-y-2 transition-all duration-300 hover:shadow-2xl flex flex-col text-center">
                    <div class="relative">
                        <img src="img/redvelvet.jpg" alt="Red Velvet" class="w-full h-56 object-cover group-hover:scale-110 transition-transform duration-300">
                    </div>
                    <div class="p-6 flex flex-col flex-grow">
                        <h3 class="text-xl font-bold text-gray-900 group-hover:text-yellow-700 transition-colors duration-300">Red Velvet</h3>
                        <p class="text-gray-600 mt-2 text-sm flex-grow">Rasa kue red velvet yang unik dalam segelas minuman dingin.</p>
                        <p class="mt-4 text-2xl font-bold text-yellow-600">Rp 10.000</p>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-lg overflow-hidden group transform hover:-translate-y-2 transition-all duration-300 hover:shadow-2xl flex flex-col text-center">
                    <div class="relative">
                        <img src="img/greentea.jpg" alt="Green Tea" class="w-full h-56 object-cover bg-gray-200 group-hover:scale-110 transition-transform duration-300">
                    </div>
                    <div class="p-6 flex flex-col flex-grow">
                        <h3 class="text-xl font-bold text-gray-900 group-hover:text-yellow-700 transition-colors duration-300">Green Tea</h3>
                        <p class="text-gray-600 mt-2 text-sm flex-grow">Teh hijau otentik dengan sentuhan rasa yang menenangkan.</p>
                        <p class="mt-4 text-2xl font-bold text-yellow-600">Rp 13.000</p>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-lg overflow-hidden group transform hover:-translate-y-2 transition-all duration-300 hover:shadow-2xl flex flex-col text-center">
                    <div class="relative">
                        <img src="img/milotea.jpg" alt="Milo Tea" class="w-full h-56 object-cover bg-gray-200 group-hover:scale-110 transition-transform duration-300">
                    </div>
                    <div class="p-6 flex flex-col flex-grow">
                        <h3 class="text-xl font-bold text-gray-900 group-hover:text-yellow-700 transition-colors duration-300">Milo Tea</h3>
                        <p class="text-gray-600 mt-2 text-sm flex-grow">Kombinasi unik antara teh, susu, dan cokelat Milo.</p>
                        <p class="mt-4 text-2xl font-bold text-yellow-600">Rp 13.000</p>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-lg overflow-hidden group transform hover:-translate-y-2 transition-all duration-300 hover:shadow-2xl flex flex-col text-center">
                    <div class="relative">
                        <img src="img/varianoreo.jpg" alt="Varian Oreo" class="w-full h-56 object-cover group-hover:scale-110 transition-transform duration-300">
                    </div>
                    <div class="p-6 flex flex-col flex-grow">
                        <h3 class="text-xl font-bold text-gray-900 group-hover:text-yellow-700 transition-colors duration-300">Varian Oreo</h3>
                        <p class="text-gray-600 mt-2 text-sm flex-grow">Minuman creamy dengan taburan biskuit Oreo yang renyah.</p>
                        <p class="mt-4 text-2xl font-bold text-yellow-600">Rp 13.000</p>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-lg overflow-hidden group transform hover:-translate-y-2 transition-all duration-300 hover:shadow-2xl flex flex-col text-center">
                    <div class="relative">
                        <img src="img/tiramisu.jpg" alt="Tiramisu" class="w-full h-56 object-cover group-hover:scale-110 transition-transform duration-300">
                    </div>
                    <div class="p-6 flex flex-col flex-grow">
                        <h3 class="text-xl font-bold text-gray-900 group-hover:text-yellow-700 transition-colors duration-300">Tiramisu</h3>
                        <p class="text-gray-600 mt-2 text-sm flex-grow">Rasa kopi dan keju khas tiramisu yang mewah.</p>
                        <p class="mt-4 text-2xl font-bold text-yellow-600">Rp 13.000</p>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-lg overflow-hidden group transform hover:-translate-y-2 transition-all duration-300 hover:shadow-2xl flex flex-col text-center">
                    <div class="relative">
                        <img src="img/vanillaicekopi.jpg" alt="Vanilla Ice Coffee" class="w-full h-56 object-cover group-hover:scale-110 transition-transform duration-300">
                    </div>
                    <div class="p-6 flex flex-col flex-grow">
                        <h3 class="text-xl font-bold text-gray-900 group-hover:text-yellow-700 transition-colors duration-300">Vanilla Ice Coffee</h3>
                        <p class="text-gray-600 mt-2 text-sm flex-grow">Es kopi dengan sentuhan sirup vanilla yang manis.</p>
                        <p class="mt-4 text-2xl font-bold text-yellow-600">Rp 13.000</p>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-lg overflow-hidden group transform hover:-translate-y-2 transition-all duration-300 hover:shadow-2xl flex flex-col text-center">
                    <div class="relative">
                        <img src="img/mangojely.jpg" alt="Manggo Jelly" class="w-full h-56 object-cover group-hover:scale-110 transition-transform duration-300">
                    </div>
                    <div class="p-6 flex flex-col flex-grow">
                        <h3 class="text-xl font-bold text-gray-900 group-hover:text-yellow-700 transition-colors duration-300">Manggo Jelly</h3>
                        <p class="text-gray-600 mt-2 text-sm flex-grow">Minuman rasa mangga segar dengan potongan jeli kenyal.</p>
                        <p class="mt-4 text-2xl font-bold text-yellow-600">Rp 13.000</p>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-lg overflow-hidden group transform hover:-translate-y-2 transition-all duration-300 hover:shadow-2xl flex flex-col text-center">
                    <div class="relative">
                        <img src="img/lecycemara.png" alt="Lecy Cemara" class="w-full h-56 object-cover group-hover:scale-110 transition-transform duration-300">
                    </div>
                    <div class="p-6 flex flex-col flex-grow">
                        <h3 class="text-xl font-bold text-gray-900 group-hover:text-yellow-700 transition-colors duration-300">Lecy Cemara</h3>
                        <p class="text-gray-600 mt-2 text-sm flex-grow">Minuman leci dengan sensasi rasa cemara yang unik.</p>
                        <p class="mt-4 text-2xl font-bold text-yellow-600">Rp 13.000</p>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-lg overflow-hidden group transform hover:-translate-y-2 transition-all duration-300 hover:shadow-2xl flex flex-col text-center">
                    <div class="relative">
                        <img src="img/peachjelly.jpg" alt="Peach Jelly" class="w-full h-56 object-cover group-hover:scale-110 transition-transform duration-300">
                    </div>
                    <div class="p-6 flex flex-col flex-grow">
                        <h3 class="text-xl font-bold text-gray-900 group-hover:text-yellow-700 transition-colors duration-300">Peach Jelly</h3>
                        <p class="text-gray-600 mt-2 text-sm flex-grow">Kesegaran buah peach berpadu dengan kenyalnya jeli.</p>
                        <p class="mt-4 text-2xl font-bold text-yellow-600">Rp 13.000</p>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-lg overflow-hidden group transform hover:-translate-y-2 transition-all duration-300 hover:shadow-2xl flex flex-col text-center">
                    <div class="relative">
                        <img src="img/brownsugar.jpg" alt="Brown Sugar Boba Milk" class="w-full h-56 object-cover group-hover:scale-110 transition-transform duration-300">
                    </div>
                    <div class="p-6 flex flex-col flex-grow">
                        <h3 class="text-xl font-bold text-gray-900 group-hover:text-yellow-700 transition-colors duration-300">Brown Sugar Boba Milk</h3>
                        <p class="text-gray-600 mt-2 text-sm flex-grow">Susu segar dengan sirup gula aren dan boba yang kenyal.</p>
                        <p class="mt-4 text-2xl font-bold text-yellow-600">Rp 15.000</p>
                    </div>
                </div>
                
                <div class="bg-white rounded-xl shadow-lg overflow-hidden group transform hover:-translate-y-2 transition-all duration-300 hover:shadow-2xl flex flex-col text-center">
                    <div class="relative">
                        <img src="img/matchalatte.jpg" alt="Matcha Latte" class="w-full h-56 object-cover group-hover:scale-110 transition-transform duration-300">
                    </div>
                    <div class="p-6 flex flex-col flex-grow">
                        <h3 class="text-xl font-bold text-gray-900 group-hover:text-yellow-700 transition-colors duration-300">Matcha Latte</h3>
                        <p class="text-gray-600 mt-2 text-sm flex-grow">Bubuk matcha premium dicampur dengan susu creamy.</p>
                        <p class="mt-4 text-2xl font-bold text-yellow-600">Rp 15.000</p>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-lg overflow-hidden group transform hover:-translate-y-2 transition-all duration-300 hover:shadow-2xl flex flex-col text-center">
                    <div class="relative">
                        <img src="img/cappucino.jpg" alt="Cappucino" class="w-full h-56 object-cover group-hover:scale-110 transition-transform duration-300">
                    </div>
                    <div class="p-6 flex flex-col flex-grow">
                        <h3 class="text-xl font-bold text-gray-900 group-hover:text-yellow-700 transition-colors duration-300">Cappucino</h3>
                        <p class="text-gray-600 mt-2 text-sm flex-grow">Kopi dengan susu dan busa tebal, disajikan dingin.</p>
                        <p class="mt-4 text-2xl font-bold text-yellow-600">Rp 15.000</p>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-lg overflow-hidden group transform hover:-translate-y-2 transition-all duration-300 hover:shadow-2xl flex flex-col text-center">
                    <div class="relative">
                        <img src="img/darkcoklat.jpg" alt="Dark Coklat" class="w-full h-56 object-cover group-hover:scale-110 transition-transform duration-300">
                    </div>
                    <div class="p-6 flex flex-col flex-grow">
                        <h3 class="text-xl font-bold text-gray-900 group-hover:text-yellow-700 transition-colors duration-300">Dark Coklat</h3>
                        <p class="text-gray-600 mt-2 text-sm flex-grow">Untuk pecinta cokelat sejati, rasa yang lebih pekat.</p>
                        <p class="mt-4 text-2xl font-bold text-yellow-600">Rp 15.000</p>
                    </div>
                </div>
                
                <div class="bg-white rounded-xl shadow-lg overflow-hidden group transform hover:-translate-y-2 transition-all duration-300 hover:shadow-2xl flex flex-col text-center">
                    <div class="relative">
                        <img src="img/dalgona.jpg" alt="Dalgona Coffee" class="w-full h-56 object-cover group-hover:scale-110 transition-transform duration-300">
                    </div>
                    <div class="p-6 flex flex-col flex-grow">
                        <h3 class="text-xl font-bold text-gray-900 group-hover:text-yellow-700 transition-colors duration-300">Dalgona Coffee</h3>
                        <p class="text-gray-600 mt-2 text-sm flex-grow">Kopi viral dengan busa lembut di atas susu segar.</p>
                        <p class="mt-4 text-2xl font-bold text-yellow-600">Rp 15.000</p>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-lg overflow-hidden group transform hover:-translate-y-2 transition-all duration-300 hover:shadow-2xl flex flex-col text-center">
                    <div class="relative">
                        <img src="img/taro.jpg" alt="Taro" class="w-full h-56 object-cover group-hover:scale-110 transition-transform duration-300">
                    </div>
                    <div class="p-6 flex flex-col flex-grow">
                        <h3 class="text-xl font-bold text-gray-900 group-hover:text-yellow-700 transition-colors duration-300">Taro</h3>
                        <p class="text-gray-600 mt-2 text-sm flex-grow">Rasa talas yang manis dan unik dengan warna ungu khas.</p>
                        <p class="mt-4 text-2xl font-bold text-yellow-600">Rp 15.000</p>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-lg overflow-hidden group transform hover:-translate-y-2 transition-all duration-300 hover:shadow-2xl flex flex-col text-center">
                    <div class="relative">
                        <img src="img/kopigularen.jpg" alt="Kopi Gula Aren" class="w-full h-56 object-cover group-hover:scale-110 transition-transform duration-300">
                    </div>
                    <div class="p-6 flex flex-col flex-grow">
                        <h3 class="text-xl font-bold text-gray-900 group-hover:text-yellow-700 transition-colors duration-300">Kopi Gula Aren</h3>
                        <p class="text-gray-600 mt-2 text-sm flex-grow">Es kopi susu kekinian dengan manis legit dari gula aren.</p>
                        <p class="mt-4 text-2xl font-bold text-yellow-600">Rp 15.000</p>
                    </div>
                </div>


                <div class="bg-white rounded-xl shadow-lg overflow-hidden group transform hover:-translate-y-2 transition-all duration-300 hover:shadow-2xl flex flex-col text-center">
                    <div class="relative">
                        <img src="img/lotusmilk.jpg" alt="Lotus Milk" class="w-full h-56 object-cover group-hover:scale-110 transition-transform duration-300">
                    </div>
                    <div class="p-6 flex flex-col flex-grow">
                        <h3 class="text-xl font-bold text-gray-900 group-hover:text-yellow-700 transition-colors duration-300">Lotus Milk</h3>
                        <p class="text-gray-600 mt-2 text-sm flex-grow">Susu dengan selai dan biskuit lotus biscoff yang karamel.</p>
                        <p class="mt-4 text-2xl font-bold text-yellow-600">Rp 20.000</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-20">
            <h2 class="text-4xl font-display font-bold text-center text-gray-800 border-b-2 border-yellow-500 pb-4 mb-12">Varian Buah</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
       
                <div class="bg-white rounded-xl shadow-lg overflow-hidden group transform hover:-translate-y-2 transition-all duration-300 hover:shadow-2xl flex flex-col text-center">
                    <img src="img/alpucokori.jpg" alt="Alpucok Original" class="w-full h-56 object-cover group-hover:scale-110 transition-transform duration-300">
                    <div class="p-6 flex flex-col flex-grow">
                        <h3 class="text-xl font-bold text-gray-900 group-hover:text-yellow-700 transition-colors duration-300">Alpucok Original</h3>
                        <p class="text-gray-600 mt-2 text-sm flex-grow">Alpukat kocok original dengan susu cokelat kental.</p>
                        <p class="mt-4 text-2xl font-bold text-yellow-600">Rp 15.000</p>
                    </div>
                </div>
      
                <div class="bg-white rounded-xl shadow-lg overflow-hidden group transform hover:-translate-y-2 transition-all duration-300 hover:shadow-2xl flex flex-col text-center">
                    <img src="img/alpucokoreo.jpg" alt="Alpucok Oreo" class="w-full h-56 object-cover group-hover:scale-110 transition-transform duration-300">
                    <div class="p-6 flex flex-col flex-grow">
                        <h3 class="text-xl font-bold text-gray-900 group-hover:text-yellow-700 transition-colors duration-300">Alpucok Oreo</h3>
                        <p class="text-gray-600 mt-2 text-sm flex-grow">Alpukat kocok dengan taburan biskuit Oreo melimpah.</p>
                        <p class="mt-4 text-2xl font-bold text-yellow-600">Rp 18.000</p>
                    </div>
                </div>
           
                <div class="bg-white rounded-xl shadow-lg overflow-hidden group transform hover:-translate-y-2 transition-all duration-300 hover:shadow-2xl flex flex-col text-center">
                    <img src="img/alpucokmilo.jpg" alt="Alpucok Milo" class="w-full h-56 object-cover group-hover:scale-110 transition-transform duration-300">
                    <div class="p-6 flex flex-col flex-grow">
                        <h3 class="text-xl font-bold text-gray-900 group-hover:text-yellow-700 transition-colors duration-300">Alpucok Milo</h3>
                        <p class="text-gray-600 mt-2 text-sm flex-grow">Kombinasi alpukat kocok dengan bubuk Milo yang nikmat.</p>
                        <p class="mt-4 text-2xl font-bold text-yellow-600">Rp 18.000</p>
                    </div>
                </div>
           
                <div class="bg-white rounded-xl shadow-lg overflow-hidden group transform hover:-translate-y-2 transition-all duration-300 hover:shadow-2xl flex flex-col text-center">
                    <img src="img/alpucokeju.jpg" alt="Alpucok Keju" class="w-full h-56 object-cover group-hover:scale-110 transition-transform duration-300">
                    <div class="p-6 flex flex-col flex-grow">
                        <h3 class="text-xl font-bold text-gray-900 group-hover:text-yellow-700 transition-colors duration-300">Alpucok Keju</h3>
                        <p class="text-gray-600 mt-2 text-sm flex-grow">Alpukat kocok dengan topping keju parut yang gurih.</p>
                        <p class="mt-4 text-2xl font-bold text-yellow-600">Rp 18.000</p>
                    </div>
                </div>
         
                <div class="bg-white rounded-xl shadow-lg overflow-hidden group transform hover:-translate-y-2 transition-all duration-300 hover:shadow-2xl flex flex-col text-center">
                    <img src="img/manggamilk.jpg" alt="Mangga Milk" class="w-full h-56 object-cover group-hover:scale-110 transition-transform duration-300">
                    <div class="p-6 flex flex-col flex-grow">
                        <h3 class="text-xl font-bold text-gray-900 group-hover:text-yellow-700 transition-colors duration-300">Mangga Milk</h3>
                        <p class="text-gray-600 mt-2 text-sm flex-grow">Minuman susu dengan puree buah mangga asli.</p>
                        <p class="mt-4 text-2xl font-bold text-yellow-600">Rp 15.000</p>
                    </div>
                </div>
            
                <div class="bg-white rounded-xl shadow-lg overflow-hidden group transform hover:-translate-y-2 transition-all duration-300 hover:shadow-2xl flex flex-col text-center">
                    <img src="img/nagamilk.jpg" alt="Naga Milk" class="w-full h-56 object-cover group-hover:scale-110 transition-transform duration-300">
                    <div class="p-6 flex flex-col flex-grow">
                        <h3 class="text-xl font-bold text-gray-900 group-hover:text-yellow-700 transition-colors duration-300">Naga Milk</h3>
                        <p class="text-gray-600 mt-2 text-sm flex-grow">Susu segar berpadu dengan jus buah naga yang kaya rasa.</p>
                        <p class="mt-4 text-2xl font-bold text-yellow-600">Rp 15.000</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-20">
            <h2 class="text-4xl font-display font-bold text-center text-gray-800 border-b-2 border-yellow-500 pb-4 mb-12">Varian Moctail</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-8">
            
                <div class="bg-white rounded-xl shadow-lg overflow-hidden group transform hover:-translate-y-2 transition-all duration-300 hover:shadow-2xl flex flex-col text-center">
                    <img src="img/bluelagon.jpg" alt="Blue Lagon" class="w-full h-56 object-cover group-hover:scale-110 transition-transform duration-300">
                    <div class="p-6 flex flex-col flex-grow">
                        <h3 class="text-xl font-bold text-gray-900 group-hover:text-yellow-700 transition-colors duration-300">Blue Lagon</h3>
                        <p class="text-gray-600 mt-2 text-sm flex-grow">Soda biru dengan sirup leci yang eksotis dan menyegarkan.</p>
                        <p class="mt-4 text-2xl font-bold text-yellow-600">Rp 13.000</p>
                    </div>
                </div>
               
                <div class="bg-white rounded-xl shadow-lg overflow-hidden group transform hover:-translate-y-2 transition-all duration-300 hover:shadow-2xl flex flex-col text-center">
                    <img src="img/mangosquash.jpg" alt="Manggo Squash" class="w-full h-56 object-cover group-hover:scale-110 transition-transform duration-300">
                    <div class="p-6 flex flex-col flex-grow">
                        <h3 class="text-xl font-bold text-gray-900 group-hover:text-yellow-700 transition-colors duration-300">Manggo Squash</h3>
                        <p class="text-gray-600 mt-2 text-sm flex-grow">Minuman soda dengan sari buah mangga yang segar.</p>
                        <p class="mt-4 text-2xl font-bold text-yellow-600">Rp 13.000</p>
                    </div>
                </div>
           
                <div class="bg-white rounded-xl shadow-lg overflow-hidden group transform hover:-translate-y-2 transition-all duration-300 hover:shadow-2xl flex flex-col text-center">
                    <img src="img/stroberysquash.jpg" alt="Strawberry Squash" class="w-full h-56 object-cover group-hover:scale-110 transition-transform duration-300">
                    <div class="p-6 flex flex-col flex-grow">
                        <h3 class="text-xl font-bold text-gray-900 group-hover:text-yellow-700 transition-colors duration-300">Strawberry Squash</h3>
                        <p class="text-gray-600 mt-2 text-sm flex-grow">Kesegaran soda berpadu dengan manisnya buah stroberi.</p>
                        <p class="mt-4 text-2xl font-bold text-yellow-600">Rp 13.000</p>
                    </div>
                </div>
              
                <div class="bg-white rounded-xl shadow-lg overflow-hidden group transform hover:-translate-y-2 transition-all duration-300 hover:shadow-2xl flex flex-col text-center">
                    <img src="img/mojitomint.jpg" alt="Mojito Mint" class="w-full h-56 object-cover group-hover:scale-110 transition-transform duration-300">
                    <div class="p-6 flex flex-col flex-grow">
                        <h3 class="text-xl font-bold text-gray-900 group-hover:text-yellow-700 transition-colors duration-300">Mojito Mint</h3>
                        <p class="text-gray-600 mt-2 text-sm flex-grow">Soda dengan perasan jeruk nipis dan daun mint segar.</p>
                        <p class="mt-4 text-2xl font-bold text-yellow-600">Rp 13.000</p>
                    </div>
                </div>
          
                <div class="bg-white rounded-xl shadow-lg overflow-hidden group transform hover:-translate-y-2 transition-all duration-300 hover:shadow-2xl flex flex-col text-center">
                    <img src="img/passiontea.jpg" alt="Passion Tea" class="w-full h-56 object-cover group-hover:scale-110 transition-transform duration-300">
                    <div class="p-6 flex flex-col flex-grow">
                        <h3 class="text-xl font-bold text-gray-900 group-hover:text-yellow-700 transition-colors duration-300">Passion Tea</h3>
                        <p class="text-gray-600 mt-2 text-sm flex-grow">Teh dengan sirup markisa yang memberikan rasa tropis.</p>
                        <p class="mt-4 text-2xl font-bold text-yellow-600">Rp 15.000</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-20">
            <h2 class="text-4xl font-display font-bold text-center text-gray-800 border-b-2 border-yellow-500 pb-4 mb-12">Alpukat Serut</h2>
             <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
       
                <div class="bg-white rounded-xl shadow-lg overflow-hidden group transform hover:-translate-y-2 transition-all duration-300 hover:shadow-2xl flex flex-col text-center">
                    <img src="img/serutori.png" alt="Serut Original" class="w-full h-56 object-cover group-hover:scale-110 transition-transform duration-300">
                    <div class="p-6 flex flex-col flex-grow">
                        <h3 class="text-xl font-bold text-gray-900 group-hover:text-yellow-700 transition-colors duration-300">Serut Original</h3>
                        <p class="text-gray-600 mt-2 text-sm flex-grow">Alpukat serut segar dengan topping susu kental manis.</p>
                        <p class="mt-4 text-2xl font-bold text-yellow-600">Rp 30.000</p>
                    </div>
                </div>
           
                <div class="bg-white rounded-xl shadow-lg overflow-hidden group transform hover:-translate-y-2 transition-all duration-300 hover:shadow-2xl flex flex-col text-center">
                    <img src="img/serutmilo.png" alt="Serut Milo" class="w-full h-56 object-cover group-hover:scale-110 transition-transform duration-300">
                    <div class="p-6 flex flex-col flex-grow">
                        <h3 class="text-xl font-bold text-gray-900 group-hover:text-yellow-700 transition-colors duration-300">Serut Milo</h3>
                        <p class="text-gray-600 mt-2 text-sm flex-grow">Alpukat serut dengan taburan bubuk Milo yang melimpah.</p>
                        <p class="mt-4 text-2xl font-bold text-yellow-600">Rp 30.000</p>
                    </div>
                </div>
             
                <div class="bg-white rounded-xl shadow-lg overflow-hidden group transform hover:-translate-y-2 transition-all duration-300 hover:shadow-2xl flex flex-col text-center">
                    <img src="img/serutoreo.png" alt="Serut Oreo" class="w-full h-56 object-cover group-hover:scale-110 transition-transform duration-300">
                    <div class="p-6 flex flex-col flex-grow">
                        <h3 class="text-xl font-bold text-gray-900 group-hover:text-yellow-700 transition-colors duration-300">Serut Oreo</h3>
                        <p class="text-gray-600 mt-2 text-sm flex-grow">Kombinasi alpukat serut dan remahan biskuit Oreo.</p>
                        <p class="mt-4 text-2xl font-bold text-yellow-600">Rp 30.000</p>
                    </div>
                </div>
            
                <div class="bg-white rounded-xl shadow-lg overflow-hidden group transform hover:-translate-y-2 transition-all duration-300 hover:shadow-2xl flex flex-col text-center">
                    <img src="img/serutkeju.png" alt="Serut Keju" class="w-full h-56 object-cover group-hover:scale-110 transition-transform duration-300">
                    <div class="p-6 flex flex-col flex-grow">
                        <h3 class="text-xl font-bold text-gray-900 group-hover:text-yellow-700 transition-colors duration-300">Serut Keju</h3>
                        <p class="text-gray-600 mt-2 text-sm flex-grow">Alpukat serut dengan parutan keju cheddar yang gurih.</p>
                        <p class="mt-4 text-2xl font-bold text-yellow-600">Rp 33.000</p>
                    </div>
                </div>
              
                <div class="bg-white rounded-xl shadow-lg overflow-hidden group transform hover:-translate-y-2 transition-all duration-300 hover:shadow-2xl flex flex-col text-center">
                    <img src="img/serut2toping.png" alt="Serut 2 Toping" class="w-full h-56 object-cover group-hover:scale-110 transition-transform duration-300">
                    <div class="p-6 flex flex-col flex-grow">
                        <h3 class="text-xl font-bold text-gray-900 group-hover:text-yellow-700 transition-colors duration-300">Serut 2 Toping</h3>
                        <p class="text-gray-600 mt-2 text-sm flex-grow">Pilih dua topping favoritmu untuk alpukat serutmu.</p>
                        <p class="mt-4 text-2xl font-bold text-yellow-600">Rp 33.000</p>
                    </div>
                </div>
             
                <div class="bg-white rounded-xl shadow-lg overflow-hidden group transform hover:-translate-y-2 transition-all duration-300 hover:shadow-2xl flex flex-col text-center">
                    <img src="img/serut3toping.png" alt="Serut 3 Toping" class="w-full h-56 object-cover group-hover:scale-110 transition-transform duration-300">
                    <div class="p-6 flex flex-col flex-grow">
                        <h3 class="text-xl font-bold text-gray-900 group-hover:text-yellow-700 transition-colors duration-300">Serut 3 Toping</h3>
                        <p class="text-gray-600 mt-2 text-sm flex-grow">Makin ramai dengan tiga pilihan topping di atas alpukat serut.</p>
                        <p class="mt-4 text-2xl font-bold text-yellow-600">Rp 35.000</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-20">
            <h2 class="text-4xl font-display font-bold text-center text-gray-800 border-b-2 border-yellow-500 pb-4 mb-12">Topping Pelengkap</h2>
            <div class="flex flex-wrap justify-center gap-8">
            
                <div class="bg-white rounded-xl shadow-lg overflow-hidden transform hover:-translate-y-2 transition-all duration-300 hover:shadow-2xl w-48 text-center group">
                    <img src="img/silky.png" alt="Topping Silky Pudding" class="w-full h-32 object-cover group-hover:scale-110 transition-transform duration-300">
                    <div class="p-4">
                        <p class="text-lg font-semibold text-gray-800 group-hover:text-yellow-700 transition-colors duration-300">Silky</p>
                        <p class="text-md font-bold text-yellow-600">+ Rp 5.000</p>
                    </div>
                </div>
             
                <div class="bg-white rounded-xl shadow-lg overflow-hidden transform hover:-translate-y-2 transition-all duration-300 hover:shadow-2xl w-48 text-center group">
                    <img src="img/jelly.png" alt="Topping Jelly" class="w-full h-32 object-cover group-hover:scale-110 transition-transform duration-300">
                    <div class="p-4">
                        <p class="text-lg font-semibold text-gray-800 group-hover:text-yellow-700 transition-colors duration-300">Jelly</p>
                        <p class="text-md font-bold text-yellow-600">+ Rp 5.000</p>
                    </div>
                </div>
         
                <div class="bg-white rounded-xl shadow-lg overflow-hidden transform hover:-translate-y-2 transition-all duration-300 hover:shadow-2xl w-48 text-center group">
                    <img src="img/oreo.png" alt="Topping Oreo" class="w-full h-32 object-cover group-hover:scale-110 transition-transform duration-300">
                    <div class="p-4">
                        <p class="text-lg font-semibold text-gray-800 group-hover:text-yellow-700 transition-colors duration-300">Oreo</p>
                        <p class="text-md font-bold text-yellow-600">+ Rp 5.000</p>
                    </div>
                </div>
           
                <div class="bg-white rounded-xl shadow-lg overflow-hidden transform hover:-translate-y-2 transition-all duration-300 hover:shadow-2xl w-48 text-center group">
                    <img src="img/boba.png" alt="Topping Boba" class="w-full h-32 object-cover group-hover:scale-110 transition-transform duration-300">
                    <div class="p-4">
                        <p class="text-lg font-semibold text-gray-800 group-hover:text-yellow-700 transition-colors duration-300">Boba</p>
                        <p class="text-md font-bold text-yellow-600">+ Rp 5.000</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection