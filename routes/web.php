<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WebcamController;

Route::get('/', fn () => to_route('auth.login'));

// authenticate
Route::group(
    [
        'middleware' => [
            'auth:karyawan_gaa,visitor',
        ],
        'prefix' => 'h',
        'as' => 'home.',
    ],
    function () {
        Route::view('dashboard-page', 'dashboard/dashboard-page')->name('dashboard-page');


        Route::group(['middleware' => ['VisitorAuth']], function () {
            Route::view('visitor-feedback', 'layout/navigation-sidebar/manage-visitor.visitor-feedback')->name('visitor-feedback'); //tamu/visitoe
            Route::view('form-kesehatan', 'layout/navigation-sidebar/manage-visitor.form-kesehatan')->name('form-kesehatan'); //tamu/visitoe
            Route::view('capture-ktp', 'layout/navigation-sidebar/manage-visitor.capture-KTP')->name('capture-ktp'); //tamu/visitor
            Route::get('registrasi/{link:id_visitor}/{token}', [HomeController::class, 'registrasi'])->name('registrasi');
        });

        Route::view('visitor-approval', 'layout/navigation-sidebar/manage-visitor.visitor-approval')->name('visitor-approval'); //admin/security/visitor
        // Karyawan GA
        Route::group(['middleware' => ['KaryawanGaAuth']], function () {
            Route::view('generate', 'layout/navigation-sidebar/manage-visitor.generate-link-visitor')->name('generate'); //admin
            Route::view('scan-qr', 'layout/navigation-sidebar/manage-visitor.scan-qr')->name('scan-qr'); //admin
            Route::view('visitor-data', 'layout/navigation-sidebar/manage-visitor.visitor-data')->name('visitor-data'); // admin
            Route::view('lost-items', 'layout/navigation-sidebar/manage-visitor.lost-items')->name('lost-items'); //admin
            Route::view('track-visitor', 'track-visitor.track-visitor')->name('track-visitor'); //security
        });
        // food management
        Route::group(['middleware' => []], function () { // visitor
        });

        Route::view('insert-menu', 'layout/navigation-sidebar/food-management.insert-menu')->name('insert-menu');
        Route::view('food-menu', 'layout/navigation-sidebar/food-management.food-menu')->name('food-menu');
        Route::view('beverage-menu', 'layout/navigation-sidebar/food-management.beverage-menu')->name('beverage-menu');
        Route::view('menu-from-vendor', 'layout/navigation-sidebar/food-management.menu-from-vendor')->name('menu-from-vendor');
        Route::view('form-feedback', 'layout/navigation-sidebar/food-management.form-feedback')->name('form-feedback');
        Route::view('confirmed-order', 'layout/navigation-sidebar/food-management.confirmed-order')->name('confirmed-order');
        Route::view('blast-email', 'layout/navigation-sidebar/food-management.blast-email')->name('blast-email');
        Route::view('food-order', 'layout/navigation-sidebar/food-management.food-order')->name('food-order');
        Route::view('customer-feedback', 'layout/navigation-sidebar/food-management.customer-feedback')->name('customer-feedback');

        // webcam
        Route::controller(WebcamController::class)->group(function () {
            Route::get('webcam', 'index')->name('webcame');
            Route::post('webcam', 'takePicture')->name('webcame');
        });
        Route::view('visitor-checking', 'layout/navigation-sidebar/manage-visitor.visitor-checking')->name('visitor-checking');


        Route::post('logout', [HomeController::class, 'logout'])->name('logout');
    }
);

Route::group(
    [
        'middleware' => ['guest:karyawan_gaa', 'guest:visitor',],
        'prefix' => 'auth',
        'as' => 'auth.'
    ],
    function () {
        Route::view('login', 'auth/auth-login')->name('login');
    }
);
