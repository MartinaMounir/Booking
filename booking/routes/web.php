<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\vendor\StayController;
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

//Route::get('/', function () {
//    return view('/home');
//});
Route::get('/', [\App\Http\Controllers\StayController::class, 'index']);

Route::get('/departments', [\App\Http\Controllers\StayController::class, 'departments']);
Route::middleware('auth')->get('cart/add/{stay_id}', [\App\Http\Controllers\StayController::class, 'AddToCart']);
Route::middleware('auth')->get('cart', [\App\Http\Controllers\StayController::class, 'cart']);
Route::middleware('auth')->get('cart/destroy/{stay_id}', [\App\Http\Controllers\StayController::class, 'destroycart']);

Route::prefix('/')->as('vendor.')->middleware(['auth', 'vendor'])->group(function () {
    Route::resource('vendor', controller: StayController::class);
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::resource('stays', controller: \App\Http\Controllers\StayController::class);

require __DIR__ . '/auth.php';
