<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CourtController;
use App\Http\Controllers\UserController;

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


Route::get('/' , [UserController::class , 'index'])->name('user.index');
Route::get('/contact', [UserController::class , 'contact'])->name('user.contact');
Route::get('/home' , [UserController::class , 'home'])->name('user.home');
Route::get('/about' , [UserController::class , 'about'])->name('user.about');
Route::get('/terms' , [UserController::class , 'terms'])->name('user.terms');




//User routes

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//end user routes


//admin routes

Route::group(['prefix' => 'admin', 'middleware' => 'redirectAdmin'], function () {
    Route::get('login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
    Route::post('login', [AdminAuthController::class, 'login'])->name('admin.login.post');
    Route::get('logout', [AdminAuthController::class, 'logout'])->name('admin.logout');
});
Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');

    //Courts Routes
    Route::get('/courts', [CourtController::class, 'index'])->name('admin.courts');
    Route::post('/courts/store', [CourtController::class, 'store'])->name('admin.courts.store');
    Route::put('/courts/update/{id}' , [CourtController::class , 'update'])->name('admin.courts.update');
    Route::delete('/courts/image/{id}', [CourtController::class, 'deleteImage'])->name('admin.image.delete');
    Route::delete('/courts/{id}', [CourtController::class, 'destroy'])->name('admin.courts.destroy');
});
//end admin routes

require __DIR__ . '/auth.php';
