<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{HomeController, WebcamController};
use App\Http\Livewire\{
    VisitorCheckingController,
    VisitorApprovalController,
    EmployeeAccount,
    VendorAccount,
    GenerateLinkController,
    MenuController
};
use App\Http\Livewire\Visitor\VisitorRegister;

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
        Route::get('visitor-checking', VisitorCheckingController::class)->name('visitor-checking');

        Route::view('dashboard-page', 'dashboard/dashboard-page')->name('dashboard-page');
        Route::group(['middleware' => ['CheckRole:visitor']], function () {
            Route::view('visitor-feedback', 'layout/navigation-sidebar/manage-visitor.visitor-feedback')->name('visitor-feedback'); //tamu/visitoe
            Route::view('form-kesehatan', 'layout/navigation-sidebar/manage-visitor.form-kesehatan')->name('form-kesehatan'); //tamu/visitoe
            Route::view('capture-ktp', 'layout/navigation-sidebar/manage-visitor.capture-KTP')->name('capture-ktp'); //tamu/visitor
            Route::get('registrasi/{link:id_visitor}/{token?}', VisitorRegister::class, 'registrasi')->name('registrasi');
            Route::view('visitor-feedback', 'layout/navigation-sidebar/manage-visitor.visitor-feedback')->name('visitor-feedback'); //tamu/visitor
        });

        Route::view('visitor-approval', 'layout/navigation-sidebar/manage-visitor.visitor-approval')->name('visitor-approval'); //admin/security/visitor
        // Karyawan GA
        Route::group(['middleware' => ['CheckRole:employee']], function () {
            Route::view('my-dashboard', 'layout/navigation-sidebar/manage-visitor.dashboard-ga')->name('my-dashboard'); //admin
            Route::view('visitor-data', 'layout/navigation-sidebar/manage-visitor.visitor-data')->name('visitor-data'); //admin
            Route::view('lost-items', 'layout/navigation-sidebar/manage-visitor.lost-items')->name('lost-items'); //admin
            Route::view('visitor-arival', 'layout/navigation-sidebar/manage-visitor.visitor-arival')->name('visitor-arival'); //admin
            Route::view('form-kesehatan', 'layout/navigation-sidebar/manage-visitor.form-kesehatan')->name('form-kesehatan'); //tamu/visitoe
            Route::view('customize-feed', 'layout/navigation-sidebar/manage-visitor.customize-feed')->name('customize-feed'); //tamu/visitor
            Route::view('track-visitor', 'track-visitor.track-visitor')->name('track-visitor'); //security
            Route::get('visitor-approval', VisitorApprovalController::class)->name('visitor-approval'); //tamu/visitor
            Route::get('employee-account', EmployeeAccount::class)->name('employee-account');
            Route::get('vendor-account', VendorAccount::class)->name('vendor-account'); //admin
            Route::get('generate', GenerateLinkController::class)->name('generate'); //admin
            Route::view('cs', 'layout/navigation-sidebar/CS.cs')->name('cs'); //tamu/visitor

        });
        // food management
        Route::group(['middleware' => []], function () { // visitor
        });

        Route::view('insert-menu', 'layout/navigation-sidebar/food-management.insert-menu')->name('insert-menu');
        Route::get('food-menu', MenuController::class)->name('food-menu');

        Route::view('beverage-menu', 'layout/navigation-sidebar/food-management.beverage-menu')->name('beverage-menu');
        Route::view('menu-from-vendor', 'layout/navigation-sidebar/food-management.menu-from-vendor')->name('menu-from-vendor');
        Route::view('form-feedback', 'layout/navigation-sidebar/food-management.form-feedback')->name('form-feedback');
        Route::view('confirmed-order', 'layout/navigation-sidebar/food-management.confirmed-order')->name('confirmed-order');
        Route::view('blast-email', 'layout/navigation-sidebar/food-management.blast-email')->name('blast-email');
        Route::view('food-order', 'layout/navigation-sidebar/food-management.food-order')->name('food-order');
        Route::view('customer-feedback', 'layout/navigation-sidebar/food-management.customer-feedback')->name('customer-feedback');
        Route::view('order-information', 'layout/navigation-sidebar/food-management.order-information')->name('order-information');

        // webcam
        Route::controller(WebcamController::class)->group(function () {
            Route::get('webcam', 'index')->name('webcame');
            Route::post('webcam', 'takePicture')->name('webcame');
        });

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
