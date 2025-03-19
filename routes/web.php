<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;


// Route::get('/email/verify', function () {
//     return view('send_email_verify');
// })->name('email.verify');

Route::get('/email/verify/{id}', [AuthController::class, 'verify_email'])->name('email_verify');

Route::get('/', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginOp'])->name('loginOp');

Route::get('/customer_registration', [AuthController::class, 'customer_registration'])->name('customer_registration');
Route::post('/customer_registration', [AuthController::class, 'customer_registrationOp'])->name('customer_registrationOp');

Route::get('/admin_registration', [AuthController::class, 'admin_registration'])->name('admin_registration');
Route::post('/admin_registration', [AuthController::class, 'admin_registrationOp'])->name('admin_registrationOp');


Route::middleware('auth')->group(function () {
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/admin_dashboard', [AuthController::class, 'admin_dashboard'])->name('admin_dashboard');
    Route::get('/customer_dashboard', [AuthController::class, 'customer_dashboard'])->name('customer_dashboard');
});
