<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardDaftarAnimeController;
use App\Http\Controllers\DashboardAdminCategoryController;
use App\Http\Controllers\DaftarAnimeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Halaman Route Info PHP

Route::get('/test', function () {
    return view('test');
});

// Halaman Route Home & About

Route::get('/', function () {
    return view('home', [
        'title' => 'Home',
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'About',
        'name' => 'FITRAH RAMDHANI',
        'email' => 'FITRAHRAMDHANI@GMAIL.COM',
        'image' => 'sans.png'
    ]);
});

// Halaman Route Daftar Anime

Route::get('/daftar-anime', [DaftarAnimeController::class, 'index']);

// Halaman Route Anime

Route::get('/anime/{post:slug}', [DaftarAnimeController::class, 'show']);

// Halaman Route Daftar Category

Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Anime Categories',
        'categories' => Category::all()
    ]);
});

// Halaman Route Login

Route::get('/login', [LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class,'authenticate']);

// Halaman Route Register

Route::get('/register', [RegisterController::class,'index'])->middleware('guest');
Route::post('/register', [RegisterController::class,'store']);

// Halaman Route Logout

Route::post('/logout', [LoginController::class,'logout']);

// Halaman Route Dashboard

Route::get('/dashboard', [DashboardController::class,'index'])->middleware('auth');

// Halaman Route Dashboard Daftar Anime Check Slug

Route::get('/dashboard/daftar-anime/checkSlug', [DashboardDaftarAnimeController::class, 'checkSlug'])->middleware('auth');

// Halaman Route Dashboard Daftar Anime

Route::resource('/dashboard/daftar-anime', DashboardDaftarAnimeController::class)->middleware('auth');

// Halaman Route Dashboard Categories Check Slug

Route::get('/dashboard/categories/checkSlugCategory', [DashboardAdminCategoryController::class, 'checkSlugCategory'])->middleware('auth');

// Halaman Route Dashboard Admin Category

Route::resource('/dashboard/categories', DashboardAdminCategoryController::class)->except('show')->middleware('admin');