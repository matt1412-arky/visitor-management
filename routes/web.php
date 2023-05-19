<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    HomeController
};
use App\Http\Livewire\{
    VisitorCheckingController,
    VisitorApprovalController,
    EmployeeAccount
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
        Route::get('visitor-checking', VisitorCheckingController::class)->name('visitor-checking'); //->middleware('can:visit');
        Route::view('dashboard-page', 'dashboard/dashboard-page')->name('dashboard-page');
        // ->middleware('can:visit');

        Route::group([
            // 'middleware' => ['CheckRole:visitor']
        ], function () {
            Route::group([
                // 'middleware' => ['can:visit']
            ], function () {
                Route::view('visitor-feedback', 'layout/navigation-sidebar/manage-visitor.visitor-feedback')->name('visitor-feedback'); //tamu/visitoe                
            });
        });

        Route::view('visitor-approval', 'layout/navigation-sidebar/manage-visitor.visitor-approval')->name('visitor-approval'); //admin/security
        // Karyawan GA
        Route::group(
            [
                // 'middleware' => ['CheckRole:employee']
            ],
            function () {
                Route::view('my-dashboard', 'layout/navigation-sidebar/manage-visitor.dashboard-ga')->name('my-dashboard'); //admin
                Route::view('visitor-data', 'layout/navigation-sidebar/manage-visitor.visitor-data')->name('visitor-data'); //admin
                Route::view('lost-items', 'layout/navigation-sidebar/manage-visitor.lost-items')->name('lost-items'); //admin
                Route::view('visitor-arival', 'layout/navigation-sidebar/manage-visitor.visitor-arival')->name('visitor-arival'); //admin
                Route::view('customize-feed', 'layout/navigation-sidebar/manage-visitor.customize-feed')->name('customize-feed'); //tamu/visitor

                Route::get('visitor-approval', VisitorApprovalController::class)->name('visitor-approval'); //tamu/visitor
                Route::get('employee-account', EmployeeAccount::class)->name('employee-account'); //admin                
                Route::view('visitor-account', 'layout/navigation-sidebar/manage-visitor/visitor-account')->name('visitor-account'); //admin               
            }
        );

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
        Route::view('register', 'auth/register')->name('register');
    }
);
