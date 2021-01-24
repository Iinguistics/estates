<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PrivateDiningController;


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

Route::get('/', function () {
    return view('home');
});

Route::get('/private', function () {
    return view('private');
});

Route::get('/menu', function () {
    return view('menu');
});

Route::get('/test', function () {
    return view('test');
});



Auth::routes([
    // to disable register page
    'register' => false
]);

//admin routes
Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
//private dining / events
Route::get('/events', [App\Http\Controllers\PrivateDiningController::class, 'index'])->name('events.index')->middleware('auth');
Route::get('/events/{id}', [PrivateDiningController::class, 'show' ])->name('events.show')->middleware('auth');
Route::delete('/events/{id}', [PrivateDiningController::class, 'destroy'])->name('events.destroy')->middleware('auth');
//orders
Route::get('/orders', [App\Http\Controllers\OrderController::class, 'index'])->name('orders.index')->middleware('auth');
Route::get('/orders/{id}', [OrderController::class, 'show' ])->name('orders.show')->middleware('auth');
Route::delete('/orders/{id}', [OrderController::class, 'destroy'])->name('orders.destroy')->middleware('auth');


//public
Route::post('/private', [PrivateDiningController::class, 'store']);

Route::post('/order', [OrderController::class, 'store']);
