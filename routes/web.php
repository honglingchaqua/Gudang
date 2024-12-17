<?php  

use Illuminate\Support\Facades\Route;  

Route::get('/', function () {  
    return view('home');  // Hapus 'pages.'  
})->name('home');  

Route::get('/about', function () {  
    return view('about');  // Hapus 'pages.'  
})->name('about');