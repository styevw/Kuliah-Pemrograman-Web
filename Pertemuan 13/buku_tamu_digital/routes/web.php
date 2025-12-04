<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestbookController;
use App\Http\Controllers\AuthController;


Route::get('/', [GuestbookController::class, 'index'])->name('home');
Route::post('/simpan-tamu', [GuestbookController::class, 'store'])->name('guestbook.store');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    
    Route::get('/admin', [GuestbookController::class, 'dashboard'])->name('admin.dashboard');

    Route::post('/guestbook', [GuestbookController::class, 'store'])->name('guestbook.store.admin'); 
    Route::put('/guestbook/{id}', [GuestbookController::class, 'update'])->name('guestbook.update');
    Route::delete('/guestbook/{id}', [GuestbookController::class, 'destroy'])->name('guestbook.destroy');

});