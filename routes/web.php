<?php

use Illuminate\Support\Facades\Route;

// test
Route::middleware(['guest:web'])->group(function () {
    Route::view('/', 'auth/auth-login')->name('login');
    Route::view('dashboard-page', 'dashboard/dashboard-page')->name('dashboard-page');
    Route::view('registrasi', 'layout/navigation-sidebar/manage-visitor.form-registrasi')->name('registrasi');
    Route::view('scan-qr', 'layout/navigation-sidebar/manage-visitor.scan-qr')->name('scan-qr');
});
