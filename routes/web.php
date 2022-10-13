<?php

use Illuminate\Support\Facades\Route;
use App\Models\Link;



Route::get('/', fn () => to_route('auth.login'));
// authenticate
Route::group(
    [
        // 'middleware' => ['auth:web', 'auth:karyawan_gaa'], //auth
        'middleware' => [
            'auth:karyawan_gaa,visitor',
        ],
        'prefix' => 'h', // h is represent as home, after login
        'as' => 'home.',
    ],
    function () {
        Route::view('dashboard-page', 'dashboard/dashboard-page')->name('dashboard-page');

        // Route::view('registrasi/{token}', 'layout/navigation-sidebar/manage-visitor.form-registrasi')->name('registrasi'); //tamu / visitor

        // Route::get('registrasi/{link:id_visitor}/{token}', function (Link $link, $token) {
        Route::get('registrasi', function () {
            // $link  =  $link->where('id_visitor', auth('visitor')->id())
            //     ->where('token', $token)
            //     ->first();
            // if (!$link) {
            //     return back();
            // }
            return view(
                'layout/navigation-sidebar/manage-visitor.form-registrasi',
                [
                    // 'nama_karyawan' => $link->karyawan_ga->name,
                ]
            );
        })->name('registrasi');

        // barcode-security
        Route::view('barcode', 'barcode-security.barcode-security')->name('barcode');
        // track visitor
        Route::view('track-visitor', 'track-visitor.track-visitor')->name('track-visitor');


        // manage visitors
        Route::group([], function () {
            Route::view('generate', 'layout/navigation-sidebar/manage-visitor.generate-link-visitor')->name('generate'); //admin
            Route::view('scan-qr', 'layout/navigation-sidebar/manage-visitor.scan-qr')->name('scan-qr'); //admin
            Route::view('visitor-data', 'layout/navigation-sidebar/manage-visitor.visitor-data')->name('visitor-data'); // admin
            Route::view('lost-items', 'layout/navigation-sidebar/manage-visitor.lost-items')->name('lost-items'); //admin
            Route::view('visitor-arival', 'layout/navigation-sidebar/manage-visitor.visitor-arival')->name('visitor-arival'); //admin
            Route::view('visitor-feedback', 'layout/navigation-sidebar/manage-visitor.visitor-feedback')->name('visitor-feedback'); //tamu/visitoe
            Route::view('form-kesehatan', 'layout/navigation-sidebar/manage-visitor.form-kesehatan')->name('form-kesehatan'); //tamu/visitoe
            Route::view('visitor-approval', 'layout/navigation-sidebar/manage-visitor.visitor-approval')->name('visitor-approval'); //tamu/visitoe
        });

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

        Route::post('logout', function () {
            auth('karyawan_gaa')->logout();
            return to_route('auth.login');
        })->name('logout');
    }
);

Route::group(
    [
        // 'middleware' => ['guest:web'],
        'middleware' => ['guest:karyawan_gaa', 'guest:visitor',],
        'prefix' => 'auth',
        'as' => 'auth.'
    ],
    function () {
        Route::view('login', 'auth/auth-login')->name('login');
    }
);
