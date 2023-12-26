<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BmiController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminPanelController;


Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);

Route::prefix('admin')->middleware(['auth', 'admin'])->group(function () {
    Route::get('panel', [AdminPanelController::class, 'index'])->name('admin.panel');
});

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

// Route::get('/', function () {
//     return view('home');
// });


Route::get('/', [HomeController::class, 'HomeController'])->name('home');

Route::get('artikel', function () {
    return view('artikel');
});

Route::get('video', function () {
    return view('video');
});

Route::get('BMI', function () {
    return view('BMI');
});

Route::get('product', function () {
    return view('product');
});

Route::post('/bmi', [BmiController::class, 'hitungBMI']);
