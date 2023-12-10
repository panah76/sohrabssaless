<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PagesController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('auth/register', [UserController::class, 'create']);
Route::post('auth/register', [UserController::class, 'store'])->name('register-user');

Route::get('/', function () {
    return view('pages.home');
});
Route::get('/', [PagesController::class, 'home'])->name('home');
Route::get('/printing', [PagesController::class, 'Printing'])->name('printing');
Route::get('/artworks', [PagesController::class, 'filter'])->name('artworks.filter');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

use App\Http\Controllers\IndexController;
use App\Http\Controllers\AdminController;
Route::get('/login', function () {
    return view('login');
});

Route::post('/login_check', [AdminController::class, 'login_check']);
Route::get('/admin/panel', [AdminController::class, 'panel']);
Route::get('/admin/news/add', [AdminController::class, 'add_news_pro']);
Route::post('/admin/news/add_check', [AdminController::class, 'add_news_check']);
