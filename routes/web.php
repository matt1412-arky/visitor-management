<?php

use Illuminate\Support\Facades\Route;

// test
Route::middleware(['guest:web'])->group(function () {
    Route::view('/', 'auth/auth-login')->name('login');
    Route::view('dashboard-page', 'dashboard/dashboard-page')->name('dashboard-page');
    // barcode-security
    Route::view('barcode', 'barcode-security.barcode-security')->name('barcode');

    // track visitor
    Route::view('track-visitor', 'track-visitor.track-visitor')->name('track-visitor');

    // manage visitors

    Route::group([], function () {
        Route::view('scan-qr', 'layout/navigation-sidebar/manage-visitor.scan-qr')->name('scan-qr');
        Route::view('registrasi', 'layout/navigation-sidebar/manage-visitor.form-registrasi')->name('registrasi');
        Route::view('visitor-data', 'layout/navigation-sidebar/manage-visitor.visitor-data')->name('visitor-data');
        Route::view('lost-items', 'layout/navigation-sidebar/manage-visitor.lost-items')->name('lost-items');
        Route::view('visitor-arival', 'layout/navigation-sidebar/manage-visitor.visitor-arival')->name('visitor-arival');
        Route::view('visitor-feedback', 'layout/navigation-sidebar/manage-visitor.visitor-feedback')->name('visitor-feedback');
    });

    // food management
    Route::view('insert-menu', 'layout/navigation-sidebar/food-management.insert-menu')->name('insert-menu');
});
