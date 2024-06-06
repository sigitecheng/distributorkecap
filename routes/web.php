<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LoginController;
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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


// MENAMBAHKAN FITUR MIDLEWARE -> PENGGUNAAN GUEST UNTUK HALAMAN YANG BELUM TERAUTENTIKASI ATAU TERDAFTAR
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest'); // PENAMBAHAN FITUR GUEST 
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);



// MENAMBAHKAN FITUR MIDLEWARE -> PENGGUNAAN DASHBOARD UNTUK HALAMAN AWAL MENU YANG TERTERA 
Route::get('/dashboard', function () {
    return view('be_dashboard/halamanutama/index', [
        "title"             => "Admin Dashboard",
        // "title_dashboard"   => "Data Interface Dashboard",
        ]);
    
            })->middleware('auth');