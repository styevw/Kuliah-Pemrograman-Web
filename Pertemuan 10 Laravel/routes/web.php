<?php

use Illuminate\Support\Facades\Route;

Route::get('/index', function () { 
return view('index'); 
}); 

Route::get('/produk', function () { 
return view('produk'); 
}); 

Route::get('/kontak', function () { 
return view('kontak'); 
}); 
