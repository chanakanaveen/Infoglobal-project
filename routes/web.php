<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\DashboardController;

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

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    Route::view('about', 'about')->name('about');

    Route::get('users', [UserController::class, 'index'])->name('users.index');

    Route::get('profile', [ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [ProfileController::class, 'update'])->name('profile.update');

    Route::get('show',[PersonController::class,'index'])->name('show');
    Route::post('people/store', [PersonController::class, 'store'])->name('person.store');

    Route::get('people/view/{person}', [PersonController::class, 'person'])->name('person.show');

    Route::get('people/edit/{person}', [PersonController::class, 'edit'])->name('person.edit');
    Route::patch('people/update/{person}', [PersonController::class, 'update'])->name('person.update');

    Route::get('people/delete/{person}', [PersonController::class, 'delete'])->name('person.delete');

    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
});
