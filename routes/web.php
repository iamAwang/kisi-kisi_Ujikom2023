<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HotelController;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Bagian Hotel
// Bagian Hotel
// Bagian Hotel
// Bagian Hotel
// Bagian Hotel

Route::get('/hotel', [HotelController::class, 'index'])->name('hotel.index');
Route::get('/create-hotel', [HotelController::class,'create'])->name('hotel.create');
Route::post('/store-hotel', [HotelController::class,'store'])->name('hotel.store');
Route::get('/edit-hotel/{id}',[HotelController::class,'edit'])->name('hotel.edit'); // $id harus sama yg di controller
Route::post('/update-hotel/{id}',[HotelController::class,'update'])->name('hotel.update');
Route::post('/delete-hotel/{id}',[HotelController::class,'delete'])->name('hotel.delete');

// Bagian Booking // Bagian Booking // Bagian Booking //
// Bagian Booking // Bagian Booking // Bagian Booking //
// Bagian Booking // Bagian Booking // Bagian Booking //
// Bagian Booking // Bagian Booking // Bagian Booking //
// Bagian Booking // Bagian Booking // Bagian Booking //

Route::get('/booking', [HotelController::class, 'indexBooking'])->name('booking.index');
Route::get('/create-booking', [HotelController::class,'create_booking'])->name('booking.create');
Route::post('/store-booking', [HotelController::class,'store_booking'])->name('booking.store');
Route::get('/edit-booking/{id}',[HotelController::class,'editBooking'])->name('booking.edit');
Route::post('/update-booking/{id}',[HotelController::class,'updateBooking'])->name('booking.update');
Route::post('/delete-booking/{id}',[HotelController::class,'deleteBooking'])->name('booking.delete');

Route::get('/parallax',[HotelController::class,'createParallax']);
Route::get('/animated-background',[HotelController::class,'createAnimatedBackground']);

Route::get('/math',[HotelController::class,'createMath']);