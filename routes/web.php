<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [App\Http\Controllers\LandingPage::class, 'index']);

// Route Paket Wisata
Route::get('all-paket', [App\Http\Controllers\LandingPage::class, 'allpaket']);
Route::get('paket/{id}', [App\Http\Controllers\LandingPage::class, 'indexpaket']);

// Route Festival Event
Route::get('all-event', [App\Http\Controllers\LandingPage::class, 'allevent']);
Route::get('event/{id}', [App\Http\Controllers\LandingPage::class, 'indexevent']);

// Route Ekraf
Route::get('all-ekraf', [App\Http\Controllers\LandingPage::class, 'allekraf']);
Route::get('ekraf/{id}', [App\Http\Controllers\LandingPage::class, 'indexekraf']);
Route::get('regis-ekraf', [App\Http\Controllers\LandingPage::class, 'create']);
Route::post('regis-ekraf', [App\Http\Controllers\LandingPage::class, 'store']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function () {
    // Admin Dashboard Route
    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index']);

     // Admin User Route
    Route::get('user', [App\Http\Controllers\Admin\UserController::class, 'index']);
    Route::get('add-user', [App\Http\Controllers\Admin\UserController::class, 'create']);
    Route::post('add-user', [App\Http\Controllers\Admin\UserController::class, 'store']);
    Route::get('edit-user/{id}', [App\Http\Controllers\Admin\UserController::class, 'edit']);
    Route::put('update-user/{id}', [App\Http\Controllers\Admin\UserController::class, 'update']);
    Route::get('delete-user/{id}', [App\Http\Controllers\Admin\UserController::class, 'destroy']);
    Route::get('verified/{id}', [App\Http\Controllers\Admin\UserController::class, 'verifiedekraf']);
    Route::get('verified/{id}', [App\Http\Controllers\Admin\UserController::class, 'deniedekraf']);
    
    // Admin Ekraf Route
    Route::get('ekraf', [App\Http\Controllers\Admin\EkrafController::class, 'index']);
    Route::get('add-ekraf', [App\Http\Controllers\Admin\EkrafController::class, 'create']);
    Route::post('add-ekraf', [App\Http\Controllers\Admin\EkrafController::class, 'store']);
    Route::get('edit-ekraf/{id}', [App\Http\Controllers\Admin\EkrafController::class, 'edit']);
    Route::put('update-ekraf/{id}', [App\Http\Controllers\Admin\EkrafController::class, 'update']);
    Route::get('delete-ekraf/{id}', [App\Http\Controllers\Admin\EkrafController::class, 'destroy']);
    Route::get('verified-ekraf/{id}', [App\Http\Controllers\Admin\EkrafController::class, 'verifiedekraf']);
    Route::get('denied-ekraf/{id}', [App\Http\Controllers\Admin\EkrafController::class, 'deniedekraf']);

    // Admin Paket Wisata Route
    Route::get('paket-wisata', [App\Http\Controllers\Admin\PaketWisataController::class, 'index']);
    Route::get('add-paket-wisata', [App\Http\Controllers\Admin\PaketWisataController::class, 'create']);
    Route::post('add-paket-wisata', [App\Http\Controllers\Admin\PaketWisataController::class, 'store']);
    Route::get('edit-paket-wisata/{id}', [App\Http\Controllers\Admin\PaketWisataController::class, 'edit']);
    Route::put('update-paket-wisata/{id}', [App\Http\Controllers\Admin\PaketWisataController::class, 'update']);
    Route::get('delete-paket-wisata/{id}', [App\Http\Controllers\Admin\PaketWisataController::class, 'destroy']);

    // Admin Evenet Wisata Route
    Route::get('event-wisata', [App\Http\Controllers\Admin\EventWisataController::class, 'index']);
    Route::get('add-event-wisata', [App\Http\Controllers\Admin\EventWisataController::class, 'create']);
    Route::post('add-event-wisata', [App\Http\Controllers\Admin\EventWisataController::class, 'store']);
    Route::get('edit-event-wisata/{id}', [App\Http\Controllers\Admin\EventWisataController::class, 'edit']);
     Route::put('update-event-wisata/{id}', [App\Http\Controllers\Admin\EventWisataController::class, 'update']);
    Route::get('delete-event-wisata/{id}', [App\Http\Controllers\Admin\EventWisataController::class, 'destroy']);

});

