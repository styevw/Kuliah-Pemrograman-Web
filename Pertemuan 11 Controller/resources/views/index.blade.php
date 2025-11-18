@extends('layouts.main')

@section('title', 'Tandu Tea - Kesegaran dalam Setiap Tegukan')

@section('content')
    <section class="container mx-auto px-6 py-16 md:py-24">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <div class="text-center md:text-left">
                <h1 class="text-5xl lg:text-7xl font-display font-bold text-gray-900 mb-4 leading-tight animate-fade-in-down">Selamat Datang di Tandu Tea</h1>
                <p class="text-lg text-gray-600 max-w-lg mx-auto md:mx-0 mb-8 animate-fade-in-up">
                    Terlahir dari keberanian untuk memulai di tengah tantangan, menyajikan kesegaran tiada tara.
                </p>
                <a href="/produk" class="inline-block bg-yellow-500 text-white font-bold py-3 px-8 rounded-full text-lg hover:bg-yellow-600 hover:shadow-xl transform hover:scale-105 transition-all duration-300 shadow-lg">
                    Lihat Menu Kami
                </a>
            </div>
            <div class="animate-fade-in-up">
                <img src="img/logo.jpg" alt="Minuman Tandu Tea" class="rounded-3xl shadow-2xl w-full">
            </div>
        </div>
    </section>

    <section class="bg-white py-20">
        <div class="container mx-auto px-6">
                <div class="max-w-6xl mx-auto bg-white rounded-2xl shadow-xl overflow-hidden md:flex">
                    <div class="md:w-1/2">
                        <img class="object-cover w-full h-full min-h-[300px]" src="img/gerai.jpg" alt="Gerai Tandu Tea">
                    </div>
                    <div class="p-8 md:p-12 md:w-1/2 flex flex-col justify-center">
                    <h2 class="text-4xl font-display text-yellow-600 mb-4">Tentang Kami</h2>
                    <p class="text-gray-700 leading-relaxed whitespace-pre-line">
Tandu tea terbentuk pada tanggal 13 April 2020 dalam situasi awal-awal Covid, dimana pada saat itu orang-orang lagi tidak berjualan tapi memberanikan diri mengambil peluang yang ada.

Kenapa bisa namanya Tandu?
Nama Tandu sebenarnya diambil dari nama kecil yg hanya dikenal oleh keluarga saja.
Dan sekarang Alhamdulillah banyak anak-anak yang berdomisili di Sorowako maupun luar sudah kenal dengan Tandu. Walaupun hanya beberapa yang tau sejarah yang sebenarnya.</p>
                    </div>
                </div>
        </div>
    </section>

    <section class="py-20">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-display font-bold text-gray-900">Menu Favorit Pelanggan</h2>
                <p class="text-lg text-gray-600 mt-2">Cicipi beberapa menu yang paling disukai</p>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            
                <div class="bg-white rounded-xl shadow-lg overflow-hidden group transform hover:-translate-y-2 transition-all duration-300 hover:shadow-2xl flex flex-col text-center">
                    <div class="relative">
                        <img src="img/thaitea.jpg" alt="Thai Tea" class="w-full h-56 object-cover group-hover:scale-110 transition-transform duration-300">
                    </div>
                    <div class="p-6 flex flex-col flex-grow">
                        <h3 class="text-xl font-bold text-gray-900 group-hover:text-yellow-700 transition-colors duration-300">Thai Tea</h3>
                        <p class="text-gray-600 mt-2 text-sm flex-grow">Racikan teh susu spesial andalan kami dengan rasa yang otentik.</p>
                        <p class="mt-4 text-2xl font-bold text-yellow-600">Rp 10.000</p>
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
                    <img src="img/alpucokoreo.jpg" alt="Alpucok Oreo" class="w-full h-56 object-cover group-hover:scale-110 transition-transform duration-300">
                    <div class="p-6 flex flex-col flex-grow">
                        <h3 class="text-xl font-bold text-gray-900 group-hover:text-yellow-700 transition-colors duration-300">Alpucok Oreo</h3>
                        <p class="text-gray-600 mt-2 text-sm flex-grow">Alpukat kocok dengan taburan biskuit Oreo melimpah.</p>
                        <p class="mt-4 text-2xl font-bold text-yellow-600">Rp 18.000</p>
                    </div>
                </div>
            </div>
                <div class="text-center mt-12">
                    <a href="/produk" class="text-yellow-600 font-semibold text-lg hover:text-yellow-800 transition-colors duration-300">
                        Lihat Semua Menu &rarr;
                    </a>
                </div>
        </div>
    </section>
@endsection