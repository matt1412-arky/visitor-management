<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return to_route('auth.login');
});
// authenticate
Route::group(
    [
        'middleware' => ['auth:web'],
        'prefix' => 'h', // h is represent as home, after login
        'as' => 'home.',
    ],
    function () {
        Route::view('dashboard-page', 'dashboard/dashboard-page')->name('dashboard-page');
        Route::view('registrasi', 'layout/navigation-sidebar/manage-visitor.form-registrasi')->name('registrasi'); //tamu / visitor

        // barcode-security
        Route::view('barcode', 'barcode-security.barcode-security')->name('barcode');

        // track visitor
        Route::view('track-visitor', 'track-visitor.track-visitor')->name('track-visitor');
        // manage visitors

        // Route::group([], function () {
        Route::view('scan-qr', 'layout/navigation-sidebar/manage-visitor.scan-qr')->name('scan-qr'); //admin
        Route::view('visitor-data', 'layout/navigation-sidebar/manage-visitor.visitor-data')->name('visitor-data'); // admin
        Route::view('lost-items', 'layout/navigation-sidebar/manage-visitor.lost-items')->name('lost-items'); //admin
        Route::view('visitor-arival', 'layout/navigation-sidebar/manage-visitor.visitor-arival')->name('visitor-arival'); //admin
        Route::view('visitor-feedback', 'layout/navigation-sidebar/manage-visitor.visitor-feedback')->name('visitor-feedback'); //tamu/visitor
        Route::view('form-kesehatan', 'layout/navigation-sidebar/manage-visitor.form-kesehatan')->name('form-kesehatan'); //tamu/visitor
        Route::view('capture-KTP', 'layout/navigation-sidebar/manage-visitor.capture-KTP')->name('capture-KTP'); //tamu/visitor
        // });

        // food management
        Route::view('insert-menu', 'layout/navigation-sidebar/food-management.insert-menu')->name('insert-menu');
        Route::view('food-menu', 'layout/navigation-sidebar/food-management.food-menu')->name('food-menu');
        Route::view('beverage-menu', 'layout/navigation-sidebar/food-management.beverage-menu')->name('beverage-menu');
        Route::view('menu-from-vendor', 'layout/navigation-sidebar/food-management.menu-from-vendor')->name('menu-from-vendor');
        // dihapus
        Route::view('form-gizi', 'layout/navigation-sidebar/food-management.form-verifikasi-gizi')->name('form-gizi');
        // dihapus

        Route::view('form-feedback', 'layout/navigation-sidebar/food-management.form-feedback')->name('form-feedback');
        Route::view('confirmed-order', 'layout/navigation-sidebar/food-management.confirmed-order')->name('confirmed-order');
        Route::view('blast-email', 'layout/navigation-sidebar/food-management.blast-email')->name('blast-email');
        Route::view('food-order', 'layout/navigation-sidebar/food-management.food-order')->name('food-order');
        Route::view('customer-feedback', 'layout/navigation-sidebar/food-management.customer-feedback')->name('customer-feedback');

        // admin ga
        Route::view('dashboard-ga', 'layout/navigation-sidebar/manage-visitor.dashboard-ga')->name('dashboard-ga');
        Route::view('generate', 'layout/navigation-sidebar/manage-visitor.generate-link-visitor')->name('generate');
        Route::view('customize-feed', 'layout/navigation-sidebar/manage-visitor.customize-feed')->name('customize-feed');


        // logout
        Route::post('logout', function () {
            Auth::logout();
            return to_route('auth.login');
        })->name('logout');
    }
);

Route::group(
    [
        'middleware' => ['guest:web'],
        'prefix' => 'auth',
        'as' => 'auth.'
    ],
    function () {
        Route::view('login', 'auth/auth-login')->name('login');
    }
);
