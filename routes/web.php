<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Admin\Auth\LoginController as AdminLogin;
;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::name('admin.')->group(function () {
    Route::get('login', [AdminLogin::class, 'showLoginForm'])->name('login');
    Route::post('login', [AdminLogin::class, 'login']);
    Route::post('logout', [AdminLogin::class, 'logout'])->name('logout');

    Route::middleware('auth:admin')->group(function () {
        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('issued-book-list', [BooksController::class, 'index'])->name('issued.books');
        Route::get('available-book-list', [BooksController::class, 'AvailableBookList'])->name('available.books');
    });
});

Route::get('/',[LoginController::class, 'index'])->name('login');
Route::get('/authenticate',[LoginController::class, 'authenticate'])->name('authenticate.login');


// Route::prefix('admin')->group(function () {
//     Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
//     Route::get('/issued-book-list', [BooksController::class, 'index'])->name('issued.books');
//     Route::get('/available-book-list', [BooksController::class, 'AvailableBookList'])->name('available.books');
// });
