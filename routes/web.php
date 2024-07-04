<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {

    #admin routes
    Route::middleware(['role:admin'])->group(function () {
        Route::view('/admin/dashboard', 'admin.dashboard')->name('admin.dashboard');
        #Products
        Route::resource('destinations', DestinationController::class)->except(['show']);
    });

    #user routes
    Route::middleware(['role:user'])->group(function () {
        Route::get('home', [HomeController::class, 'home'])->name('user.home');
        // order routes
        Route::get('/destinations/{destination}/order', [OrderController::class, 'create'])->name('order.create');
        Route::post('/destinations/{destination}/order', [OrderController::class, 'store'])->name('order.store');
        Route::get('order/history', [OrderController::class, 'orderHistory'])->name('orders.history');

        // payments routes
        Route::get('/payment/{orderId}', [PaymentController::class, 'show'])->name('payment.show');
        Route::post('/payment/callback/{order}', [PaymentController::class, 'callback'])->name('payment.callback');
        Route::get('/payment/success/{orderId}', [PaymentController::class, 'success'])->name('payment.success');
        Route::get('/payment/pending/{orderId}', [PaymentController::class, 'pending'])->name('payment.pending');


    });

    #profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/destinations/details', [DestinationController::class, 'show'])->name('destinations.show');

require __DIR__.'/auth.php';
