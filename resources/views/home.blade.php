@extends('layouts.app')  

@section('content')  
<div class="text-center">  
    <h1 class="text-4xl font-bold mb-4">Selamat Datang Di Inventaris 
       <p>Agung Toyota Paal 10</p> </h1>  
    <p class="text-xl text-gray-600">  
        Semua Kebutuhan Anda Ada Di Kami  
    </p>  

    <div class="mt-8 grid grid-cols-1 md:grid-cols-3 gap-6">  
        <div class="bg-white rounded-xl shadow-lg overflow-hidden transition-all duration-300 hover:shadow-2xl transform hover:-translate-y-2">  
            <div class="relative">  
                <img src="{{ asset('kelly-jean-cKjbI0Y00X0-unsplash.jpg') }}"   
                     alt="Feature Image"   
                     class="w-full h-48 object-cover">  
                <div class="absolute inset-0 bg-black opacity-20 hover:opacity-10 transition-opacity"></div>  
            </div>
            <div class="p-6">  
                <h2 class="text-2xl font-bold mb-3 text-gray-800">Alat Tulis Kantor</h2>  
                <p class="text-gray-600 leading-relaxed">  
                    Alat Tulis Kantor Yang Berkualitas Dan Premium.  Mulai Dari Pena, Notebook, Map Dan Lainnya. Kami Menyediakan Apa Yang Kamu Butuhkan
                </p>  
                <div class="mt-4">  
                    <a href="#" class="w-full inline-block bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 transition-colors">  
                        Check 
                    </a>  
                </div>  
            </div>  
        </div>  

        <div class="bg-white rounded-xl shadow-lg overflow-hidden transition-all duration-300 hover:shadow-2xl transform hover:-translate-y-2">  
            <div class="relative">  
                <img src="{{ asset('vishnu-mohanan-xoOW8cvsWIo-unsplash.jpg') }}"   
                     alt="Feature Image"   
                     class="w-full h-48 object-cover">  
                <div class="absolute inset-0 bg-black opacity-20 hover:opacity-10 transition-opacity"></div>  
            </div>  
            <div class="p-6">  
                <h2 class="text-2xl font-bold mb-3 text-gray-800">Computer</h2>  
                <p class="text-gray-600 leading-relaxed">  
                   Kebutuhan Barang Kommputer Yang Kamu Butuhkan. Mulai Dari Tinta Printer, SSD, RAM, Dan Perbaikan Komputer / Printer 
                </p>  
                <div class="mt-4">  
                    <a href="#" class="w-full block bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 transition-colors text-center">  
                        Check  
                    </a>  
                </div>
            </div>  
        </div>  
        <div class="bg-white rounded-xl shadow-lg overflow-hidden transition-all duration-300 hover:shadow-2xl transform hover:-translate-y-2">  
            <div class="relative">  
                <img src="{{ asset('catgirlmutant-vi2DBzRizjQ-unsplash.jpg') }}"   
                     alt="Feature Image"   
                     class="w-full h-48 object-cover">  
                <div class="absolute inset-0 bg-black opacity-20 hover:opacity-10 transition-opacity"></div>  
            </div>  
            <div class="p-6">  
                <h2 class="text-2xl font-bold mb-3 text-gray-800">Other Items</h2>  
                <p class="text-gray-600 leading-relaxed">  
                    Barang Yang Mungkin Tidak Masuk Ke Dalam Kategory Lainnya. Seperti Makanan Snack, <p class="text-gray-600 leading-relaxed">Lampu dan Sebagainnya</p>  
                </p>  
                <div class="mt-4">  
                    <a href="#" class="w-full inline-block bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 transition-colors">  
                        Check  
                    </a>  
                </div>  
            </div>  
        </div>  
    </div>  
@endsection  

@section('styles')  
<style>  
    /* Custom styles for home page */  
</style>  
@endsection  