<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    HomeController,
    WebcamController,
    CSReportController,
    VendorController,
    ConfirmOrderController as ConfirmedOrder,
    FoodOrderControler as FoodOrder,
};
use App\Http\Livewire\{
    VisitorRegister,
    VisitorCheckingController,
    VisitorApprovalController,
    EmployeeAccount,
    VendorAccount,
    GenerateLinkController,
    MenuController
};

Route::get('/', fn () => to_route('home.dashboard-page'));

// authenticate
Route::group(
    [
        'middleware' => [
            'auth:karyawan_gaa,visitor'
        ],
        'prefix' => 'h',
        'as' => 'home.',
    ],
    function () {
        Route::get('visitor-checking', VisitorCheckingController::class)->name('visitor-checking')->middleware('can:visit');
        Route::view('dashboard-page', 'dashboard/dashboard-page')->name('dashboard-page')->middleware('can:visit');

        Route::group([
            'middleware' => ['CheckRole:visitor']
        ], function () {
            Route::get('registrasi', VisitorRegister::class, 'registrasi')->name('registrasi');
            Route::group([
                'middleware' => ['can:visit']
            ], function () {
                Route::view('visitor-feedback', 'layout/navigation-sidebar/manage-visitor.visitor-feedback')->name('visitor-feedback'); //tamu/visitoe
                Route::view('form-kesehatan', 'layout/navigation-sidebar/manage-visitor.form-kesehatan')->name('form-kesehatan'); //tamu/visitoe
                Route::view('capture-ktp', 'layout/navigation-sidebar/manage-visitor.capture-KTP')->name('capture-ktp'); //tamu/visitor
            });
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
            Route::get('cs', [CSReportController::class, 'index'])->name('cs'); //tamu/visitor
            Route::post('report', [CSReportController::class, 'create'])->name('report'); //tamu/visitor

        });
        // food management
        Route::group(['middleware' => []], function () { // visitor
        });

        Route::get('insert-menu', [VendorController::class, 'index'])->name('insert-menu');
        Route::post('store', [VendorController::class, 'store'])->name('store-menu');
        Route::get('food-menu', MenuController::class)->name('food-menu');
        Route::get('confirmed-order', [ConfirmedOrder::class, 'index'])->name('confirmed-order');

        Route::view('beverage-menu', 'layout/navigation-sidebar/food-management.beverage-menu')->name('beverage-menu');
        Route::view('menu-from-vendor', 'layout/navigation-sidebar/food-management.menu-from-vendor')->name('menu-from-vendor');
        Route::view('form-feedback', 'layout/navigation-sidebar/food-management.form-feedback')->name('form-feedback');
        Route::view('blast-email', 'layout/navigation-sidebar/food-management.blast-email')->name('blast-email');
        Route::get('food-order', [FoodOrder::class, 'index'])->name('food-order');
        Route::post('food-order/{id}', [FoodOrder::class, 'orderFood'])->name('order-food');
        Route::view('customer-feedback', 'layout/navigation-sidebar/food-management.customer-feedback')->name('customer-feedback');
        Route::view('order-information', 'layout/navigation-sidebar/food-management.order-information')->name('order-information');

        // webcam
        Route::controller(WebcamController::class)->group(function () {
            // Route::get('webcam', 'index')->name('webcame');
            // Route::post('webcam', 'takePicture')->name('webcame');
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
