<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['guest:web'])->group(function () {
    Route::view('/', 'auth/auth-login')->name('login');
    Route::view('dashboard-page', 'dashboard/dashboard-page')->name('dashboard-page');
});
