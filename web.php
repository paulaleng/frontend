<?php
use App\Http\Controllers\RequestAccountController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
// Other routes...

Route::middleware(['auth'])->group(function () {
Route::get('/request-account', [RequestAccountController::class, 'index'])->name('request.account');
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');



});
