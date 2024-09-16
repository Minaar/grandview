<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\InvoiceController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::prefix('rooms')->group(function () {
    Route::get('/', [RoomController::class, 'index'])->name('rooms.index');
    Route::get('/add', [RoomController::class, 'add'])->name('rooms.add');
    Route::get('/guest', [RoomController::class, 'guest'])->name('rooms.guest');
});

Route::prefix('reservation')->group(function () {
    Route::get('/', [ReservationController::class, 'index'])->name('reservation.index');
    Route::get('/add', [ReservationController::class, 'add'])->name('reservation.add');
 
});

Route::prefix('invoice')->group(function () {
    Route::get('/', [InvoiceController::class, 'index'])->name('invoice.index');
    Route::get('/add', [InvoiceController::class, 'add'])->name('invoice.add');
 
});

